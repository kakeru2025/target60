<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験解説</title>
        <link href="/css/style.css" rel="stylesheet">
        <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>
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
            <div class="body_general" id="explanate">
                <h1 class="headline1">結果と解説</h1>
                <div class="exam_score">
                    <h2 clsas="headline2">{{ Auth::user()->name }}さんの結果</h2>
                    @php
                        $sum = 0
                    @endphp
                    <table class="exam_score_table">
                        <tr>
                            <th>問題</th> <th>正答</th>
                        </tr>
                        @foreach ($results as $result)
                            <tr>
                                @if ($result->is_correct == true) 
                                    <td>問題{{ $result->exam->number }}</td> <td>正解</td>
                                    @php
                                        $sum = $sum + 4
                                    @endphp
                                @else 
                                    <td>問題{{ $result->exam->number }}</td> <td>不正解</td>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                    <p>合計点：{{ $sum }}点</p>
                </div>
                <div class="exam_explanations">
                    <h2 clsss="headline2">問題解説</h2>
                    @foreach ($year->exams as $exam)
                        <div class='exam_explantion'>
                            @php
                                $my_answer = $my_answers[$exam->id];
                            @endphp
                            <div>問題{{ $exam->number }}</div>
                            <div>あなたの回答：{{ $my_answer }}</div>
                            <div>正答：{!! $exam->answer !!}</div>
                            <div>解説：{{ $exam->explanation_string }}</div>
                            <div>正答(kari)：{{ $exam->answer_hidden }}</div>
                            <div>カテゴリー：{{ $exam->category->name }}</div>
                        </div>
                    @endforeach
                </div>
                <a href='/exam/{{ $year->id }}'>戻る</a>
            </div>
        </div>
    </body>
</html>
