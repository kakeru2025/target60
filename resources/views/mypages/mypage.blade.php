<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>マイページ</title>
        <link href="css/style.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
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
                        target60
                    </a>
                    <a href="./">
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
             </div> 
            <div class="body_general" id="mypage">  
                <h1>{{ Auth::user()->name }}さんのページ</h1>
                <div class="mypage_block">
                    <h3>＜プロフィール＞</h3>
                    <div class="my_profile">
                        <img src="" alt="写真">
                        <div class="profile_statement">
                            <p class="target_schhol">[目標高校]：{{ Auth::user()->target_school }}</p>
                            <p class="self_introduction">[コメント]：{{ Auth::user()->self_introduction }}</p>
                        </div>
                    </div>
                    [編集]
                </div>
                <div class="mypage_block">
                    <h3>＜今までの結果＞</h3>
                    <div class="my_scores">
                        @php
                            $result_years = [];
                            $result_scores = []
                        @endphp
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
                                    $rate = 0
                                @endphp
                            @else
                                @php
                                    $rate = $true / $all * 100
                                @endphp
                            @endif
                            <!--年と得点を配列に納める-->
                            @php
                                $result_years[] = $year->year;
                                $result_scores[] = $rate
                            @endphp
                        @endforeach
                        <!--PHPの配列をJavaScriptに受け渡す-->
                        @php
                            
                            $json_array_years = json_encode($result_years);
                            $json_array_scores = json_encode($result_scores)
                        @endphp
                        <!--成績の棒グラフ-->
                        <canvas id="barChart"></canvas>
                        <script>
                            //配列を受け取る
                            var js_array_years = <?php echo $json_array_years; ?>;
                            var js_array_scores = <?php echo $json_array_scores; ?>;
                            // 棒グラフの設定
                            var barCtx = document.getElementById("barChart");
                            var barChart = new Chart(barCtx, {
                                type: 'bar',
                                data: {
                                    labels: js_array_years,
                                    datasets: [
                                        {
                                            data: js_array_scores,
                                            backgroundColor: '#215bb2',
                                        }
                                    ]
                                },
                                options: {
                                    y: {
                                        suggestedMax: 100,
                                        suggestedMin: 0,
                                        stepSize: 20,
                                    }
                                    
                                },
                            });
                        </script>   
                    </div>
                </div>
                <div class="mypage_block">
                    <h3>＜詳細＞</h3>
                    <div class="my_scores_detail">
                        <p>詳細を載せる</p>
                    </div>
                </div>
            </div>
        </div>
         
    </body>
</html>