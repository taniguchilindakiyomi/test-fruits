# アプリケーション名
test-fruits  
## 環境構築  
Dockerビルド  
1.git clone リンク  
2.docker-compose up -b --build  
laravel環境構築  
1.docker-compose exec php bash  
2.composer install  
3.cp .env example .envで.envファイルを作成->環境構築を変更(DB_HOST=など)  
4.php artisan key:generate  
5.php artisanmigrateでphpmyadminにテーブルを用意  
6.php artisan db:seedでダミーデータ作成  
# 使用技術(実行環境)  
php->7.4.9(プログラミング言語)  
laravel->8.83.8(フレームワーク)  
mysql->8.0.26  
phpmyadmin->5.2.1  
# ER図  
< - - -作成したER図の画像- - - >  
![ER図](/.png)
# URL  
環境開発 : http://localhost/products  
phpmyadmin : http://localhost:8080/
