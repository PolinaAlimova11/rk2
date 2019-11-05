<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Var3</h1>
		<h3>Таблица умножения</h3>
		<?php
			for($i=1; $i<11; $i++){
				for($j=1; $j<11; $j++) {
					echo $i, '*', $j, '=', $i*$j, '<br>';
				}
			}
		?>
		<form method='GET' action=''>
			<h3>Введите число <input name='per' type='text'/></h3><br>
			<p>Выберите действие:</p><br>
			<p>Квадрат<input name='1' type='radio'/><br></p>
			<p>Куб<input name='2' type='radio'/><br></p>
			<p>Корень<input name='3' type='radio'/><br><p/>
			<input type='submit' value='Отправить'/><br>
		</form>
		<?php
			if (isset($GET['per'])) {
				if (isset($GET['1'])) {
					echo $GET['per']*$GET['per'];
				}
				if (isset($GET['2'])) {
					echo $GET['per']*$GET['per']*$GET['per'];
				}
				if (isset($GET['3'])) {
					echo sqrt($GET['3']);
				}
			}
		?>
	</body>
</html>

