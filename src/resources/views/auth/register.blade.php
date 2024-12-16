@extends('layouts.app')

@section('content')
<div class="container">
    <h2>新規登録</h2>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div>
            <p class="form-label">お名前</p>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <p class="error-message">{{ $message }}</p> @enderror
        </div>
        <div>
            <p class="form-label">メールアドレス</p>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <p class="error-message">{{ $message }}</p> @enderror
        </div>
        <div>
            <p class="form-label">パスワード</p>
            <input type="password" name="password">
            @error('password') <p class="error-message">{{ $message }}</p> @enderror
        </div>
        <button type="submit">登録</button>
    </form>
    <form action="{{ url('/login') }}">
        <button class="second-button" type="submit" >ログイン</button>
    </form>
</div>
@endsection