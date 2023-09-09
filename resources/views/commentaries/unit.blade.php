<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>解説一覧</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container_general">
            <div class="header_general">
                <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                <label for="openSidebarMenu" class="sidebarIconToggle">
                    <div class="spinner diagonal part-1"></div>
                    <div class="spinner horizontal"></div>
                    <div class="spinner diagonal part-2"></div>
                </label>
                <div class="app_name">
                    <a href="./">
                        <span>target60</span>
                        <img src="https://res.cloudinary.com/dghx8vbna/image/upload/v1691562396/target60_%E4%B8%B8%E3%83%AD%E3%82%B4_jzlczt.png" alt="target60ロゴ">
                    </a>
                </diV>
                <div class="sidebar_open">
                    <div class="logo" id="domino">
                        <a href="./">
                            <img src="https://res.cloudinary.com/dghx8vbna/image/upload/v1691553200/target60_logo_acklds.png" alt="ドミノ">
                        </a>
                    </div>
                    <div class="sidebar_category">
                        <ul>
                            <li class="SC_exam">
                                <a href="./exam">
                                    <h2>試験ページ</h2>
                                    <p>実力を確かめたいあなたへ</p>
                                </a>
                            </li>
                            <li class="SC_commentary">
                                <a href="./commentary">
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
              </div>
             </div> 
            <div class="body_general" id="unit">
                <h1>解説一覧</h1>
                <div class="unit_search">
                    <form action="{{ route('commentaries.unit') }}" method="GET">
                        <input type="text" name="keyword" placeholder="例）正負の数" value="{{ $keyword }}">
                        <input type="submit" value="検索">
                    </form>
                </div>
                <div class="commentary_units">
                    @forelse ($commentaries as $commentary)
                        <p><a href="/commentary/{{ $commentary->id }}">▶ {{ $commentary->name }}</a></p>
                    @empty
                        <p>記事がありません。</p>
                    @endforelse  
                </div>
            </div>
        </div>
    </body>
</html>


