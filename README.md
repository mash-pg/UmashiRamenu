# UmashiRamenu

## 実行手順

- 構築環境
- ローカル環境にgit cloneして取得
- ローカル環境にてDB連携
- テーブルにテストデータを作成

###1. 構築環境
- MacOS
- Docker

### 2. ローカル環境にgit cloneして取得
1.git clone https://github.com/mash-pg/UmashiRamenu.git

2.レポジトリがumashiramenuになってしまっているので  
プロジェクト名をumashiramenに変更して下さい。

3.composer install

4..env.exampleの名前を.envに変更する。  
下記コマンド  
`cp .env.example .env`

5.application encryption keyの生成  
下記コマンド
   ```
   ./vessel art key:generate
   上記でうまく行かない場合は、下記コマンド 
   php artisan key:generate
   ```  

6.ブランチを最新のブランチに切り替えます。

### 3. ローカル環境にてDB連携
1. ./vessel start を出力(dockerを立ち上げる)
  ```
　　　./vessel start
　　　止める場合は、
　　　./vessel stop 
  ```

2.DBeaveをインストールしてmysqlと連携する
- 下記設定で接続可能
    - DB名　umashiramen
    - ポート　3306
    - user名　root

3.DBを作成する

4.テーブルを作成する
1. php artisan migrateを実行して下さい。
    ```
       php artisan migrate
       上記でうまく行かない場合は、下記コマンド 
       ./vessel artisan migrate  
    ```


### 4. テーブルにテストデータを作成

1. php artisan db:seedでテストデータを入れる
   ```
     php artisan db:seed
     上記でうまく行かない場合は、下記コマンド 
     ./vessel art db:seed 
   ```

2. php command:delete にてテーブルデータの中身を削除する
   ```
     php artisan command:delete
     上記でうまく行かない場合は、下記コマンド 
     ./vessel art command:delete
   ```



