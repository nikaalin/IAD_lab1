<?php
session_start();
if (isset($_POST["button"])) {
    $r = $_POST["R"];
    $x = $_POST["X"];
    $y = $_POST["Y"];
}
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
$_SESSION['R' . $_SESSION['count']] = $r;
$_SESSION['X' . $_SESSION['count']] = $x;
$_SESSION['Y' . $_SESSION['count']] = $y;
if ((!is_numeric($y) || ($y < -3) || ($y > 5)))
    $result = "Невалидные данные, как вы это провернули?";
else {
    if ($x > 0) {
        if ($y < 0) $result = "нет";
        else {
            if (($x >= (-$r)) and ($y <= $r / 2)) $result = "да";
            else $result = "нет";
        }
    } else {
        if ($y > 0) {
            if ($x ** 2 + $y ** 2 <= $r ** 2) $result = "да";
            else $result = "нет";
        } else {
            if (2 * $x + $y <= $r) $result = "да";
            else $result = "нет";
        }
    }
}
$_SESSION['Result' . $_SESSION['count']] = $result;


echo '
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="description" content="lab">
    <meta name="author" content="Nikolaenkova Alina">
    <title>
        Лабораторная 1
    </title>
    <link rel="stylesheet" type="text/css" href="main0.css"/>
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
<table class="main">
    <tr class=title>
        <td>
            Николаенкова А.А. <br> P3201 <br> Вариант 18110
        </td>
    </tr>
    <tr>
        <td>

            <div class="left">
                <table name="result">
                    <tr>
                        <th>R</th>
                        <th>X</th>
                        <th>Y</th>
                        <th>Результат</th>
                    </tr>';
if ($_SESSION['count']<3){
    for ($i = 0; $i <= $_SESSION['count']; $i++) {

        echo '
                    <tr>
                    <td>' . $_SESSION['R'.$i] . '</td>
             <td>' . $_SESSION['X'.$i] . '</td>
             <td>' . $_SESSION['Y'.$i] . '</td>
             <td>' . $_SESSION['Result'.$i] . '</td>
</tr>
';
    }
}
else {
    for ($i = $_SESSION['count'] - 3; $i <= $_SESSION['count']; $i++) {

        echo '
                    <tr>
                    <td>' . $_SESSION['R' . $i] . '</td>
             <td>' . $_SESSION['X' . $i] . '</td>
             <td>' . $_SESSION['Y' . $i] . '</td>
             <td>' . $_SESSION['Result' . $i] . '</td>
</tr>
';
    }
}
echo '
                </table>
            </div>
            <div class="right">
                <img src="images/areas.png">
            </div>
        </td>
    </tr>
    <tr class=title>
        <td>
            Университет ИТМО <br><a href="https://se.ifmo.ru" title="или не кафедра?" target="_blank">Кафедра ВТ</a><br>2018
        </td>
    </tr>
</table>
</body>
</html>
';

