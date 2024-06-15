<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <!-- Fonts -->
       <title>{{ $place->name }}の詳細</title>
    </head>
    <body>
　　　<h1>{{ $place->name }}の詳細</h1>
　　　<p>{{ $place->description }}</p>
    <a
    href="{{ route('places.index') }}">一覧に戻る</a>
    </body>
</html>