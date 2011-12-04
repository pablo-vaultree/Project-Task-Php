<?
$atts_links = array('class' => 'menuButton');
?>
<h3>
	Dashboard
</h3>
<div id="dashboard">	
	<?=$message?>
	<p>
		<?= anchor('projeto/novo', 'Novo Projeto', $atts_links) ?>		
	</p>		
	
	<div id='projetos'>	
		<?=$message?>	
		<fieldset>
			<legend>Seus projetos</legend>				
			<?if (isset($projetos) && !empty($projetos)) {?>			
				<table>
				<?foreach ($projetos as $projeto) {?>
					<tr>						
						<td>
							<?echo anchor('projeto/index/'.$projeto->id, $projeto->nome);?>
						</td>
						<td>
							<?= $projeto->data_encerramento;?>
						</td>
					</tr>				
				<?}?>
				</table>					
			<?}else{?>
				<p>
					Sem projetos cadastrados, crie um novo e comece a organizar-se! 
				</p>
			<?}?>
		</fieldset>						
	</div>	
</div>
