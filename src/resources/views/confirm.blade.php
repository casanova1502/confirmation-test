@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Confirm</h2>
  </div>
  <form class="confirm" action="/index" method="get">
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <input type="text" name="name" value="サンプルテキスト" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__text">
            <input type="email" name="email" value="サンプルテキスト" />
          </td>
          </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <input type="tel" name="tel" value="サンプルテキスト" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="サンプルテキスト" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="サンプルテキスト" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="サンプルテキスト" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせの種類</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="サンプルテキスト" />
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="サンプルテキスト" />
          </td>
        </tr>
      </table>
    </div>
  </form>
  <form class="thanks" action="/thanks" method="post">
    @csrf
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
  <form class="correct" action="/" method="post">
    @csrf
    <div class="form__button">
      <button class="form__button-submit" type="submit">修正</button>
    </div>
  </form>
</div>
@endsection