<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>マイページ</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>{{ Auth::user()->name }}さんのページ</h1>
        <div class="my_profile">
            <p>写真</p>
            <p>プロフィール</p>
        </div>
        <div class="my_scores">
            <p>点数を載せる</p>
        </div>
        <div class="my_scores_detail">
            <p>詳細を載せる</p>
        </div>
        <a href="/exam">仮の遷移(Exam)</a>
    </body>
</html>