
{{-- resources/views/errors/404.blade.php --}}
@extends('layouts.app')
@section('title', 'Khong tim thay trang')

@section('content')
<div class="text-center py-5">
    <h1 class="display-4 fw-bold text-muted">404</h1>
    <h3 class="text-muted mb-4">Khong tim thay trang ban yeu cau</h3>
    <p class="text-muted mb-4">
        Bai viet co the da bi xoa hoac duong dan khong chinh xac.
    </p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg">
        Ve trang danh sach
    </a>
</div>
@endsection
