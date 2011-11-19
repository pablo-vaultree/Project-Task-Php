<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database');
$autoload['helper'] = array('url', 'assets_helper', 'form', 'html');

$autoload['config'] = array();

$autoload['language'] = array();


/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('model1', 'model2');
|
*/

$autoload['model'] = array('usuario_model', 'projeto_model', 'tarefa_model');


/* End of file autoload.php */
/* Location: ./application/config/autoload.php */