<div id='tarefa'>
	<fieldset>
		<legend>Informações da tarefa: <?=$tarefa->nome?></legend>		
		<p>
			Data:<br />
			<?=$tarefa->data?>
		</p>
		
		<p>
			Projeto:<br />
			<?=$projeto->nome?>
		</p>
		
		<p>
			Previsão encerramento:<br />
			<?=$tarefa->data_encerramento?>
		</p>
		
		<p>
			Descrição:<br />
			<?=$tarefa->descricao?>
		</p>		
	</fieldset>	
</div>