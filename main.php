<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <br>
    <br>
    <a href="create.php" class="first_min_sp">Создать новое дело</a>
    <br>
    <br>
    <br>
    <?php
    echo '<table>';
    echo '<tr><th>Название учреждения</th><th>Ответственное лицо</th><th>Дата создания дела</th></tr>';
    $dir = "/Bank";
    $var = scandir($_SERVER['DOCUMENT_ROOT'].$dir);
    foreach($var as $var2)
    {
        if(preg_match('/.(dlg)/', $dir.'/'.$var2))
        {
            
            $filename = __DIR__ . $dir.'/'.$var2;
            $array = file($filename);
            echo '<tr><td><a class="first" href="Change.php?dir='.$dir.'&var2='.$var2.'">'.$var2.'</a></td><td>'.$array[2].'</td><td>'.$array[0].'</td></tr>';
        }
    }
    echo '</table>';
    ?>
</body>
</html>