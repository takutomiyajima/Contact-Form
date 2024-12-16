@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ログイン</h2>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div>
            <label>メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <p>{{ $message }}</p> @enderror
        </div>
        <div>
            <label>パスワード</label>
            <input type="password" name="password">
            @error('password') <p>{{ $message }}</p> @enderror
        </div>
        <button type="submit">ログイン</button>
    </form>
</div>
@endsection