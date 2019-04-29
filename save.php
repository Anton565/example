<?php header('Location: index.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Users CRM</a>
            </div>


        </div>
    </nav>
</header>

<div class="container-fluid">
    <?php include 'db.php'; ?>
    <?php include 'api.php'; ?>
    <?php
    if(isset($_POST['name']) && isset($_POST['mes']) && isset($_POST['tim']) && isset($_POST['opt']) && isset($_POST['img']) && isset($_POST['id'])) {
        $name = $_POST['name'];
        $mes = $_POST['mes'];
        $tim = $_POST['tim'];
        $opt = $_POST['opt'];
        $img = $_POST['img'];
        $id = $_POST['id'];
        savePlayer($db, $name, $mes, $tim, $opt, $img, $id);
    } else {
        echo "<h1>Ошибка сохранения данных</h1>";
    }

    ?>

</div>

<footer>

</footer>
</body>
</html>

