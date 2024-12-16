<?php
$gender_id = 0; 
$category = ''; 

if ($contact['gender'] === '男性') {
    $gender_id = 1;
} elseif ($contact['gender'] === '女性') {
    $gender_id = 2;
} else {
    $gender_id = 3;
}

if ($contact['category_id'] == 1) {
    $category = '商品のお届けについて';
} elseif ($contact['category_id'] == 2) {
    $category = '商品の交換について';
} elseif ($contact['category_id'] == 3) {
    $category = '商品トラブル';
} elseif ($contact['category_id'] == 4) {
    $category = 'ショップへのお問い合わせ';
} else {
    $category = 'その他';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/confirm.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <header class="header">
            <div class="header-title">
                FashionablyLate
            </div>
    </header>
    <main class="confirm">
        <h2 class="title">Contact</h2>
        <form class="form" action="/thanks" method="post">
        @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <p class="input_text">{{ $contact['first_name'] }}&emsp;{{ $contact['last_name'] }}</p>
                                    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                            </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <p class="input_text">{{ $contact['gender'] }}</p>
                                <input type="hidden" name="gender" value="{{ $gender_id }}" readonly />
                            </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="tell" value="{{ $contact['phone'] }}" readonly />
                            </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="address" value="{{ $contact['address'] }}" readonly />
                            </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="building" value="{{ $contact['building'] }}" readonly />
                            </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <p class="input_text">{{$category}}</p>
                                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" readonly />
                            </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                            </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-reset" type="reset" onclick="history.back()">修正</button>
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </main>
</body>
</html>