<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bem-vindo ao ProjectTask</title>

	<?=$css;?>	
</head>
<body>

<div id="container">
	<h1>Bem-vindo ao ProjectTask!</h1>

	<div id="body">
		<form action="<?=base_url()?>Login/Logon/" method="post">
			<p>
				Login
				<input type="text" id="username" name="username"/>
			</p>
			
			<p>
				Senha
				<input type="text" id="password" name="password"/>
			</p>
			<P>
				<input type="submit" name="login" id="login" value="Logar"/>						
			</P>
			
			Não possui cadastro? <a href="">Clique aqui</a> e faça seu cadastro!
			
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>