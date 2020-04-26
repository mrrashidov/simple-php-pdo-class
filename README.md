# Simple-PHP-PDO-Class
[![API](https://img.shields.io/badge/Simple%20PHP%20Class%20PHP-Aprel%2026%2C%202020-36ade1.svg)](https://core.telegram.org/bots/api)
![PHP](https://img.shields.io/badge/php-%3E%3D5.6-8892bf.svg)


Simple-PHP-PDO-Class bu phpda oson CRUID ishlamlari uchun yozilgan open source code.
Bu orqali siz istalgancha ozingizga Cruid ishlamlarini qilishingiz mumkin va juda oson.

# Yuklab olish
---------
#### Github orqali

Loyiha katalogidan ishga tushiring:
```
https://github.com/shoxruxrashidov/simple-php-pdo-class.git
```
#### Github orqali 2
```
Download tugmachasiga bosing va yukalb oling
```
************
# Pluginni ornatish
************

DB.php-ni serveringizga nusxalash va uni yangi croud skriptingizga qo'shish kerak boladi:
```php
include 'DB.php';

$db = new DB('localhost','test','root','','utf8mb4');
```
Namuna
------
*******
Yuklash insert ishlami
*******
```php
 
    require_once 'DB.php';
    $db = new DB('localhost','test','root','','utf8mb4');
    $query = "INSERT INTO bot_message (user_id,type,message) VALUES (?,?,?)";
    $params = ['1', 'text', 'Hello World'];
    $db->query_cruid($query, $params);
 ```
*******
Taxrirlash update ishlami
*******
```php    
    $query = "UPDATE bot_message SET message=:message WHERE user_id= :user_id";
    $params = ['message' => 'Hello World (edited)','user_id' => '1'];
    $db->query_cruid($query, $params);
```
*******
O'chirish delete ishlami
*******
```php 
    $query = "DELETE FROM bot_message WHERE user_id =:user_id";
    $params = ['user_id' => '1'];
    $db->query_cruid($query, $params);
```

*******
Xisoblash  count ishlami
*******
```php 
  $db->count("bot_message WHERE user_id = 1");
```
*******
yoki bolmasa
*******
```php
  $db->count("bot_message");
```

*******
Data olish id ga ko'ra select ishlami (one)
*******
```php
    $db->row("SELECT * FROM bot_message WHERE user_id = 1");
```

*******
Data olish ko'ra select ishlami (all)
*******
```php
    $db->row_array("SELECT * FROM bot_message");
```
