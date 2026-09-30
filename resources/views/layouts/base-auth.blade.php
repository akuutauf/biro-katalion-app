<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-biro-katalion-no-bg.png') }}" />

    {{-- custom title on every page --}}
    @yield('title')

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/guest.css') }}">

    {{-- Font awesome icon cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- App css -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="account-body bg-auth">

    {{-- custom content on every page --}}
    @yield('content')

    <!-- jQuery  -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('template/js/waves.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.slimscroll.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template/js/app.js') }}"></script>

</body>

</html>
