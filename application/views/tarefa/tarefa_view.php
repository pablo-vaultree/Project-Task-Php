<?
$atts_links = array('class' => 'menuButton');
if ($tarefa->concluido == 'S') {
	$concluida = 'Concluída';
}else {
	$concluida = 'Não concluída';
}
?>
<div id='tarefa'>
	<fieldset>
		<legend>Informações da tarefa: <b><?=$tarefa->nome?></b></legend>		
		<p>
			Data: <b><?=$tarefa->data?></b>
		</p>
		
		<p>
			Projeto: <b><?=$projeto->nome?></b>
		</p>
		
		<p>
			Concluída: <b><?=$concluida;?></b>
		</p>
		
		<p>
			Previsão encerramento: <b><?=$tarefa->data_encerramento?></b>
		</p>
		
		<p>
			Descrição:<br />
			<p><b><?=$tarefa->descricao?><b/></b>
		</p>					
	</fieldset>	
	<p>		
		<?
		if ($tarefa->concluido == 'N') {
			echo anchor('tarefa/concluir/'.$tarefa->id, 'Concluir tarefa', $atts_links);	
		}		
		?>
		<?echo anchor('projeto/index/'.$projeto->id, 'Voltar para o projeto', $atts_links);?>
	</p>
</div>