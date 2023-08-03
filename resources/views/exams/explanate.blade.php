<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験解説</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 class="headline1">結果と解説</h1>
        <div class="exam_score">
            <h2 clsas="headline2">あなたの得点</h2>
            @foreach ($results as $result)
                    @if ($result->is_correct == true) 
                        <div>
                            第{{ $result->exam_id }}問：正解
                        </div>
                    @else 
                        <div>
                            第{{ $result->exam_id }}問：不正解
                        </div>
                    @endif
            @endforeach
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
                    <div>正答：{{ $exam->answer }}</div>
                    <div>解説：{{ $exam->explanation_string }}</div>
                </div>
            @endforeach
        </div>
        <a href='/exam/{{ $year->id }}'>戻る</a>
    </body>
</html>
