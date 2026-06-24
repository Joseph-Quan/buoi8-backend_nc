{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Phu Xuan Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#1B2A4A;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('posts.index') }}">
                Phu Xuan Blog
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-white" href="{{ route('posts.index') }}">Danh sach</a>
                <a class="nav-link text-white" href="{{ route('posts.create') }}">+ Tao moi</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        {{-- ✅ DAY LA DONG THEM VAO: include flash partial --}}
        @include('partials.flash-messages')

        @yield('content')
    </div>

    {{-- Bootstrap 5 JS (bat buoc cho nut dong alert) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>

    {{-- ✅ Auto-dismiss sau 5 giay --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.alert-dismissible').forEach(function (alert) {
                setTimeout(function () {
                    var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                    if (bsAlert) bsAlert.close();
                }, 5000);
            });
        });
    </script>

    @stack('scripts')
</body>
</html>
