
{{-- resources/views/errors/403.blade.php --}}
@extends('layouts.app')
@section('title', 'Khong co quyen')

@section('content')
<div class="text-center py-5">
    <h1 class="display-4 fw-bold text-muted">403</h1>
    <h3 class="text-muted mb-4">Ban khong co quyen thuc hien thao tac nay</h3>
    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary me-2">
        Quay lai
    </a>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Trang chu</a>
</div>
@endsection 
