<div id="header">
	<p>
		Bem vindo, <?=$usuario?>.
	</p>
	
	<div>
		<?= anchor('login/logoff', 'Sair') ?>
	</div>
</div>


<div id="dashboard">
		
	<?if (isset($projetos)) {?>
		<div id="projetos">					
			<?foreach ($projetos as $projeto) {
				echo anchor('projeto/index/'.$projeto->id, $projeto->nome);
			}?>	
		</div>
	<?}else{?>
		<p>
			Sem projetos? <?= anchor('projeto/novo', 'Novo Projeto') ?>
		</p>				
	<?}?>
		
</div>
