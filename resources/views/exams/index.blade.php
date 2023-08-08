<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験一覧</title>
        <!-- Fonts -->
        <!--<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheets">-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container_toppage">
            <div class="sidebar_toppage">
                <h1 class="logo" id="icon">
                    <a href="./">
                        <img src="" alt="Target60">
                    </a>
                </h1>
                <div class="sidebar_category">
                    <ul>
                        <li class="SC_exam">
                            <a href="./exam">
                                <h2>試験ページ</h2>
                                <p>実力を確かめたいあなたへ</p>
                            </a>
                        </li>
                        <li class="SC_explanation">
                            <a href="./explanation">
                                <h2>解説ページ</h2>
                                <p>実力を高めたいあなたへ</p>
                            </a>
                        </li>
                        <li class="SC_mypage">
                            <a href="./mypage">
                                <h2>マイページ</h2>
                                <p>自分を把握したいあなたへ</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="body_toppage">
                <h1>試験一覧</h1>
                @foreach ($years as $year)
                    <div class='years'>
                        <a href="/exam/{{ $year->id }}">▶ {{ $year->year }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
