<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        @include('layout.header')
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
        @include('layout.footer')
    </footer>
</body>
</html>