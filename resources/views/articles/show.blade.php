@extends('layouts.app') 
  
@section('title', $article['title']) 
  
@section('content') 
  
<nav aria-label="breadcrumb" class="mb-4"> 
    <ol class="breadcrumb"> 
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Trang chủ</a></li> 
        <li class="breadcrumb-item"><a href="{{ route('articles.index') }}" class="text-decoration-none">Blog</a></li> 
        <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($article['title'], 40) }}</li> 
    </ol> 
</nav> 
  
<div class="row"> 
    <div class="col-lg-8"> 
  
        <div class="card shadow-sm border-0 mb-4"> 
            <div class="card-body p-4 p-md-5"> 
  
                <span class="badge bg-primary-subtle text-primary mb-3">Laravel Framework</span>
                <h1 class="fw-bold mb-3">{{ $article['title'] }}</h1> 
  
                <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom text-muted small"> 
                    <span>👤 Tác giả: <strong>{{ $article['author'] }}</strong></span> 
                    <span>📅 Ngày đăng: {{ $article['date'] }}</span> 
                </div> 
  
                <div class="post-content" style="line-height: 1.9; font-size: 1.1rem; color: #333;"> 
                    {{ $article['content'] }}
                </div> 
  
            </div> 
        </div> 
  
        <div class="d-flex justify-content-between mb-4"> 
            <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary"> 
                ← Quay lại danh sách 
            </a> 
        </div> 
  
    </div> 
  
    <div class="col-lg-4"> 
        <div class="card shadow-sm border-0 mb-4"> 
            <div class="card-header bg-primary text-white py-3 fw-bold"> 
                📋 Thông tin bài viết
            </div> 
            <ul class="list-group list-group-flush"> 
                <li class="list-group-item d-flex justify-content-between"> 
                    <strong>ID bài viết:</strong> 
                    <span>#{{ $article['id'] }}</span>
                </li> 
                <li class="list-group-item d-flex justify-content-between"> 
                    <strong>Tác giả:</strong> 
                    <span>{{ $article['author'] }}</span>
                </li> 
                <li class="list-group-item d-flex justify-content-between"> 
                    <strong>Ngày đăng:</strong> 
                    <span>{{ $article['date'] }}</span>
                </li> 
            </ul> 
        </div> 
    </div> 
</div> 
  
@endsection 