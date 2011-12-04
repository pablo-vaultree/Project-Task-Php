<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bem-vindo ao ProjectTask</title>

	<?=load_css('style.css');?>
</head>
<body>
	<div id="container">
		<div id="header">				
			<?if (isset($username)) {?>
				<div class="left">
					Bem vindo, <?=$username;?>.
				</div>		
				<div class="right">
					<?= anchor('login/logoff', 'Sair', $att = array('class' => 'sairLink')); ?>
				</div>		
			 <?}?>	 	
		</div>	 
		<div id="content">
