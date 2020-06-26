## About System-inspection

Webブラウザを介して公園点検が完結するアプリです。

- [スマホ1台だけで]点検作業が完結します。
- 点検結果は、CSVファイルに出力され、そのファイルを元にエクセルで書類を作成します。

## ログイン、ユーザ認証機能の確認方法

※メールを介する処理はまだ実装していません。

- 適当なブランチをローカルに作成（便宜上、ここでは check/auth とする）
- check/auth に feature/auth ブランチをpull
- https://takaolab.com/laradock-database-for-local/ を参考に、テストDBを作成。DB名：system_inspection, ユーザ名：si_user とする。
- workspaceコンテナで、rootディレクトリに移動
- php artisan migrate を実行
- ブラウザでlocalhostにアクセス。自由にユーザを登録して確認してください。
- 登録されたユーザの一覧は、phpMyAdmin（localhost:8080）で確認できます。
