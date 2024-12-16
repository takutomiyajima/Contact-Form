@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ログイン</h2>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
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
        <button type="submit">ログイン</button>
        <button type="register">新規登録</button>
    </form>
</div>
@endsection