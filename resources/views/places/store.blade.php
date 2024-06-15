<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <!--<h1>観光スポット一覧</h1>-->
        <!--<form-->
        <!--action="{{ route('places.index') }}"-->
        <!--method="GET">-->
        <!--    <label for="prefectures">都道府県:</label>-->
        <!--    <select name="prefectures"-->
        <!--    id="prefectures">-->
        <!--        <option value="">すべて</option>-->
        <!--        <option value="1">東京</option>-->
        <!--        <option value="2">大阪</option>-->
        <!--    </select>-->
        <!--    <button type="submit">検索</button>-->
        <!--</form>-->
        <div class='places'>
            <div class='places'>
            <ul>
                @foreach($places as $place)
                    <li><a href="/places/{{ $place->id }}">{{ $place->name }}</a></li>
                        <div>
                            <h2>{{ $place->name }}</h2>
                            <p>{{ $place->description }}</p>
                        </div>
                @endforeach
            </ul>
            {{ $places->links() }}
            </div>
        </div>
    </body>
</html>