<!DOCTYPE html>
<html lang="en">

@section('head')
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Đầm Sen Park</title>
    <!--   icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css" />

</head>
@show
    <body>
        @section('sidebar')
        <nav class="header">
            <a href="{{ route('home') }}" class="logo">
                <img src="img/logo_ngang.png" alt="logo" />
            </a>
            <div class="menu">
                <ul>
                    <li><a href="{{ route('home') }}"> Trang chủ </a></li>
                    <li><a href="{{ route('event') }}"> Sự kiện </a></li>
                    <li><a href="{{ route('contact') }}"> Liên hệ </a></li>
                </ul>
            </div>
            <div class="phone-number">
                <i class="fa-solid fa-phone icon"></i> 0123456789
            </div>
        </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

@section('script')
    @yield('script')
@show

