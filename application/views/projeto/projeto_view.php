<?
$atts_links = array('class' => 'menuButton');
?>
<div id='projeto'>
	Informações do projeto: <b><?=$projeto->nome?></b>
	
	<p>
		Data: <b><?=$projeto->data?></b> 
	</p>
	
	<p>
		Previsão encerramento: <b><?=$projeto->data_encerramento?></b> 
	</p>
	
	<p>
		Observações:<br />
		<p><b><?=$projeto->observacao?></b></p>	 
	</p>	

	<div id='tarefas'>
		<p>
			<?= anchor('tarefa/novo/'.$projeto->id, 'Nova Tarefa', $atts_links)?>
		</p>
		
		<?if (isset($tarefas)) {?>
			<ul>
			<?foreach ($tarefas as $tarefa) {?>
				<li>
					<?echo anchor('tarefa/index/'.$tarefa->id, $tarefa->nome, $atts_links);?>
				</li>				
			<?}?>
			</ul>				
		<?}else{?>
			<p>
				Não existem tarefas cadastradas para este projeto.
			</p>
		<?}?>
				
	</div>
	
	<p>
		<?echo anchor('usuario/dashboard', 'Voltar para o dashboard', $atts_links); ?>
	</p>
</div>