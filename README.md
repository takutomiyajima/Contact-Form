# お問い合わせフォーム

## 環境構築
- git clone git@github.com:takutomiyajima/Contact-Form.git
- docker-compose up -d --build

 Laravel環境構築
- docker compose exec php bash
- composer install
- .envの作成
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## 使用技術(実行環境)
- PHP 8.0
- Laravel 10.0
- MySQL 8.0

## ER図
< - - - 作成したER図の画像 - - - >

## URL
- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/
