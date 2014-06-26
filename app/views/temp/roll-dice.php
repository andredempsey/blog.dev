<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roll Dice</title>
</head>
<body>
	<?if ($guess==$roll) :?>
	<?="You are correct!  You guessed $guess the roll was $roll"?>
	<?else :?>
	<?="You are incorrect!  You guessed $guess but the roll was $roll"?>
	<?endif?>
</body>
</html>