## 修改目录权限
```Bash
find storage -type d -exec chmod 777 {} \;
chmod 777 bootstrap/cache
```

```
## 初始化环境
创建 .env 文件，可以通过 .env.example 模板来创建
php artisan key:generate
## 更新 vendor 第三方库
修改composer.json
composer install
bower install
```

```
location / {
	index index.php index.htm;
	if (-f $request_filename) {
		expires max;
		break;
	}
	
	if (-d $request_filename){
		rewrite ^/(.*)([^/])$ http://$host/$1$2/ permanent;
	}
	
	if ($request_filename !~ "\.(js|htc|ico|gif|jpg|png|css|php)$") {
		rewrite ^(.*) /index.php last;
	}

}
```
