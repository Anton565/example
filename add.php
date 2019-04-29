<?php header('Location: index.php');

include 'db.php';
include 'api.php';

$path = 'img/';


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
        echo 'Что-то пошло не так';
    else
        echo '<p>Загрузка прошла удачно <a href="' . $path . $_FILES['picture']['name'] . '">Посмотреть</a>.</p>';
}

$image = $path . ($_FILES['picture']['name']);

$date = date_create();

if(isset($_POST['name']) && $_POST['name'] != '') {
    $name = $_POST['name'];
    $mes = $_POST['mes'];
    $opt = $_POST['opt'];
    $img = $image;
    $dt = date_format($date, 'Y-m-d H:i:s');
    addForm($db, $name, $mes, $opt, $img, $dt);
}







