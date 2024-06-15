<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
<div class="container small">
  <h1>観光スポット一覧登録</h1>
  <form action="{{ route('places.store') }}" method="POST">
  @csrf
    <fieldset>
        <div class="form-group">
            <label for="name">{{ __('観光スポットの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="place[name]" id="name">
        </div>
        <select name="place[prefecture_id]">
            @foreach($prefectures as $prefecture)
                <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="name">{{  ('行き方')  }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="place[access]" id="access">
        </div>
        <div class="form-group">
            <label for="name">{{ __('金額') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="number" class="form-control" name="place[price]" id="price">
        </div>
        <div class="form-group">
            <label for="name">{{  ('営業時間')  }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="place[opening_hour]" id="opening_hour">
        </div>
        <div class="form-group">
            <label for="name">{{  ('説明')  }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="place[discription]" id="discription">
        <div class="d-flex justify-content-between pt-3">
            <a href="{{ route('places.index') }}" class="btn btn-outline-secondary" role="button">
                <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('一覧画面へ') }}
            </a>
            <button type="submit" class="btn btn-success">
                {{ __('登録') }}
            </button>
            <!--<input type="submit" valu="store"/>-->
        </div>
    </fieldset>
  </form>
</div>
</body>
</html>