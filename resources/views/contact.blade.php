@extends('layouts.app')

@section('title', 'Liên hệ')

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-lg-10">
        <div class="card border-0 shadow-lg overflow-hidden">
            <div class="row g-0">
                <!-- Contact Info Section -->
                <div class="col-md-5 text-white p-5 d-flex flex-column justify-content-between" style="background: linear-gradient(135deg, #1B2A4A, #3A6073);">
                    <div>
                        <h3 class="fw-bold mb-4">📍 Thông tin liên hệ</h3>
                        <p class="mb-4 text-light-50">Bạn có câu hỏi hoặc ý kiến đóng góp? Hãy điền thông tin vào form bên cạnh để liên hệ với chúng tôi.</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <span class="fs-4 me-3">🏢</span>
                            <div>
                                <h6 class="mb-0 fw-bold">Địa chỉ</h6>
                                <small class="text-light-50">170 An Dương Vương, TP. Huế</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <span class="fs-4 me-3">📞</span>
                            <div>
                                <h6 class="mb-0 fw-bold">Điện thoại</h6>
                                <small class="text-light-50">0234 3848 939</small>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <span class="fs-4 me-3">✉</span>
                            <div>
                                <h6 class="mb-0 fw-bold">Email</h6>
                                <small class="text-light-50">contact@phuxuan.edu.vn</small>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <small class="text-light-50">© {{ date('Y') }} Đại học Phú Xuân</small>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="col-md-7 p-5 bg-white">
                    <h3 class="fw-bold mb-4 text-dark">Gửi tin nhắn</h3>
                    
                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.');">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label text-muted small fw-bold">Họ và tên</label>
                                <input type="text" class="form-control" id="name" placeholder="Nguyễn Văn A" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label text-muted small fw-bold">Địa chỉ Email</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label text-muted small fw-bold">Tiêu đề</label>
                                <input type="text" class="form-control" id="subject" placeholder="Cần hỗ trợ về bài viết..." required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label text-muted small fw-bold">Nội dung</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Viết lời nhắn của bạn ở đây..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm" style="background-color: #1B2A4A; border-color: #1B2A4A;">
                                    🚀 Gửi liên hệ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
