	<h1>Faça seu perfil no ProjectTask!</h1>
	<fieldset>
		<legend>Informe os dados do seu perfil</legend>
		<?=form_open('login/cadastrar_usuario');?>		
			<p>
				Login<br/>
				<input type="text" id="username" name="username"/>
			</p>
			
			<p>
				Senha<br/>
				<input type="password" id="password" name="password"/>
			</p>
			<p>
				Email<br/>
				<input type="text" id="email" name="email"/>
			</p>
						
			<?= validation_errors('<p class="error">');?>
			
			<P>				
				<input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar"/>
				<?echo anchor('login/index/', 'Voltar');?>									
			</P>						
		<?=form_close();?>
	</fieldset>
	