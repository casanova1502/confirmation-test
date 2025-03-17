<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせありがとうございます</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <main>
    <h1>お問い合わせありがとうございました</h1>
    <form class="form" action="/" method="get">
      @csrf
    <div class="form__button">
      <button class="form__button-submit" type="submit">HOME</button>
    </div>
  </form>
  </main>
</body>