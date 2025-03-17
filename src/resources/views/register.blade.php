@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<header>
  <form class="form" action="/register" method="post">
    <button class="form__button-submit" type="submit">Register</button>
  </form>
</header>

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Register</h2>
  </div>
  <form class="form" action="/admin" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <input type="text" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}" />
          @error('email')
          {{ $message }}
          @enderror
      </div>
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
          @error('email')
          {{ $message }}
          @enderror
      </div>
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <input type="email" name="email" placeholder="例: coachtech1106" value="{{ old('email') }}" />
          @error('password')
          {{ $message }}
          @enderror
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
      </div>
  </form>