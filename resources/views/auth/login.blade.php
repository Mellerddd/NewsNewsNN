<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>login NN</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>

    <link rel="stylesheet" href="{{ asset('css/register.style.css') }}">


</head>

<body>

<!-- Form-->
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <div class="form-header">
            <h1>Войдите в аккаунт</h1>
        </div>
        <div class="form-content">
            <form action="{{ route('login.submit') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">Имя пользователя</label>
                    <input type="text" id="username" name="username" />
                    @error('username')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" />
                    @error('password')
                    <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-remember">
                        <input type="checkbox"/>Запомнить меня
                    </label><a class="form-recovery" href="#">Забыли пароль?</a>
                </div>
                <a style="text-decoration:none;font-size: 15px;color: black;" href="{{ route('register.create') }}">Зарегистрироваться</a>
                <a style="text-decoration:none;font-size: 15px;color: black; margin-left: 210px;" href="{{ route('home') }}">На главную</a>

                <br>
                <br>
                <div class="form-group">
                    <button type="submit">Войти</button>
                </div>
            </form>
        </div>
    </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

<script src="{{ asset('js/forma.js') }}"></script>


</body>
</html>
