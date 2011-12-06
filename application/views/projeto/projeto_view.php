<?
$atts_links = array('class' => 'menuButton');
?>
<div id='projeto'>	
	Informações do projeto: <b><?=$projeto->nome?></b>
	
	<p>
		Data cadastro: <b><?=$projeto->data?></b> 
	</p>
	
	<p>
		Previsão encerramento: <b><?=$projeto->data_encerramento?></b> 
	</p>
	
	<p>
		Observações:<br />
		<p><b><?=$projeto->observacao?></b></p>	 
	</p>	

	<div id='tarefas'>	
		<?=$message?>	
		<fieldset>
			<legend>Tarefas</legend>				
			<?if (isset($tarefas) && !empty($tarefas)) {?>			
				<table>
				<?foreach ($tarefas as $tarefa) {?>
					<tr>
						<td>
							<?echo anchor('tarefa/excluir/'.$tarefa->id, 'X', $att = array('title' => 'Excluir tarefa'));?>
						</td>
						<td>
							<?echo anchor('tarefa/index/'.$tarefa->id, $tarefa->nome);?>
						</td>
					</tr>				
				<?}?>
				</table>					
			<?}else{?>
				<p>
					Não existem tarefas cadastradas para este projeto.
				</p>
			<?}?>
		</fieldset>						
	</div>
	
	<p>		
		<?= anchor('tarefa/novo/'.$projeto->id, 'Nova Tarefa', $atts_links)?>
		<?= anchor('projeto/excluir/'.$projeto->id, 'Excluir projeto', $atts_links)?>
		<?echo anchor('usuario/dashboard', 'Voltar para o dashboard', $atts_links); ?>
	</p>
</div>