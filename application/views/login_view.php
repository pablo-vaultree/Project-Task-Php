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
	<?=form_close();?>
</div>

	