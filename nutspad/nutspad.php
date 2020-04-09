<?php

# ( SOSNUTS.2 ) private area path / chemin de la zone privée
if (!defined('_DIR_RESTREINT_ABS')) {
	define('_DIR_RESTREINT_ABS', 'area/private-area-path/'); # directory containing the private area / répertoire contenant la zone privée (private-area-path/)
	}
	include_once _DIR_RESTREINT_ABS.'private-area.php'; # file call for private zone / appel du fichier pour la zone privée (private-area.php)
	
# ( SOSNUTS.3 ) public area path / chemin de la zone publique
if (!defined('_DIR_RESTREINT_ABS')) {
	define('_DIR_RESTREINT_ABS', 'area/public-area-path/'); # directory containing the public and public area / répertoire contenant la zone publique (public-area-path/)
	}
	include_once _DIR_RESTREINT_ABS.'public-area.php'; # file call for public zone / appel du fichier pour la zone publique (public-area.php)