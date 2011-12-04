<?
$atts_links = array('class' => 'menuButton');
?>

<div id="dashboard">
	
	<p>
		<?= anchor('projeto/novo', 'Novo Projeto', $atts_links) ?>		
	</p>		
	<?if (isset($projetos)) {?>
		<div id="projetos">					
			<ul>
			<?foreach ($projetos as $projeto) {?>
				<li>
					<?= anchor('projeto/index/'.$projeto->id, $projeto->nome, $atts_links);?>
				</li>				
			<?}?>	
			</ul>
		</div>
	<?}else{?>
		<p>
			Sem projetos cadastrados, crie um novo e comece a organizar-se! 
		</p>				
	<?}?>
	
</div>
