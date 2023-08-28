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
        <div>
  <form action="{{ route('commentaries.unit') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
    <input type="submit" value="検索">
  </form>
</div>

<table>
  <tr>
    <th>著書名</th><th>著者名</th>
  </tr>

//* 保存されているレコードを一覧表示　*//
  @forelse ($commentaries as $commentary)
    <tr>
      <td><a href="{{ "./" }}">{{ $commentary->name }}</td></a>
      <td>a</td>
    </tr>
  @empty
    <td>No posts!!</td>
  @endforelse
</table>


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
