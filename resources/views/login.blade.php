<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet">

    </head>

 
    <body>
        <main class="main">
            <div class="container">
                <div class="row-wrapper">
                    <form id="login-form" class="form" action="/api/login" method="POST">
                        {{ csrf_field() }}  
                        <h2 class="title">Форма авторизации</h2>
                        <div class="form__group">
                            <label class="label" for="email" >Введите email:</label>
                            <input id="email" type="text" name="email"/>
                        </div>
                        <div class="form__group">
                            <label class="label" for="passwrod">Введите пароль:</label>
                            <input id="passwrod" type="password" name="password"/>
                        </div>
                        <div class="form__group column_2">
                            <button class="button button--submit" type="submit">Вход</button>
                            <a class="link" href="/">Регистрация</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
