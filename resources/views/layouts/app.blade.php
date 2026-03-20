<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')

    <!-- Content -->
    <div style="margin-left:220px; padding:20px;">
        @yield('content')
    </div>

    @include('layouts.partials.footer')

</body>
</html>