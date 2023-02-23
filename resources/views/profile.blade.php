<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <main class="main">
            <section class="profile">
            <div class="container">
                <div class="row-wrapper">
                    <h1>Profile page</h1>
                    <h2>Токен пользователя:</h2>
                    <p> {{$troken}}</p>
                </div>
            </div>
            </section>
        </main>
    </body>
</html>

