{{-- resources/views/posts/index.blade.php --}}
@extends('layouts.app')
@section('title', 'Danh sách bài viết')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Danh sách bài viết</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Tạo bài viết</a>
</div>

{{-- ── Form tìm kiếm & lọc ─────────────────────────── --}}
<form method="GET" action="{{ route('posts.index') }}" class="row g-2 mb-4">
    <div class="col-md-4">
        <input type="text" name="search" class="form-control"
               value="{{ request('search') }}" placeholder="Tìm kiếm tiêu đề...">
    </div>
    <div class="col-md-3">
        <select name="category_id" class="form-select">
            <option value="">Tất cả danh mục</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}"
                    {{ request('category_id') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <select name="sort" class="form-select">
            <option value="newest" {{ request('sort', 'newest') === 'newest' ? 'selected' : '' }}>Mới nhất</option>
            <option value="popular" {{ request('sort') === 'popular' ? 'selected' : '' }}>Phổ biến nhất</option>
        </select>
    </div>
    <div class="col-md-2 d-flex gap-2">
        <button type="submit" class="btn btn-outline-primary w-100">Tìm</button>
        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary w-100">Xoá</a>
    </div>
</form>

{{-- ── Danh sách bài viết ───────────────────────────── --}}
@if ($posts->isEmpty())
    <div class="text-center py-5 text-muted">
        <p>Không có bài viết nào.</p>
        <a href="{{ route('posts.create') }}" class="btn btn-outline-primary">Tạo bài viết đầu tiên</a>
    </div>
@else
    <div class="list-group shadow-sm">
        @foreach ($posts as $post)
            <div class="list-group-item list-group-item-action py-3">
                <div class="d-flex justify-content-between align-items-start">
                    <div class="flex-grow-1 me-3">
                        <h5 class="mb-1">
                            <a href="{{ route('posts.show', $post) }}"
                               class="text-decoration-none text-dark">
                                {{ $post->title }}
                            </a>
                        </h5>

                        {{-- Meta: tác giả, ngày, đọc mất bao lâu, số comments --}}
                        <div class="d-flex flex-wrap gap-3 text-muted small mb-2">
                            <span>✍️ {{ optional($post->user)->name ?? 'Ẩn danh' }}</span>
                            <span>📅 {{ $post->published_at?->format('d/m/Y') }}</span>
                            <span>⏱️ {{ $post->reading_time }}</span>
                            <span>💬 {{ $post->comments_count }} bình luận</span>
                            @if ($post->category)
                                <span>📂 {{ $post->category->name }}</span>
                            @endif
                        </div>

                        {{-- Excerpt --}}
                        @if ($post->excerpt)
                            <p class="mb-1 text-muted small">{{ Str::limit($post->excerpt, 150) }}</p>
                        @else
                            <p class="mb-1 text-muted small">{{ Str::limit($post->content, 120) }}</p>
                        @endif

                        {{-- Tags --}}
                        @if ($post->tags->isNotEmpty())
                            <div class="mt-2 d-flex flex-wrap gap-1">
                                @foreach ($post->tags as $tag)
                                    <span class="badge bg-secondary">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="d-flex gap-2 flex-shrink-0">
                        <a href="{{ route('posts.edit', $post) }}"
                           class="btn btn-sm btn-outline-primary">Sửa</a>
                        <form method="POST" action="{{ route('posts.destroy', $post) }}"
                              onsubmit="return confirmDelete('{{ $post->title }}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Xoá</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="mt-4 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endif

@endsection

@push('scripts')
<script>
    function confirmDelete(title) {
        return confirm('Bạn có chắc muốn xoá bài viết: ' + title + '?');
    }
</script>
@endpush
