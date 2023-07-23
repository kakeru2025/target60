<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験(ここに入れたいよ！！！)</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>{{ $years->year }}試験</h1>
        @foreach ($exams as $exam)
            <div class='exams'>
                <div>{{ $exam->question_string }}</div>
            </div>
        @endforeach
    </body>
</html>
