<?php
declare(strict_types=1);
error_reporting(-1);

//session_start();

//$start = microtime(true);
//printf('Затрачено %.4F сек.', microtime(true) - $start);

require_once __DIR__ . '/vendor/autoload.php';

function dump($data, $name = 'DUMP'): void
{
    echo "<pre>{$name}<br>"; var_dump($data); echo "<hr></pre>";
}


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration and login system</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div style="margin:100px 0 0 0;"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Registration and login system</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form class="js-register">
                <div class="js-register-error" style='display: none;'></div>
                <div class="mb-3">
                    <label for="username" class="form-label">Имя</label>
                    <input id="username" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input id="password" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </form>
        </div>
        <div class="col-md-6">
            <form class="js-login">
                <div class="js-login-error" style='display: none;'></div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input id="password" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Вход</button>
            </form>
        </div>
    </div>
</div>

<script src="/assets/js/jquery-1.12.4.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>
