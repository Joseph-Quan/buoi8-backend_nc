@extends('layouts.app')

@section('title', 'Giỏ hàng')

@section('content')
<div class="py-4">
    <div class="row g-4">
        <!-- Cart Items (Left side) -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4">
                <h3 class="fw-bold mb-4">🛒 Giỏ hàng của bạn</h3>
                
                <!-- Simple mock items inside the cart -->
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr class="text-muted small">
                                <th scope="col" class="border-0">Sản phẩm</th>
                                <th scope="col" class="border-0">Giá</th>
                                <th scope="col" class="border-0">Số lượng</th>
                                <th scope="col" class="border-0 text-end">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item 1 -->
                            <tr>
                                <td class="py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded p-2 me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            📚
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Sách giáo trình Laravel nâng cao</h6>
                                            <small class="text-muted">Đại học Phú Xuân</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3">150,000đ</td>
                                <td class="py-3">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-sm btn-light border" onclick="alert('Đã giảm số lượng')">-</button>
                                        <span class="mx-3 fw-bold">1</span>
                                        <button class="btn btn-sm btn-light border" onclick="alert('Đã tăng số lượng')">+</button>
                                    </div>
                                </td>
                                <td class="py-3 text-end fw-bold">150,000đ</td>
                            </tr>
                            
                            <!-- Item 2 -->
                            <tr>
                                <td class="py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded p-2 me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            ☕
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Cốc sứ in logo Phu Xuan Blog</h6>
                                            <small class="text-muted">Quà tặng lưu niệm</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3">50,000đ</td>
                                <td class="py-3">
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-sm btn-light border" onclick="alert('Đã giảm số lượng')">-</button>
                                        <span class="mx-3 fw-bold">2</span>
                                        <button class="btn btn-sm btn-light border" onclick="alert('Đã tăng số lượng')">+</button>
                                    </div>
                                </td>
                                <td class="py-3 text-end fw-bold">100,000đ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('shop.products') }}" class="btn btn-outline-secondary">
                        ← Tiếp tục mua sắm
                    </a>
                </div>
            </div>
        </div>

        <!-- Order Summary (Right side) -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 bg-light">
                <h5 class="fw-bold mb-4">Tổng quan đơn hàng</h5>
                
                <div class="d-flex justify-content-between mb-3 text-muted">
                    <span>Tạm tính</span>
                    <span>250,000đ</span>
                </div>
                <div class="d-flex justify-content-between mb-3 text-muted">
                    <span>Phí vận chuyển</span>
                    <span>Miễn phí</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-4">
                    <strong class="fs-5">Tổng cộng</strong>
                    <strong class="fs-5 text-primary">250,000đ</strong>
                </div>

                <button class="btn btn-primary w-100 py-2 shadow-sm" style="background-color: #1B2A4A; border-color: #1B2A4A;" onclick="alert('Cảm ơn bạn đã mua hàng! Đơn hàng thử nghiệm thành công.');">
                    💳 Thanh toán ngay
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
