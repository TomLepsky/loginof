<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="script.js"></script>
	<title>Calculator</title>
</head>
<body>
	<main>
		<form action="" method="post" id="calculator">
			<h4 class="center">Калькулятор</h4>
			<div>
				<div class="operand">
					<label for="operand1">Операнд 1:</label>
					<input type="number" name="operand1" id="operand1" required>
				</div>
				<div class="operand">
					<label for="operand2">Операнд 2:</label>
					<input type="number" name="operand2" id="operand2" required>
				</div>
			</div>
			<div class="result">
				<h4>Результат: </h4><h4 id="result"></h4>
			</div>
			<div class="operations">
				<button type="button" name="add" id="btn_add">Сложение</button>
				<button type="button" name="subtract" id="btn_subtract">Вычитание</button>
				<button type="button" name="multiple" id="btn_multiple">Умножение</button>
				<button type="button" name="division" id="btn_division">Деление</button>
			</div>
		</form>
	</main>
</body>
</html>