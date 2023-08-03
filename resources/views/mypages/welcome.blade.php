<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ようこそ</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>おかえりなさい{{ Auth::user()->name }}さん</h1>
        <p>なんか～</p>
        <a href="/mypage">マイページへ</a>
    </body>
</html>