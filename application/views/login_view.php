<?
	if (!isset($erro)) {
		$erro = "";	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bem-vindo ao ProjectTask</title>

	<?=load_css('style.css');?>
</head>
<body>
	<div id="container-login">		
		<div id="login_form">
			<h4>Bem-vindo ao ProjectTask!</h4>
			<?=form_open('login/logon');?>		
				<p>
					Login<br/>
					<input type="text" id="username" name="username"/>
				</p>
				
				<p>
					Senha<br/>
					<input type="password" id="password" name="password"/>
				</p>
				<P>				
					<input type="submit" name="login" id="login" value="Logar"/>
					<?php echo anchor('login/cadastro', 'Cadastre-se') ?>						
				</P>			
				<div class="error"><?=$erro?></div>					
			<?=form_close();?>
		</div>
		
		<?=$this->load->view('includes/footer');?>
	</div>
</body>
</html>

	