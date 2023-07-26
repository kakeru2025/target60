<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験（{{ $year->year }}）</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>入試問題（{{ $year->year }}）</h1>
        <form action="/exam/{{ $year->id }}/explanation" method="POST">
            @csrf
            @foreach ($year->exams as $exam)
                <div class='exams'>
                    <div>{{ $exam->question_string }}</div>
                    <input type="text" name="my_answer[{{ $exam->id}}]" placeholder="入力欄"/>
                    <input type="hidden" name="result[exam_id]" value="{{ $exam->id}}">
                </div>
            @endforeach
            <input type="submit" value="送信"/>
        </form>
    </body>
</html>