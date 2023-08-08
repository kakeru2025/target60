<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験解説</title>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="headline1">結果と解説</h1>
        <div class="exam_score">
            <h2 clsas="headline2">あなたの得点</h2>
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
                            <td>第{{ $result->exam_id }}問</td> <td>正解</td>
                            @php
                                $sum = $sum + 4
                            @endphp
                        @else 
                            <td>第{{ $result->exam_id }}問</td> <td>不正解</td>
                        @endif
                    </tr>
                @endforeach
            </table>
            合計点：{{$sum}}点
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
