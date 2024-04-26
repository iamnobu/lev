<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>観光スポット一覧</h1>
        <div class='places'>
            <div class='places'>
            <ul>
                @foreach($places as $place)
                    <li>{{ $place->name }}</li>
                @endforeach
            </ul>
            {{ $places->links() }}
            </div>
        </div>
    </body>
</html>
<form
action="{{ route('places.index') }}"
method="GET">
    <label for="prefecture">都道府県:</label>
    <select name="prefecture"
    id="prefecture">
        <option value="">すべて</option>
        <option value="東京">東京</option>
        <option value="大阪">大阪</option>
    </select>
    <button type="submit">検索</button>
    
</form>