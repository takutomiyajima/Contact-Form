@extends('layouts.app')

@section('content')
<div class="container">
    <h2>新規登録</h2>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div>
            <label>お名前</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <p>{{ $message }}</p> @enderror
        </div>
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
        <button type="submit">登録</button>
    </form>
</div>
@endsection