<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Request $request): View
    {
        $posts = Post::query()
            ->published()
            ->with(['user', 'category', 'tags'])
            ->withCount('comments')
            ->when($request->search, function ($q, $search) {
                $q->where('title', 'like', "%{$search}%");
            })
            ->when($request->category_id, function ($q, $catId) {
                $q->ofCategory((int) $catId);
            })
            ->when($request->sort === 'popular', function ($q) {
                $q->popular();
            }, function ($q) {
                $q->orderByDesc('published_at');
            })
            ->paginate(10)
            ->withQueryString();

        $categories = Category::orderBy('name')->get();

        return view('posts.index', compact('posts', 'categories'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $userId = auth()->id() ?? User::value('id');

        $post = Post::create($request->validated() + [
            'user_id' => $userId,
            'slug'    => Str::slug($request->title) . '-' . time(),
        ]);

        // Redirect den show, kem flash thanh cong
        return redirect()
            ->route('posts.show', $post)
            ->with('success', 'Bài viết đã được tạo thành công!');
    }

    public function show(Post $post): View
    {
        $post->load(['user', 'category', 'tags', 'approvedComments.user']);
        $post->loadCount('comments');
        // Route Model Binding: tu 404 neu khong tim thay
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->validated());

        return redirect()
            ->route('posts.show', $post)
            ->with('success', 'Cap nhat bai viet thanh cong!');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $title = $post->title; // Luu title TRUOC KHI xoa
        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('success', 'Da xoa bai viet: ' . $title);
    }

    public function trashed() 
    { 
        $posts = Post::onlyTrashed()->latest('deleted_at')->paginate(10); 
        return view('posts.trashed', compact('posts')); 
    } 
    
    public function restore($id) 
    { 
        Post::onlyTrashed()->findOrFail($id)->restore(); 
    
        return redirect()->route('posts.trashed') 
            ->with('success', 'Đã khôi phục bài viết.'); 
    }
}
