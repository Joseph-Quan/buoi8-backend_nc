<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #1B2A4A;"> 
    <div class="container"> 
  
        {{-- Logo / Brand --}} 
        <a class="navbar-brand fw-bold" href="{{ route('home') }}"> 
            📝 Phú Xuân Blog 
        </a> 
  
        {{-- Nút hamburger cho mobile --}} 
        <button class="navbar-toggler" type="button" 
                data-bs-toggle="collapse" data-bs-target="#navbarNav">             <span class="navbar-toggler-icon"></span>         </button> 
  
        {{-- Menu items --}} 
        <div class="collapse navbar-collapse" id="navbarNav"> 
            <ul class="navbar-nav ms-auto"> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('about') }}">Giới thiệu</a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('posts.index') }}">Bài viết</a>                 </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('posts.create') }}">Viết bài</a> 
                </li> 
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('posts.trashed') }}">🗑️ Thùng rác</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('articles.index') }}">Blog</a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('shop.products') }}">Cửa hàng</a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a> 
                </li> 
            </ul> 
        </div> 
  
    </div> 
</nav> 
