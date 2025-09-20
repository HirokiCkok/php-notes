# 独習PHP 第4版 学習用リポジトリ
- 本家サンプルコード：https://wings.msn.to/index.php/-/A-03/978-4-7981-6849-4/

- XAMPP環境をDockerで構築
```
# 起動
docker compose up -d

# MariaDB Monitorの起動
docker exec -it lamp-db mariadb -u root -p
（MYSQL_ROOT_PASSWORD に設定したパスワードを入力）

# ブラウザ確認
http://localhost:8080 → PHP動作確認 (phpinfo())
http://localhost:8081 → phpMyAdmin ログイン画面

```