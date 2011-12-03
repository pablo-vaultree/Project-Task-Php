<div id='projeto'>
	<fieldset>
		<legend>Informações do projeto: <?=$projeto->nome?></legend>		
		<p>
			Data:<br />
			<?=$projeto->data?>
		</p>
		
		<p>
			Previsão encerramento:<br />
			<?=$projeto->data_encerramento?>
		</p>
		
		<p>
			Observações:<br />
			<?=$projeto->observacao?>
		</p>		
	</fieldset>
	
	<div id='tarefas'>
		
		<?if (isset($tarefas)) {?>
			<?
			foreach ($tarefas as $tarefa) {
				echo anchor('tarefa/'.$tarefa->id, $tarefa->nome);
			}?>		
		<?}else{?>
			<p>
				Não existem tarefas cadastradas para este projeto.
			</p>
		<?}?>
		
		<?= anchor('tarefa/novo/'.$projeto->id, 'Nova Tarefa')?>
	</div>
</div>