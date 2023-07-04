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

3. 起動する

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
```