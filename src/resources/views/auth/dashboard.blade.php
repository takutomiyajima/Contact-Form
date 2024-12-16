@extends('layouts.app')

@section('content')
<div class="container">
    <h2>管理画面</h2>
    <table class="table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>カテゴリ</th> 
                <th>登録日</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                <td>
                    @switch($contact->gender)
                        @case(1)
                            男性
                            @break
                        @case(2)
                            女性
                            @break
                        @case(3)
                            その他
                            @break
                        @default
                            不明
                    @endswitch
                </td>
                <td>{{ $contact->email }}</td>
                <td>
                    @switch($contact->category_id)
                        @case(1)
                            商品のお届けについて
                            @break
                        @case(2)
                            商品の交換について
                            @break
                        @case(3)
                            商品トラブル
                            @break
                        @case(4)
                            ショップへのお問い合わせ
                            @break
                        @default    
                            未分類
                    @endswitch
                </td> 
                <td>{{ $contact->created_at->format('Y-m-d') }}</td>
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