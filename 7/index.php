<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Mini Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <?php include_once('classes.php'); ?>
<div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <strong>Мини магазин на PHP</strong>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=4" class="class-link"></a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=3" class="nav-link">Регистрация</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                

            <?php
            if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page == 1) {include_once('catalog.php');}
            if($page == 2) {include_once('registration.php');}
            if($page == 3) {include_once('admin.php');}
        }
        ?>
        </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>