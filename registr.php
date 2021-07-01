<?php 
	session_start();
	// if ($_SESSION['user']) {
	// 		header('Location: index.php');
	// 	}
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
	<form class="form-1" action="vendor/signup.php" method="post">
		<section class="form">
			<h1 class="form-h1">РЕГИСТРАЦИЯ</h1>
			<div class="div">
				<label for="">ФИО</label>
				<input type="text" name="full_name" placeholder="Введите ФИО">
			</div>
			<div class="div">
				<label for="">Логин</label>
				<input type="text" name="login" placeholder="Введите логин">
			</div>
			<div class="div">
				<label for="">Почта</label>
				<input type="text" name="email" placeholder="Введите почту">
			</div>
			<div class="div">
				<label for="">Пароль</label>
				<input type="password" name="password" placeholder="Введите пароль">
			</div>
			<div class="div">
				<label for="">Подтвердите пароль</label>
				<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
			</div>
				<button class="button" type="submit">Войти</button>
			<p class="p">У вас уже есть аккаунт? - <a class="p" href="/input.php">авторизируйтесь</a></p>
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