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
        </div>
        <div class="exam_explanations">
            <h2 clsss="headline2">問題解説</h2>
            @foreach ($year->exams as $exam)
                <div class='exam_explantion'>
                    <!--my_answersができていない-->
                    @foreach ($my_answers as $my_answer)
                        <div>問題{{ $exam->number }}</div>
                        <div>あなたの回答：{{ $my_answer }}</div>
                        <div>正答：{{ $exam->answer }}</div>
                        <div>解説：{{ $exam->explanation_string }}</div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <a href='/exam/{{ $year->id }}'>戻る</a>
    </body>
</html>
