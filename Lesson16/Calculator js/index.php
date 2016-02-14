<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator JS</title>
	<link href='https://fonts.googleapis.com/css?family=Rationale' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="stylesheets/styles.css">
</head>
<body>
	<div class="container">
		<form action="#" class="calculator" method="post">
			<input type="hidden" class="operation" value=""/>
			<input type="text" class="operator" name="a" value="<?= $_POST['a'];?>"/>
			<input type="text" class="operator" name="b" value="<?= $_POST['b'];?>"/>
			<label for="plus">+</label>
			<input type="radio" name="operation" value="+" id="plus"/>
			<label for="subtract">-</label>
			<input type="radio" name="operation" value="-" id="subtract"/>
			<label for="divide">/</label>
			<input type="radio" name="operation" value="/" id="divide"/>
			<label for="product">*</label>
			<input type="radio" name="operation" value="*" id="product"/>
			<input type="submit" name="equals" value="=" class="equals"/>
<!--			<input type="reset" name="clear" value="c" class="clear"/>-->
		</form>
		<span class="copyright">by qqumn</span>
	</div>
	<?php
	if (empty($_POST['operation'])) {
		$result = 'Click on operation';
	}
	elseif (empty($_POST['a'])) {
		$result = 'Input 1st number';
	}
	elseif (empty($_POST['b'])) {
		$result = 'Input 2nd number';
	}
	else {
		$a = $_POST['a'];
		$b = $_POST['b'];
		$task = $_POST['operation'];

		if ($task == '+') { $result = $a + $b;}
		elseif ($task == '*') { $result = $a * $b;}
		elseif ($task == '/') { $result = $a / $b;}
		else { $result = $a - $b;}
	}
	echo '<span class="answer">Result: '. $result . '</span>';
	?>
</body>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="javascript/script.js"></script>
</html>