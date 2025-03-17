@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
        <input type="text" name="last_name" placeholder="例:山田" value="{{ old('name') }}" />
        <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('name') }}" />
          @error('name')
          {{ $message }}
          @enderror
      </div>
      <div class="form__group-title">
        <span class="form__input--item">性別</span>
        <span class="form__input--required" >※</span>
        <label>
          <input type="radio" id="gender__man" name="gender" value=男性 />男性
        </label>
        <label>
          <input type="radio" id="gender__woman" name="gender" value=女性 />女性
        </label>
        <label>
          <input type="radio" id="gender__other" name="gender" value=その他 />その他
        </label>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
        <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
        <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}" />
        <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}" />
        <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}" />
        <div class="form__error">
          @error('tel')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
        <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('adress') }}" />
          @error('address')
          {{ $message }}
          @enderror
      </div>
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
        <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('build') }}" />
      </div>
    </div>
    <div class ="form__group-title">
      <span class="form__label--item">お問い合わせの種類</span>
      <span class="form__label--required">※</span>
      <select name="select__content" placeholder="選択してください">
        <option value="商品のお届けについて">商品のお届けについて</option>
        <option value="商品の交換について">商品の交換について</option>
        <option value="商品トラブル">商品トラブル</option>
        <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
        <option value="その他">その他</option>
      </select>
    </div>
    <div class="form__group-title">
      <span class="form__label--item">お問い合わせ内容</span>
      <span class="form__label--required">※</span>
      <textarea name="content" placeholder="お問い合わせ内容をご記載ください">{{ old('content') }}</textarea>
    </div>
      
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection