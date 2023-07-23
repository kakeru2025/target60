<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>試験一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>試験一覧</h1>
        @foreach ($years as $year)
            <div class='years'>
                <!--<h3>{{ $year->year }}</h3>-->
                <a href="/exam/{{ $year->id }}">{{ $year->year }}</h3>
            </div>
        @endforeach
    </body>
</html>
