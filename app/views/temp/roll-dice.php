<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roll Dice</title>
</head>
<body>
	<?if ($guess==$roll) :?>
	<p style="color:green">You are correct!  You guessed <?= $guess; ?> the roll was <?= $roll; ?></p>
	<?else :?>
	<p style="color:red">You are incorrect!  You guessed <?= $guess; ?> but the roll was <?= $roll; ?></p>
	<?endif;?>
</body>
</html>