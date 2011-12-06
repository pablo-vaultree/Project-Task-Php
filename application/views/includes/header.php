<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bem-vindo ao ProjectTask</title>

	<?=load_css('style.css');?>
	<?=load_css('ui-lightness/jquery-ui-1.8.16.custom.css');?>
	<?=load_js('jquery-1.7.1.min.js');?>
	<?=load_js('jquery-ui-1.8.16.custom.min.js');?>
</head>
<body>
	<div id="container">
		<div id="header">				
			<?if (isset($username) && !empty($username)) {?>
				<div class="left">
					Bem vindo, <?=$username;?>.
				</div>		
				<div class="right">
					<?= anchor('login/logoff', 'Sair', $att = array('class' => 'sairLink')); ?>
				</div>		
			 <?}?>	 	
		</div>	 
		<div id="content">
