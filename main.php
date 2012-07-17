<?php
	require_once('includes/ucTmplsManager.php');
	
	$l = $_GET['lang'];
	if(!$l) $l = 'eng';
	
	$tmplm = ucTemplates();
	
	$cat = array(
		'hi' => 'Hola i benvinguts...', 
		'b' => 'pilota'
		);
		
	$esp = array(
		'hi' => 'Hola i bienvenidos...', 
		'b' => 'pelota'
		);
	
	$eng = array(
		'hi' => 'Hello and welcome...', 
		'b' => 'ball'
		);
		
	$larr  = array('cat' => $cat, 'esp' => $esp,'eng' => $eng);
	$tmplm->assign('langs',$larr);
	var_dump($l);
	$tmplm->assign('lang_sel', $l);
	var_dump($l);
	
	$tmplm->display('main.tpl');