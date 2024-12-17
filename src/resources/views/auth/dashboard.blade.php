@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Admin</h2>

    <form method="GET" action="{{ route('admin.index') }}" class="search-form">
        <div class="search">
            <div class="search-detail">
                <p class="search-title">名前</p>
                <input type="text" name="name" class="form-text" placeholder="名前" value="{{ request('name') }}">
            </div>

            <div class="search-detail">
                <p class="search-title">性別</p>
                <select name="gender" class="form-control">
                    <option value="">性別を選択</option>
                    <option value="all" {{ request('gender') == 'all' ? 'selected' : '' }}>全て</option>
                    <option value="1" {{ request('gender') == 1 ? 'selected' : '' }}>男性</option>
                    <option value="2" {{ request('gender') == 2 ? 'selected' : '' }}>女性</option>
                    <option value="3" {{ request('gender') == 3 ? 'selected' : '' }}>その他</option>
                </select>
            </div>

            <div class="search-detail">
                <p class="search-title">お問い合わせの種類</p>
                <select name="category" class="form-control">
                    <option value="">お問い合わせの種類を選択</option>
                    <option value="1" {{ request('category') == 1 ? 'selected' : '' }}>商品の交換について</option>
                    <option value="2" {{ request('category') == 2 ? 'selected' : '' }}>商品のお届けについて</option>
                    <option value="3" {{ request('category') == 3 ? 'selected' : '' }}>商品トラブル</option>
                    <option value="4" {{ request('category') == 4 ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                    <option value="5" {{ request('category') == 5 ? 'selected' : '' }}>その他</option>
                </select>
            </div>

            <div class="search-detail">
                <p class="search-title">日程の選択</p>
                <input type="date" name="date" class="form-text" value="{{ request('date') }}">
            </div>
            <button type="submit" class="search-button">検索</button>
        </div>

        <div class="search">
            <div class="search-detail">
                <a href="{{ route('admin.index') }}" class="search-button">検索条件をリセット</a>
            </div>
            <div class="search-detail">
                <a href="{{ route('admin.export') }}" class="search-button">エクスポート</a>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>カテゴリ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                <td>
                    @switch($contact->gender)
                        @case(1) 男性 @break
                        @case(2) 女性 @break
                        @case(3) その他 @break
                        @default 不明
                    @endswitch
                </td>
                <td>{{ $contact->email }}</td>
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
                <td class="hover-detail">
                    <a href="{{ route('admin.show', ['id' => $contact->id]) }}" class="btn btn-info detail-button">詳細を確認</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination-container">
        @if ($contacts->hasPages())
        <ul class="pagination">
            @if ($contacts->onFirstPage())
                <li class="disabled"><span>&lt;</span></li>
            @else
                <li><a href="{{ $contacts->previousPageUrl() }}" rel="prev">&lt;</a></li>
            @endif
            @foreach ($contacts->getUrlRange(1, $contacts->lastPage()) as $page => $url)
                @if ($page == $contacts->currentPage())
                    <li class="active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
            @if ($contacts->hasMorePages())
                <li><a href="{{ $contacts->nextPageUrl() }}" rel="next">&gt;</a></li>
            @else
                <li class="disabled"><span>&gt;</span></li>
            @endif
        </ul>
        @endif
    </div>
</div>
@endsection
