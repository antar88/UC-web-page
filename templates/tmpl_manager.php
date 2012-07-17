<?php
require_once('includes/log.php');

 class tmpl_manager {
	
	private $lang, $title, $type, $log;
	
	
	function __construct($l = 'eng', $ti='Undead Coders', $ty) {
		$this->log = uclog();
		$this->lang = $l;
		$this->title = $ti;
		$this->type = $ty; 
	}
	
	
	
	function paint() {
		
		if($this->ty) {
			if($this->ty == 'ini') {
				
				
			}
		}
		else $this->log->error("No s'especifica quina pagina volem pintar en el tmp_manager.");
	}
}  





