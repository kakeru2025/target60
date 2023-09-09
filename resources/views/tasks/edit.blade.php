<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>編集ページ</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <div>
                <form action="/tasks/{{ $task->id }}" method="post" class="mt-10">
                    @csrf
                    @method('PUT')
                    <input type="text" name="task[name]" value="{{ $task->name }}"/>
                    <button type="submit">編集する</button>
                </form>
                <a href="/mypage">戻る</a>
            </div>
        </div>
  </body>
</html>