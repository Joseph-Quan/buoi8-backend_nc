<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View
    {
         // Dữ liệu giả — sẽ thay bằng DB query ở buổi sau 
        $articles = [ 
            ['id' => 1, 'title' => 'Giới thiệu Laravel Framework', 
             'author' => 'Nguyễn Văn A', 'date' => '2024-01-15'], 
            ['id' => 2, 'title' => 'Routing trong Laravel – Toàn tập', 
             'author' => 'Trần Thị B',  'date' => '2024-01-18'], 
            ['id' => 3, 'title' => 'Blade Templates – Hướng dẫn chi tiết', 
             'author' => 'Lê Văn C',    'date' => '2024-01-22'], 
            ['id' => 4, 'title' => 'Eloquent ORM – Làm việc với Database', 
             'author' => 'Phạm Thị D',  'date' => '2024-01-25'],
        ];
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('articles.index')->with('success', 'Đăng bài viết mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Contracts\View\View
    {
         // Giả lập tìm kiếm theo ID 
        $allArticles = [ 
            1 => ['id' => 1, 'title' => 'Giới thiệu Laravel Framework', 
                  'author' => 'Nguyễn Văn A', 'date' => '2024-01-15', 
                  'content' => 'Laravel là một PHP framework mạnh mẽ, ', 
                  ], 
            2 => ['id' => 2, 'title' => 'Routing trong Laravel – Toàn tập', 
                  'author' => 'Trần Thị B', 'date' => '2024-01-18', 
                  'content' => 'Routing là cơ chế ánh xạ URL đến xử lý 
logic...', 
                  ], 
        ]; 
 
        // Kiểm tra ID có tồn tại không 
        if (!isset($allArticles[$id])) { 
            abort(404, 'Bài viết không tồn tại'); 
        } 
 
        $article = $allArticles[$id]; 
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Illuminate\Contracts\View\View
    {
        $allArticles = [ 
            1 => ['id' => 1, 'title' => 'Giới thiệu Laravel Framework', 
                  'author' => 'Nguyễn Văn A', 'date' => '2024-01-15', 
                  'content' => 'Laravel là một PHP framework mạnh mẽ, ', 
                  ], 
            2 => ['id' => 2, 'title' => 'Routing trong Laravel – Toàn tập', 
                  'author' => 'Trần Thị B', 'date' => '2024-01-18', 
                  'content' => 'Routing là cơ chế ánh xạ URL đến xử lý 
logic...', 
                  ], 
        ];

        if (!isset($allArticles[$id])) {
            abort(404, 'Bài viết không tồn tại');
        }

        $article = $allArticles[$id];
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('articles.index')->with('success', 'Cập nhật bài viết thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('articles.index')->with('success', 'Xóa bài viết thành công!');
    }
}
