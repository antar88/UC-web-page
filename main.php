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
	$tmplm->assign('lang_sel', $l);
	
	$tmplm->display('main.tpl');