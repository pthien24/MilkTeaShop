<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
</head>

<body>
    <header class="header">
        <section class="flex">
            <a href="{{route('home.index')}}" class="logo">yum-yum 😋</a>
            <nav class="navbar">
                <a href="{{ route('home.index')}}">home</a>
                <a href="{{ route('home.about')}}">about</a>
                <a href="{{route('product.index')}}">menu</a>
                @guest
                @else
                <a href="{{route('myorders.orders')}}">orders</a>
                @endguest
                <a href="{{ route('home.contact')}}">contact</a>
            </nav>
            <div class="icons">
                @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @else
                <div id="user-btn" class="fas fa-user"></div>
                <a href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart"></i><span>(@if(session('products'))
        <span>{{ count(session('products')) }}</span>
    @else
        <span>0</span>
    @endif)</span></a>
                @endguest
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
            <div class="profile">
                <div class="flex">
                    <a href="{{route('user.index')}}" class="btn">profile</a>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="delete-btn" onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                    </form>
                </div>
                <p class="account"><a href="{{route('login')}}">login</a> or <a href="{{route('register')}}">register</a></p>
            </div>
        </section>
    </header>
    @yield('content')
    <footer class="footer">
        <section class="box-container">
            <div class="box">
                <img src="images/email-icon.png" alt="">
                <h3>our email</h3>
                <a href="mailto:AdminShop@gmail.com">AdminShop@gmail.com</a>
            </div>
            <div class="box">
                <img src="images/clock-icon.png" alt="">
                <h3>opening hours</h3>
                <p>14:00pm to 22:00pm </p>
            </div>
            <div class="box">
                <img src="images/map-icon.png" alt="">
                <h3>our address</h3>
                <a href="https://www.google.com/maps">mumbai, india - 400104</a>
            </div>
            <div class="box">
                <img src="images/phone-icon.png" alt="">
                <h3>our number</h3>
                <a href="tel:1234567890">+123-456-7890</a>
                <a href="tel:1112223333">+111-222-3333</a>
            </div>
        </section>
        <div class="credit">&copy; copyright 2023 | all rights reserved!</div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>
