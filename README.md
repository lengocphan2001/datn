Cách chạy 
1. composer install
2. copy file env.example -> .env
3. Cấu hình file .env -> databaseName -> datn
4. Cấu hình file .env -> MAIL_HOST -> smtp.gmail.com
5. Cấu hình file .env -> MAIL_USERNAME -> yourmail
6. Cấu hình file .env -> MAIL_PASSWORD -> app password in mail
7. chạy lệnh php artisan migrate
8. chạy lệnh php artisan db:seed --class=DbAdmin
9. chạy lệnh php artisan db:seed --class=DbColor
10. chạy lệnh php artisan db:seed --class=DbSize
11. chạy lệnh php artisan storage:link
12. chạy php artisan serve
13. truy cập trang admin => username : admin; password : 123

