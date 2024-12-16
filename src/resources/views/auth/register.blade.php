@extends('layouts.app')

@section('content')
<div class="container">
    <h2>新規登録</h2>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div>
            <p class="form-label">お名前</p>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>
        <div>
            <p class="form-label">メールアドレス</p>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <p>{{ $message }}</p> @enderror
        </div>
        <div>
            <p class="form-label">パスワード</p>
            <input type="password" name="password">
            @error('password') <p>{{ $message }}</p> @enderror
        </div>
        <button type="submit">登録</button>
    </form>
</div>
@endsection