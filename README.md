# 大学受験用質問アプリ

大学別で大学受験に関する質問ができるアプリケーション.

## DEMO

[こちら](https://uniq.herokuapp.com/)で試すことができます.

ログインする際には,
email:demo@mail.com
PW:abcdefgh
でログインできます.

## Features

・カテゴリー一覧

![category](https://user-images.githubusercontent.com/118661273/221378059-695e5137-5ac1-470f-9807-a83980bba965.png)

・大学一覧

![スクリーンショット 2023-02-26 051238](https://user-images.githubusercontent.com/118661273/221378035-0cc29038-9cff-4176-9341-c91cd7a0d23c.png)

・質問一覧

![スクリーンショット 2023-02-26 051256](https://user-images.githubusercontent.com/118661273/221378096-7aa12032-3e39-4e8f-b935-0191dbf228d2.png)

・回答一覧

![スクリーンショット 2023-02-26 051312](https://user-images.githubusercontent.com/118661273/221378141-5b56e397-31a3-4c4d-b558-d476606ea0ec.png)

・質問作成

![スクリーンショット 2023-02-26 051540](https://user-images.githubusercontent.com/118661273/221378176-7923f443-a981-410a-85d2-7103e702d2de.png)

・回答作成

![スクリーンショット 2023-02-26 051600](https://user-images.githubusercontent.com/118661273/221378197-fdeec748-aca6-4449-81c5-2d6fbb9c4985.png)

## Future Features

- 質問・回答削除機能
- 回答レビュー機能
- 質問・回答日時

## Requirement

- php:^8.0.27
- laravel/framework:^9.51.0
- guzzlehttp/guzzle:^7.5

## Installation

インストールと初期設定

`git clone https://github.com/shotaaaaaaaaa/UniversityQ.git
cd uniq
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate`

.envの中身を設定

`DB_DATABASE={db_name}
DB_USERNAME={db_username}
DB_PASSWORD={db_password}`

マイグレーションを実行して、サーバを起動

`php artisan migrate:fresh --seed
php artisan serve --port=8080`

## Note

不具合があった場合は、下記まで連絡をお願いします.

## Author

- 作成者：東出昇大
- 所属：同志社大学経済学部
- E-mail：sgac31tvgam@gmail.com
