<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layout.script')
    @include('layout.style')
    <title>{{ $title }}</title>
</head>

<body>
    @include('header')
    <section class="content">
        @yield('content')
    </section>
</body>

</html>