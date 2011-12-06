<fieldset>
	<legend>Informe os dados do novo projeto</legend>
	<?=form_open('projeto/incluir');?>		
		<p>
			Nome<br/>
			<input type="text" id="nome" name="nome"/>
		</p>
		
		<p>
			Data de encerramento<br/>
			<input type="text" id="dt_fim" name="dt_fim"/>
		</p>
		<p>
			Observações<br/>
			<textarea cols="40" rows="10" id="obs" name="obs"></textarea>
		</p>
			
		<?= validation_errors('<p class="error">');?>
		
		<P>				
			<input type="submit" name="salvar" id="salvar" value="Salvar"/>
			<?echo anchor('usuario/dashboard', 'Voltar para o dashboard'); ?>								
		</P>
						
	<?=form_close();?>
</fieldset>

<script>
	$(document).ready(function() {
    	$("#dt_fim").datepicker();
  	});
</script>