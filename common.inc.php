<?php
	
require_once __DIR__ . '/../common.inc.php';

use Battis\HierarchicalSimpleCache;

$cache = new HierarchicalSimpleCache($sql, basename(__DIR__));