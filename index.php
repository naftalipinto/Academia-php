


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/stylelogin.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<form action="secction/fn/login_e.php" method="POST" name="f_login">
	<div class="main-login">

		<div class="left-login">
		
		<img src="img/g.png" alt="">	
		</div>

		<div class="right-login">

			<div class="card-login">
				<img src="img/horizontal_on_white_by_logaster.png" alt="">
				
				<div class="textfield">
					<label for="user">Usuário</label>
					<input type="text" name="ip_usuario" placeholder="Usuário" required>
				</div>

				<div class="textfield">
					<label for="password">Senha</label>
					<input type="password" name="ip_senha" placeholder="Senha" required>
					
				</div>
				<label style="align-self: flex-start; color: gray;">Lembrar de mim? <input type="checkbox" value="Lembrar" name="ip_check"></label>
				

				<input type="submit" value="LOGIN" name="btn_lg" class="btn-login"  a >
			
			</div>
		</div>
	</div>
</form>
</body>
</html>