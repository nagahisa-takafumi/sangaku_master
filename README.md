# 産学連携_マスタ

## 環境構築

1. githubよりpullします

githubより、マスタープロジェクトをプルしましょう。
最新のコミット情報はdevelopに存在するので、developのデータを取り込むこともお忘れ無く。

```
git clone https://github.com/nagahisa-takafumi/sangaku_master.git
cd sangaku_master
git checkout -b develop
git pull origin develop
```

2. composer installを行う

必要なパッケージ類をcomposer.jsonをもとにダウンロードします。
実行にはインターネット環境が必要です。

```
composer install
npm install
npm run dev
```

3. .envの作成

まず、プロジェクトルートディレクトリに存在する`.env.example`をコピーして`.env`を作成します。
その後、以下の内容をデータベースの設定に合わせて書き換えてください。
データベースの設定がわからない方は担当者まで質問してください。

```
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

4. 起動する

```
php artisan serve
```

## テストデータの取り込み

環境構築を一通り終えた状態で実行してください。
なお、外部キー制約の関係上、順番に行わなければエラーになる可能性があります。

```
//キャンプグループテーブル
php artisan db:seed --class=TableCampsSeeder
//設置場所テーブル
php artisan db:seed --class=TablePlacesSeeder
//酒造所テーブル
php artisan db:seed --class=TableBreweriesSeeder
//お酒の種類テーブル
php artisan db:seed --class=TableSakeTypesSeeder
//酒テーブル
php artisan db:seed --class=TableSakesSeeder
```# video_de_riddle
