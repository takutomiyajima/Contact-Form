<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <header class="header">
            <div class="header-title">
                FashionablyLate
            </div>
    </header>
    <main class="contact">
        <h2 class="title">Contact</h2>
        <form class="form" action="/confirm" method="get">
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group_name">
                    <input class="form_name" type="text" name="first_name" placeholder="例：山田">
                    <input class="form_name" type="text" name="last_name" placeholder="例：太郎">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="select-group">
                    <div class="select-component">
                        <input class="select-radio" type="radio" name="gender" value="男性" id="1">
                        <label for="man" class="select-detail">男性</label>
                    </div>
                    <div class="select-component">
                        <input class="select-radio" type="radio" name="gender" value="女性" id="2">
                        <label for="woman" class="select-detail">女性</label>
                    </div>
                    <div class="select-component">
                        <input class="select-radio" type="radio" name="gender" value="その他" id="3">
                        <label for="other" class="select-detail">その他</label>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">必須</span>
                </div>
                <input class="form_text" type="email" name="email" placeholder="例：test@example.com">
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">必須</span>
                </div>
                <input class="form_text" type="tel" name="phone" placeholder="080-1234-5678">
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">必須</span>
                </div>
                <input class="form_text" type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <input class="form_text" type="text" name="building" placeholder="例：千駄ヶ谷マンション101">
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">必須</span>
                </div>
                <select name="inquiry_type" class="form_text">
                    <option value="">選択してください</option>
                    <option value="1">商品のお届けについて</option>
                    <option value="2">商品の交換について</option>
                    <option value="3">商品トラブル</option>
                    <option value="4">ショップへのお問い合わせ</option>
                    <option value="5">その他</option>
                </select>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">必須</span>
                </div>
                <textarea name="inquiry_content" cols="30" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <button type="submit" class="btn-submit">確認画面</button>
        </form>
    </main>
    </body>
</html>