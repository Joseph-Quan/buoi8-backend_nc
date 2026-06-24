@extends('layouts.app')

@section('title', 'Giới thiệu')

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-lg-8 text-center">
        <h1 class="display-4 fw-bold mb-3">ℹ Giới thiệu về chúng tôi</h1>
        <p class="lead text-muted mb-5">Dự án học tập xây dựng ứng dụng Blog Laravel – Khoa Công nghệ thông tin, Trường Đại học Phú Xuân.</p>
    </div>
    
    <div class="col-lg-10">
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h5 class="fw-bold mb-3 text-primary">🎯 Sứ mệnh của dự án</h5>
                    <p class="text-muted">Giúp các sinh viên tiếp cận với các công nghệ lập trình Backend hiện đại, đặc biệt là framework Laravel phiên bản mới nhất, rèn luyện tư duy thiết kế hệ thống, kiến trúc MVC và kỹ năng pair programming với AI.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h5 class="fw-bold mb-3 text-success">🌟 Giá trị cốt lõi</h5>
                    <p class="text-muted">Đề cao tính thực hành, chuẩn hóa code theo phong cách viết code Laravel chuẩn mực (Laravel Best Practices), viết mã nguồn sạch và tự động định dạng mã nguồn (Pint).</p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2" style="background-color: #1B2A4A; border-color: #1B2A4A;">
                ← Quay lại Trang chủ
            </a>
        </div>
    </div>
</div>
@endsection