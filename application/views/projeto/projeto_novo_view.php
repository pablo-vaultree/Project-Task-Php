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
			<textarea cols="15" rows="5" id="obs" name="obs"></textarea>
		</p>
		
		<P>				
			<input type="submit" name="salvar" id="salvar" value="Salvar"/>								
		</P>			
		<?= validation_errors('<p class="error">');?>
							
	<?=form_close();?>
</fieldset>
