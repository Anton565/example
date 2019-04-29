<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" rel="stylesheet" crossorigin="anonymous">
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
                <a class="navbar-brand" href="table.php">Users CRM</a>
            </div>


        </div>
    </nav>
</header>

<div class="container-fluid">

    <?php include 'db.php'; ?>
    <?php include 'api.php'; ?>


    <?php
    $users = getAllPlayers($db);
    ?>
    <table class="table table-bordered">
        <tr>
            <th>ФИО</th>
            <th>Сообщение</th>
            <th>Время заявки</th>
            <th>Опция</th>
            <th>Изображение</th>
            <th>Удалить</th>
            <th>Редактировать</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['player_name']; ?></td>
                <td><?php echo $user['messages']; ?></td>
                <td><?php echo $user['timing'] ?></td>
                <td><?php echo $user['options']; ?></td>
                <td><img src="<?php echo $user['images'] ?>" alt="foto"></td>
                <td><a class="btn btn-danger" href="delete.php?player_id=<?php echo $user['player_id'];?>">Удалить</a></td>
                <td><a class="btn btn-success" href="edit.php?player_id=<?php echo $user['player_id'];?>">Редактировать</a></td>
            </tr>
        <?php } ?>

    </table>

    <form action="add.php" enctype="multipart/form-data" method="POST" role="form" style="margin: 20px;">

        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите имя" style="width: 200px; margin-bottom: 10px;">
            <input type="text" class="form-control" id="mes" name="mes" placeholder="Сообщение" style="width: 200px; margin-bottom: 10px;">
            <input name="picture" id="img" name="img" type="file" />
            <input type="text" class="form-control" id="dt" name="dt" placeholder="Сообщение" style="display: none;">
        </div>

        <div class="form-group">
            <select name="opt" class="form-control" id="opt" style="width: 200px; margin-bottom: 10px;">
                <?php
                $options = getAllOptions($db);
                foreach ($options as $key => $value) {
                    echo "<option value=".$value['option_id'].">".$value['options']."</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Отправить</button>
    </form>

    </div>

<footer>

</footer>

</body>
</html>

