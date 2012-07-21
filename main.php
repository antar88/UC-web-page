<?php
	require_once('includes/ucTmplsManager.php');
	
	$l = $_GET['lang'];
	if(!$l) $l = 'eng';
	
	$tmplm = ucTemplates();
	
	$cat = array(
		'hi' => 'Hola i benvinguts...', 
		'uccomp' => 'Undead Coders són:'
		);
		
	$esp = array(
		'hi' => 'Hola i bienvenidos...', 
		'uccomp' => 'Undead Coders son:'
		);
	
	$eng = array(
		'desc' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis venenatis velit et metus. Duis lacinia leo in velit. Sed tristique. Sed id turpis malesuada nulla bibendum iaculis. In nec velit. Fusce augue diam, sollicitudin eu, porttitor vel, euismod vel, nisl. Aenean venenatis quam eu massa. Pellentesque non lorem non tortor placerat vulputate. Maecenas eleifend nibh ut lectus. Morbi eget eros. Sed luctus porta justo. Fusce eget est eu elit suscipit cursus. Duis a arcu et diam suscipit facilisis. Pellentesque lobortis libero et metus.", 
		'uccomp' => 'Undead Coders are:'
		);
		
	$larr  = array('cat' => $cat, 'esp' => $esp,'eng' => $eng);
	$tmplm->assign('langs',$larr);
	$tmplm->assign('lang_sel', $l);
	
	$tmplm->display('main.tpl');