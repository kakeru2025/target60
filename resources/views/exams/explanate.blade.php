<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験解説</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>試験解説</h1>
        @foreach ($exams as $exam)
            <div class='exams'>
                <div>{{ $exam->answer }}</div>
                <div>{{ $exam->explanation_string }}</div>
            </div>
        @endforeach
        <a href='/exam/{{ $year->id }}'>戻る</a>
    </body>
</html>
