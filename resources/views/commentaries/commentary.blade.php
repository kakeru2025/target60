<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>解説ページ</title>
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="body_general" id="commentary">
            <h1><span>{{ $commentary->id }}</span>{{ $commentary->name }}</h1>
            <div class="mypage_block">
            <!--<div class="onepoint_advice">-->
                <h3>＜ここだけチェック👍＞</h3>
                <img src="{{$commentary->onepoint_advice_url}}" alt="comming soon">
            </div>
            <div class="mypage_block">
            <!--<div class="attitude">-->
                <h3>＜心構え＞</h3>
                <p id="attitude_statement">{!! $commentary->content !!}</p>
                
            </div>
        </diV>
    </body>
</html>
