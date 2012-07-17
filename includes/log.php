<?php

require_once('includes/log4php/Logger.php');


function uclog() {
	Logger::configure('etc/config_log.xml');
	return Logger::getLogger('ucLogger');
}

