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
            <div class="body_general" id="index"> 
                <h1>試験一覧</h1>
                @foreach ($years as $year)
                    <div class='years'>
                        <a href="/exam/{{ $year->id }}">▶ {{ $year->year }}</a>
                    </div>
                @endforeach
                <div class="exam_score_history">
                    <h3>{{ Auth::user()->name }}さんの成績</h3>
                    <table class="exam_score_table">
                        <tr>
                            <th>年</th> <th>正答率 [%]</th>
                        </tr>
                        <!--得点表の得点出しの論理-->
                        @foreach ($years as $year)
                            @php
                                $true = 0;
                                $all = 0
                            @endphp
                            @foreach (Auth::user()->results as $result)
                                @if ($year->id == $result->exam->year_id)
                                    @if ($result->is_correct == true)
                                        @php
                                            $true = $true + 1
                                        @endphp
                                    @endif
                                    @php
                                        $all = $all + 1
                                    @endphp
                                @endif
                            @endforeach
                            @if ($all == 0)
                                @php
                                    $rate = "未受験"
                                @endphp
                            @else
                                @php
                                    $rate = $true / $all * 100
                                @endphp
                            @endif
                            <tr>
                                <td>{{ $year->year }}</td> <td>{{ $rate }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
