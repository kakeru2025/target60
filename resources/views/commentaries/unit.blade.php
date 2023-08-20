<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>解説一覧</title>
        <!-- Fonts -->
        <!--<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheets">-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
                <h1>解説一覧</h1>
                @foreach ($commentaries as $commentary)
                    <div>
                        <a href="/commentary/{{ $commentary->id }}">▶ {{ $commentary->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
