<?=$message;?>
<?=form_open('tarefa/incluir');?>
	<fieldset>
		<legend>Informe os dados da nova tarefa</legend>		
		<p>
			Título<br/>
			<input type="text" id="nome" name="nome"/>
		</p>
		
		<p>
			Descrição<br/>
			<textarea cols="40" rows="10" id="descricao" name="descricao"></textarea>
		</p>
		
		<p>
			Data de encerramento<br/>
			<input type="text" id="dt_fim" name="dt_fim"/>
		</p>					
			
		<?= validation_errors('<p class="error">');?>
			
		<P>				
			<input type="submit" name="salvar" id="salvar" value="Salvar"/>
			<?echo anchor('projeto/index/'.$projeto, 'Voltar para o projeto');?>								
		</P>					
	</fieldset>
	
	<input type="hidden" name="projetoId" value="<?=$projeto?>" />	
<?=form_close();?>

<script>
	$(document).ready(function() {
    	$("#dt_fim").datepicker();
  	});
</script>

