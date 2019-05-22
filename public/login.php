<?php
/**
 * Project: restaurant
 * Filename: login.php
 * Date: 16.05.2019
 * Time: 8:17
 */
session_start();
$title = "Авторизация в системе";

require_once("../forms/LoginForm.php");
require_once('../DB.php');
require_once('../Password.php');
require_once('../Session.php');
require_once('../Dbsettings.php');

$msg = '';

$db = new DB($host, $user, $password, $db_name);
$form = new LoginForm($_POST);

if ($_POST) {
    if ($form->validate()) {
        $login = $db->escape($form->getLogin());
        $password = new Password($db->escape($form->getPassword()));

        $res = $db->query("SELECT * FROM users WHERE login = '{$login}' AND password = '{$password}' AND status = '1' LIMIT 1");
        if (!$res) {
            $msg = 'Пользователя с таким учетными данными нет или ваш статус не активный! Свяжитесь с администратором!';
        } else {
            $login = $res[0]['login'];
            Session::set('login', $login);
            header('location: ../index.php?msg=Вы авторизированы на сайте');
        }
    } else {
        $msg = 'Пожалуйста, заполните все поля';
    }
}

require_once '../views/main/header.php';
?>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <!-- Inner Content -->
    <div class="inner-page padd">
        <!-- Contact Us Start -->
        <div class="contactus">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Contact form -->
                        <div class="register-form">
                            <!-- Heading -->
                            <h3>Вход в систему</h3>
                            <!-- Form -->
                            <b style="color: red;"><?= $msg; ?></b>
                            <form method="post">
                                <div class="form-group">
                                    <label for="InputEmail">Логин</label>
                                    <input type="text" class="form-control" id="InputEmail" placeholder="Ваш логин"
                                           name="login"
                                           value="<?= $form->getLogin(); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Пароль</label>
                                    <input type="password" class="form-control" id="InputPassword" placeholder="Пароль"
                                           name="password">
                                </div>

                                <button type="submit" class="btn btn-primary">Войти</button>
                                <a href="index.php" class="btn btn-primary">Отмена</a>
                            </form>
                        </div><!--/ Contact form end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us End -->
    </div><!-- / Inner Page Content End -->