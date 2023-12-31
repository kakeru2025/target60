<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験（{{ $year->year }}）</title>
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
                    <a href="../">
                        <span>target60</span>
                        <img src="https://res.cloudinary.com/dghx8vbna/image/upload/v1691562396/target60_%E4%B8%B8%E3%83%AD%E3%82%B4_jzlczt.png" alt="target60ロゴ">
                    </a>
                </diV>
                <div class="sidebar_open">
                    <div class="logo" id="domino">
                        <a href="../">
                            <img src="https://res.cloudinary.com/dghx8vbna/image/upload/v1691553200/target60_logo_acklds.png" alt="ドミノ">
                        </a>
                    </div>
                    <div class="sidebar_category">
                        <ul>
                            <li class="SC_exam">
                                <a href="../exam">
                                    <h2>試験ページ</h2>
                                    <p>実力を確かめたいあなたへ</p>
                                </a>
                            </li>
                            <li class="SC_commentary">
                                <a href="../commentary">
                                    <h2>解説ページ</h2>
                                    <p>実力を高めたいあなたへ</p>
                                </a>
                            </li>
                            <li class="SC_mypage">
                                <a href="../mypage">
                                    <h2>マイページ</h2>
                                    <p>自分を把握したいあなたへ</p>
                                </a>
                            </li>  
                        </ul>
                    </div>
                </div>
              </div>
             </div>
            <div class="body_general" id="examine">
                <h1>入試問題（{{ $year->year }}）</h1>
                <div class="cautionbox">
                    <div class="cautionbox-title">注意点</div>
                    <ul>
                        <li>
                                数字と文字と記号は全て半角で入力
                        </li>
                        <li>
                                「x=○, y=○」のように、空白は半角スペース
                        </li>
                    </ul>
                </div>
                <div class="exams">
                    <form action="/exam/{{ $year->id }}/explanation" method="POST">
                        @csrf
                        @foreach ($year->exams as $exam)
                            <div class='exam'>
                                <p>問題{{ $exam->number }}：{!! $exam->question_string !!}</p>
                                <img src="{{ $exam->question_image_url }}"><br>
                                <input type="text" name="my_answer[{{ $exam->id }}]" placeholder="入力欄"/>
                                <input type="hidden" name="result[exam_id]" value="{{ $exam->id }}">
                            </div>
                        @endforeach
                        <div class="exams_submit">
                            <input type="submit" value="送信"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>