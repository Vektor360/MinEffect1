<form action="index.php" method="POST">
<?php
echo "<table>";
echo	"<tr><th>3. Определить пул проблем для реализации проектов. Выбранные проекты должны способствовать достижению целей организации</th><th><input type='submit' name='button1' value='Добавить проблему в пул' class='first_sp'/></th><th><input type='date' name='DAT_3' class='first_min_sp' value=date('Y-m-d')</th></tr>";
			$counter = 4;
		if($_POST['button1']) {
			echo "$counter";
			$PUL = "PUL_".$counter;
			$OTV = "OTV_".$counter;
			$DAT = "DAT_".$counter;
			$counter++;
			echo '<tr><th><input type="text" name='.$PUL.' class="first_min_sp"/></th><th><input type="text" name='.$OTV.' class="first_min_sp"/></th><th><input type="date" name='.$DAT.' class="first_min_sp" value=<?php echo date("Y-m-d") ?>></th></tr>';
		}
echo "</table>";
?>
