@extends('layouts.app')

@section('title', 'Sản phẩm')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 fw-bold mb-1">🛒 Cửa hàng MyShop</h1>
            <p class="text-muted mb-0">Các sản phẩm, quà lưu niệm đặc sắc dành cho bạn</p>
        </div>
        <a href="{{ route('shop.cart') }}" class="btn btn-outline-primary shadow-sm position-relative">
            🛍 Giỏ hàng
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                2
            </span>
        </a>
    </div>

    <!-- Product Grid -->
    <div class="row g-4">
        <!-- Product 1 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-lift transition">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="bg-light rounded p-4 mb-3 text-center fs-1">
                        📚
                    </div>
                    <span class="badge bg-primary-subtle text-primary align-self-start mb-2">Tài liệu</span>
                    <h5 class="fw-bold text-dark mb-2">Sách giáo trình Laravel nâng cao</h5>
                    <p class="text-muted small flex-grow-1">Học Laravel framework phiên bản 11/12/13 từ cơ bản đến nâng cao cùng ví dụ thực tế.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-bold text-primary fs-5">150,000đ</span>
                        <button class="btn btn-sm btn-primary" onclick="alert('Đã thêm sách vào giỏ hàng!')">Thêm vào giỏ</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-lift transition">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="bg-light rounded p-4 mb-3 text-center fs-1">
                        ☕
                    </div>
                    <span class="badge bg-success-subtle text-success align-self-start mb-2">Quà tặng</span>
                    <h5 class="fw-bold text-dark mb-2">Cốc sứ logo Phu Xuan Blog</h5>
                    <p class="text-muted small flex-grow-1">Cốc sứ cao cấp in hình logo Đại học Phú Xuân và Phu Xuan Blog, chịu nhiệt tốt.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-bold text-primary fs-5">50,000đ</span>
                        <button class="btn btn-sm btn-primary" onclick="alert('Đã thêm cốc vào giỏ hàng!')">Thêm vào giỏ</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm hover-lift transition">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="bg-light rounded p-4 mb-3 text-center fs-1">
                        👕
                    </div>
                    <span class="badge bg-warning-subtle text-warning align-self-start mb-2">Thời trang</span>
                    <h5 class="fw-bold text-dark mb-2">Áo thun đồng phục Phú Xuân</h5>
                    <p class="text-muted small flex-grow-1">Áo thun chất liệu 100% cotton thoáng mát, thêu logo sắc nét.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-bold text-primary fs-5">180,000đ</span>
                        <button class="btn btn-sm btn-primary" onclick="alert('Đã thêm áo thun vào giỏ hàng!')">Thêm vào giỏ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection