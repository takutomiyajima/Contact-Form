@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="title">details</h2>
    <table class="table ">
        <tr>
            <th>名前</th>
            <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>
                @switch($contact->gender)
                    @case(1) 男性 @break
                    @case(2) 女性 @break
                    @case(3) その他 @break
                    @default 不明
                @endswitch
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>{{ $contact->tell }}</td>
        </tr>
        <tr>
            <th>住所</th>
            <td>{{ $contact->address }} {{ $contact->building }}</td>
        </tr>
        <tr>
            <th>お問い合わせの種類</th>
            <td>
                @switch($contact->category_id)
                    @case(1) 商品のお届けについて @break
                    @case(2) 商品の交換について @break
                    @case(3) 商品トラブル @break
                    @case(4) ショップへのお問い合わせ @break
                    @case(5) その他 @break
                    @default 未分類
                @endswitch
            </td>
        </tr>
        <tr>
            <th>詳細内容</th>
            <td>{{ $contact->detail }}</td>
        </tr>
        <tr>
            <th>登録日</th>
            <td>{{ $contact->created_at }}</td>
        </tr>
    </table>
    <div class="text-center">
        <a href="{{ route('admin.index') }}" class="second-button">戻る</a>
        <a href="{{ route('admin.index') }}" class="second-button">削除</a>
    </div>
</div>
@endsection
