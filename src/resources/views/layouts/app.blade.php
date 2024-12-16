<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'お問い合わせフォーム')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">お問い合わせフォーム</div>
        <ul class="navbar-menu">
            @auth
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}">ログイン</a></li>
                <li><a href="{{ route('register') }}">新規登録</a></li>
            @endauth
        </ul>
    </nav>
    <main class="container">
        <h1 class="title">@yield('title', 'お問い合わせフォーム')</h1>
        @yield('content')
    </main>
</body>
</html>
