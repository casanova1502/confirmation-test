@extends('layouts.app')

@section('content')
<div class="contact-form__heading">
    <h2>Admin</h2>
</div>

<div>
    <form class="search" action="/admin" method="get">
        <input type="search" name="search" placeholder="名前やメールアドレスを入力してください" value= >
        <select name="select__gender" name="性別" value= >
            <option value="男性">男性</option>
            <option value="女性">女性</option>
            <option value="その他">その他</option>
        <select name="select__content" placeholder="お問い合わせの種類">
            <option value="商品のお届けについて">商品のお届けについて</option>
            <option value="商品の交換について">商品の交換について</option>
            <option value="商品トラブル">商品トラブル</option>
            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
            <option value="その他">その他</option>
        </select>
        <input type="data" name="data" placeholder="年/月/日" value= >
        <button type="submit">検索</button>
        <button type="submit">リセット</button>
    </form>
    <form action="">
        <button type="submit">エクスポート</button>
    </form>
    <table>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせ内容</th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button type="submit">詳細</button>
            </td>
        </tr>
    </table>
</div>

@endsection