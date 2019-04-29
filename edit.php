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
    $id = $_GET['player_id'];
    $user = getPlayerById($db, $id);
    ?>

    <form action="save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['player_id']; ?>">
        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['player_name']; ?>">
            <label for="email">Сообщение</label>
            <input type="text" class="form-control" id="mes" name="mes" value="<?php echo $user['messages']; ?>">
            <label for="email">Время заявки</label>
            <input type="text" class="form-control" id="tim" name="tim" value="<?php echo $user['timing']; ?>">
            <label for="email">Опция</label>
            <input type="text" class="form-control" id="opt" name="opt" value="<?php echo $user['options']; ?>">
            <label for="phone">Изображение</label>
            <input type="text" class="form-control" id="img" name="img" value="<?php echo $user['images']; ?>">
        </div>
        <button type="submit" class="btn btn-default">Сохранить</button>
    </form>

</div>

<footer>

</footer>
</body>
</html>
