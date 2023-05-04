<?php
    //$dir=$_GET["dir"];
    //$var2=$_GET["var2"];
    //echo $dir.$var2;
    //$counter = 0;
    $counter = 4;
?>
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
    <form action="Change.php" method="POST">
    <a href="main.php" class="second_sp">Назад</a>
    <br>
    <table>
        <tr><th>Задача</th><th>Ответственные лица</th><th>Срок исполнения</th></tr>
        <tr><th>1. Провести стартовое совещание с ответственными лицами от учреждения по обсуждению плана мероприятий и назначению ответственных лиц по каждой задаче</th><th><input type="text" name="OTV_1" class="first_min_sp"/></th><th><input type="date" name="DAT_1" class="first_min_sp" value=<?php echo date('Y-m-d') ?>></th></tr>
        <tr><th>2. Сформировать "пул" активных граждан и общественных деятелей являющихся получателями услуг учреждения. Провести встречу с заинтересованной общественностью и сформировать предложения по оптимизации процессов и улучшению деятельности учреждения;</th><th><input type="text" name="OTV_2" class="first_min_sp"/></th><th><input type="date" name="DAT_2" class="first_min_sp" value=<?php echo date('Y-m-d') ?>></th></tr>
        <tr><th>3. Определить пул проблем для реализации проектов. Выбранные проекты должны способствовать достижению целей организации</th><th><input type="text" name="TMP" class="first_sp" disabled value=<?php echo $counter; ?>><input type="submit" name="button1" value="Добавить проблему в пул" class="first_sp"/></th><th><input type="date" name="DAT_3" class="first_min_sp" value=<?php echo date('Y-m-d') ?>></th></tr>
        <p><input type="text" name="TMP" class="first_sp" disabled value=<?php echo $counter;?>></p>
        <?php
            $temp = $_POST["TMP"];
            $submitbutton= $_POST['button1'];
            if($submitbutton) {
                $PUL = "PUL_".$temp;
                $OTV = "OTV_".$temp;
                $DAT = "DAT_".$temp++;
                echo '<tr><th><input type="text" name='.$PUL.' class="first_min_sp"/></th><th><input type="text" name='.$OTV.' class="first_min_sp"/></th><th><input type="date" name='.$DAT.' class="first_min_sp" value=<?php echo date("Y-m-d") ?>></th></tr>';
                $counter=$temp;
            }
        ?>
        <tr><th>Задача</th><th><input type="text" name="OTV" class="first_min_sp"/></th><th><input type="date" name="DAT" class="first_min_sp" value=<?php echo date('Y-m-d') ?>></th></tr>
    </table>
    <br>
</body>
</html>