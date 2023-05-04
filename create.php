
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
</head>
<body>

<script>
  var now = new Date();
</script>

    <a href="main.php" class="second_sp">Назад</a>
    <br>
    <p class="Glav">Создание дела об образцовом учреждении</p>
    <br>
    <p class="first">Тип образцового учреждения </p>

    <form action="create.php" method="POST">

<div class="form_radio_group">
    <div class="form_radio_group-item">
		<input id="radio-1" type="radio" name="SID" value="Региональные" checked>
		<label for="radio-1">Региональные</label>
	</div>
	<div class="form_radio_group-item">
		<input id="radio-2" type="radio" name="SID" value="Федеральные">
		<label for="radio-2">Федеральные</label>
	</div>
</div>

    <br>
    <p class="first">Ответственный исполнитель </p>
    <input type="text" name="OTV" class="first_min_sp"/>
    <p class="first">Должность </p>
    <input type="text" name="OTV_DLG" class="first_min_sp"/>
    <br>
    <p class="first">ОИВ Сахалинской области </p>
    <input type="text" name="OIV" class="first_min_sp"/>
    <br>
    <p class="first">Фио от организации </p>
    <input type="text" name="ORG_FIO" class="first_min_sp"/>
    <br>
    <p class="first">Дата проведения стартового совещания </p>
    <input type="date" name="DAT" class="first_min_sp" value=<?php echo date('Y-m-d') ?>>
    <br>
    <p class="first">Название учреждения </p>
    <input type="text" name="NAM" class="first_min_sp"/>
    <br>
    <input type="submit" name="button1" value="Создать" class="first_sp"/>
    </form>
    <?php
    function Create()
    {
        $var = $_POST["NAM"];
        $var2 = fopen("Bank/$var.dlg", "w");
        fwrite($var2, date('Y-m-d')."\n".$_POST["SID"]."\n".$_POST["OTV"]."\n".$_POST["OTV_DLG"]."\n".$_POST["OIV"]."\n".$_POST["ORG_FIO"]."\n".$_POST["DAT"]);
    }
    if(array_key_exists('button1', $_POST)) {
        Create();
        ob_start();
            $new_url = 'main.php';
            header('Location: '.$new_url);
            ob_end_flush();
    }
    ?>
</body>
</html>