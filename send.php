<?php
if (isset($_POST["button"])) {
    $r = $_POST["R"];
    $x = $_POST["X"];
    $y = $_POST["Y"];
}
if ((!is_numeric($y)||($y<-3)||($y>5)))
    $result = "Косяк";
 else
{
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
           
            <div id="right">
                <table name="result">
                    <tr>
                        <th>R</th>
                        <th>X</th>
                        <th>Y</th>
                        <th>Результат</th>
                    </tr>
                    <tr>
                    <td>' . $r . '</td>
             <td>' . $x . '</td>
             <td>' . $y . '</td>
             <td>' . $result . '</td>
</tr>
                </table>
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
