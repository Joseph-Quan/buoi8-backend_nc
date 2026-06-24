@extends('layouts.app') 
  
@section('title', 'Chỉnh sửa bài viết') 
  
@section('content') 
  
<div class="row justify-content-center"> 
    <div class="col-lg-8"> 
  
        <div class="d-flex justify-content-between align-items-center mb-4"> 
            <div>
                <h1 class="h3 fw-bold mb-1">✏ Chỉnh sửa bài viết</h1> 
                <p class="text-muted mb-0">Cập nhật thông tin bài viết của bạn</p>
            </div>
            <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary btn-sm"> 
                ← Hủy 
            </a> 
        </div> 
  
        <div class="card shadow-sm border-0"> 
            <div class="card-body p-4"> 
  
                <form action="{{ route('articles.update', $article['id']) }}" method="POST"> 
                    @csrf 
                    @method('PUT')
  
                    {{-- Tiêu đề --}} 
                    <div class="mb-3"> 
                        <label for="title" class="form-label fw-bold"> 
                            Tiêu đề bài viết <span class="text-danger">*</span> 
                        </label> 
                        <input type="text" 
                               class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" 
                               value="{{ old('title', $article['title']) }}" 
                               placeholder="Nhập tiêu đề bài viết..." 
                               required> 
                        @error('title') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
  
                    {{-- Tác giả --}} 
                    <div class="mb-3"> 
                        <label for="author" class="form-label fw-bold"> 
                            Tác giả <span class="text-danger">*</span> 
                        </label> 
                        <input type="text" 
                               class="form-control @error('author') is-invalid @enderror" 
                               id="author" name="author" 
                               value="{{ old('author', $article['author']) }}" 
                               placeholder="Tên người viết..." 
                               required readonly> 
                        @error('author') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
  
                    {{-- Nội dung --}} 
                    <div class="mb-4"> 
                        <label for="content" class="form-label fw-bold"> 
                            Nội dung bài viết <span class="text-danger">*</span> 
                        </label> 
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" 
                                  rows="8" 
                                  placeholder="Nhập nội dung bài viết..." 
                                  required>{{ old('content', $article['content'] ?? '') }}</textarea> 
                        @error('content') 
                            <div class="invalid-feedback">{{ $message }}</div> 
                        @enderror 
                    </div> 
  
                    {{-- Nút submit --}} 
                    <div class="d-flex gap-2"> 
                        <button type="submit" class="btn btn-primary px-4"> 
                            💾 Cập nhật
                        </button> 
                        <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary"> 
                            Hủy 
                        </a> 
                    </div> 
  
                </form> 
            </div> 
        </div> 
  
    </div> 
</div> 
  
@endsection 
  
@push('styles') 
    <style> 
        textarea { resize: vertical; min-height: 200px; } 
        .form-label { color: #1B2A4A; } 
    </style> 
@endpush
