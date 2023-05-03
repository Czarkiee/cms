<?php

$pdo = new PDO(dsn:'mysql:host=localhost;dbname=php_cms_001;encoding=utf8', username:'root', password:'');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);