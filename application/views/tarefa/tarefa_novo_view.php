<fieldset>
	<legend>Informe os dados da nova tarefa</legend>
	<?=form_open('tarefa/incluir');?>		
		<p>
			Título<br/>
			<input type="text" id="nome" name="nome"/>
		</p>
		
		<p>
			Descrição<br/>
			<textarea cols="15" rows="5" id="descricao" name="descricao"></textarea>
		</p>
		
		<p>
			Data de encerramento<br/>
			<input type="text" id="dt_fim" name="dt_fim"/>
		</p>		
		
		<P>				
			<input type="submit" name="salvar" id="salvar" value="Salvar"/>								
		</P>			
		
		<input type="hidden" name="projetoId" value="<?=$projeto?>" />
		<?= validation_errors('<p class="error">');?>
							
	<?=form_close();?>
</fieldset>
