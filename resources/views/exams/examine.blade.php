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
            <div class="body_general" id="examine">
                <h1>入試問題（{{ $year->year }}）</h1>
                <div class="cautionbox">
                    <div class="cautionbox-title">注意</div>
                    <ul>
                        <li>
                                数字と文字と記号は全て半角で入力
                        </li>
                        <li>
                                「x=○ y=○」のように、空白は半角スペース
                        </li>
                    </ul>
                </div>
                <div class="exams">
                    <form action="/exam/{{ $year->id }}/explanation" method="POST">
                        @csrf
                        @foreach ($year->exams as $exam)
                            <div class='exam'>
                                <p>問題{{ $exam->number }}：{!! $exam->question_string !!}</p>
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