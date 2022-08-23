<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('css/welcome.style.css') }}">

    @stack('style')
    <title>NewNews</title>
    <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>

<div class="menu">
    
    @guest()
    <div class="logom">
        <p>| NewNews NN |</p>
    </div>
    @endguest
    @auth()
    <div class="logom">
        <p>NN</p>
    </div>
    @endauth
    
    @auth()
        <a href="#" class="menu-o" style="font-size: 25px">{{ auth()->user()->username }}</a>
        <a href="{{ route('logout') }}" class="menu-o @if(Request::is('logout')) active-a @endif"> Выйти из профиля</a>
    @endauth
    <a class="menu-o" href="{{ route('home') }}">Главная</a>


    <div class="dropdown">
        <a class="menu-o" href="{{ route('contact') }}">Контакты</a>
    </div>
    @auth()
    <a class="menu-o" href="{{ route('post.create') }}">Добавить новость</a>
    @endauth

@guest()
        <a class="menu-o" href="{{ route('register.create')}}">Регистрация</a>
        <a class="menu-o" href="{{ route('login') }}">Авторизация</a>
    @endguest
   
    <div class="search_block">
        <img class="search_img" src="{{ asset('images/search.png') }}">
        <input class="search"></input>
    </div>
</div>

<div class="content">
    <div class="content-news">
    @yield('content')
    </div>
</div>

</body>
</html>
