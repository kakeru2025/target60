<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>マイページ</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container_general">
            <div class="header_general"></div>
                <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                <label for="openSidebarMenu" class="sidebarIconToggle">
                    <div class="spinner diagonal part-1"></div>
                    <div class="spinner horizontal"></div>
                    <div class="spinner diagonal part-2"></div>
                </label>
                <div class="sidebar_open">
                    <h1 class="logo" id="domino">
                        <a href="./">
                            <img src="" alt="ドミノ">
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
              </div>
              
            <div class="body_general" id="mypage">  
                <h1>{{ Auth::user()->name }}さんのページ</h1>
                <div class="my_profile">
                    <img src="" alt="写真">
                    <div class="profile_statement">
                        <p class="target_schhol">[目標高校]：{{ Auth::user()->target_school }}</p>
                        <p class="self_introduction">[コメント]：{{ Auth::user()->self_introduction }}</p>
                    </div>
                </div>
                <div class="my_scores">
                    <p>点数を載せる</p>
                </div>
                <div class="my_scores_detail">
                    <p>詳細を載せる</p>
                </div>
                <a href="/exam">仮の遷移(Exam)</a>
            </div>
        </div>
         
    </body>
</html>