@extends('layouts.app') 
 
@section('title', 'Blog – Danh sách Bài viết') 
 
@section('page-header') 
    <div class="py-3">
        <h1 class="display-6 fw-bold">📝 Blog Articles</h1> 
        <p class="text-muted mb-0">{{ count($articles) }} bài viết hữu ích dành cho bạn</p> 
    </div>
@endsection 
 
@section('content') 
    <div class="d-flex justify-content-between align-items-center mb-4"> 
        <h2 class="h4 mb-0">Tất cả bài viết</h2> 
        <a href="{{ route('articles.create') }}" class="btn btn-primary shadow-sm"> 
            ✨ Thêm bài viết mới
        </a> 
    </div> 
 
    <div class="row g-4">
        @forelse($articles as $article) 
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0 hover-lift transition"> 
                    <div class="card-body p-4 d-flex flex-column"> 
                        <span class="badge bg-primary-subtle text-primary align-self-start mb-2">Laravel</span>
                        <h4 class="card-title fw-bold"> 
                            <a href="{{ route('articles.show', $article['id']) }}" 
                               class="text-decoration-none text-dark hover-primary"> 
                                {{ $article['title'] }} 
                            </a> 
                        </h4> 
                        <p class="card-text text-muted flex-grow-1">
                            Khám phá những kiến thức bổ ích nhất về framework Laravel cùng các ví dụ thực hành cụ thể...
                        </p>
                        <hr class="text-muted my-3 opacity-25">
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="text-muted small"> 
                                ✍ {{ $article['author'] }} &nbsp;•&nbsp; 📅 {{ $article['date'] }} 
                            </span> 
                            <a href="{{ route('articles.show', $article['id']) }}" 
                               class="btn btn-link text-primary p-0 text-decoration-none fw-bold">Đọc tiếp →</a> 
                        </div>
                    </div> 
                </div> 
            </div>
        @empty 
            <div class="col-12">
                <div class="alert alert-info py-4 text-center">Chưa có bài viết nào.</div> 
            </div>
        @endforelse 
    </div>
@endsection 
