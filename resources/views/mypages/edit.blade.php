<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>編集ページ</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        
        <form action="/mypage" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="edit_item">
                <p>志望校</p>
                <input type="text" name="user[target_school]" placeholder="入力欄" value="{{ Auth::user()->target_school }}"/>
            </div>
            <div class="edit_item">
                <p>コメント</p></p>
                <input type="text" name="user[self_introduction]" value="{{ Auth::user()->self_introduction }}"/>
            </div>
            <div class="edit_item">
                <p>あなたのイラスト</p>
                <input type="file" name="image"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
</html>