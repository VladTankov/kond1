<?php 
	session_start();
	// if ($_SESSION['user']) {
	// 	header('Location: index.php');
	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Сладкоежка</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/headlogo.png">
	<link rel="stylesheet" href="assets/style/input.css">
</head>
<body>
	<form class="form-1" action="vendor/signin.php" method="post">
		<section class="form">
			<h1 class="form-h1">ВХОД</h1>
			<div class="div">
				<label for="">Логин</label>
				<input type="text" name="login" placeholder="Введите логин">
			</div>
			<div class="div">
				<label for="">Пароль</label>
				<input type="password" name="password" placeholder="Введите пароль">
			</div>
			<button class="button" type="submit">Войти</button>
			<p class="p">У вас нет аккаунта? - <a class="p" href="/registr.php">зарегистрируйтесь</a></p>
			<?php
				if ($_SESSION['message']) {
					echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
				}
				unset($_SESSION['message']); 
			?>
		</section>
	</form>
</body>
</html>