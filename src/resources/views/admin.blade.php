<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container">
        <h1>Admin</h1>
        <form action="{{ url('/search') }}" method="POST" class="search-form">
            @csrf
            <input type="text" name="name" placeholder="名前" value="{{ request('name') }}">
            <select name="gender">
                <option value="">性別を選択</option>
                <option value="男性" {{ request('gender') == '男性' ? 'selected' : '' }}>男性</option>
                <option value="女性" {{ request('gender') == '女性' ? 'selected' : '' }}>女性</option>
                <option value="その他" {{ request('gender') == 'その他' ? 'selected' : '' }}>その他</option>
            </select>
            <select name="inquiry_type">
                <option value="">お問い合わせの種類を選択</option>
                <option value="商品の交換について" {{ request('inquiry_type') == '商品の交換について' ? 'selected' : '' }}>商品の交換について</option>
                <!-- 他のオプションを追加 -->
            </select>
            <input type="date" name="date" value="{{ request('date') }}">
            <button type="submit">検索</button>
            <a href="{{ url('/dashboard') }}">検索条件をリセット</a>
        </form>

        <p>“{{ request('name') }}” の検索結果</p>

        <table>
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->inquiry_type }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $users->links() }}
        </div>

        <form action="{{ url('/export') }}" method="POST">
            @csrf
            <button type="submit">エクスポート</button>
        </form>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">ログアウト</button>
        </form>
    </div>
</body>
</html>
