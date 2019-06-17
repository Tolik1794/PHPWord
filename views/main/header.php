<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title>PHPWord</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:20px;">
        <a class="navbar-brand" href="/">PHPWord</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/views/log/log.php">Просмотр <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <?php if (!Session::has('login')) { ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="/public/register.php">Регистрация <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/public/login.php">Авторизация <span class="sr-only">(current)</span></a>
                    </li>
                <?php } ?>

                <?php if (Session::has('login')) { ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="/public/logout.php">Выйти (<?= Session::get('login') ?>) <span class="sr-only">(current)</span></a>
                    </li>

                <?php } ?>
            </ul>

        </div>
    </nav>