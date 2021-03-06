<?php

/**
 * Management Console for Contao Open Source CMS
 *
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    contao-management-console
 * @license    LGPL-3.0+
 * @filesource
 */

chdir(dirname(__FILE__));

define('COMACO_LOG', dirname(__FILE__) . '/' . basename(__FILE__, '.php') . '.log');
define('COMACO_LOG_LEVEL', 100);
define('COMACO_CONTAO_PATH', dirname(dirname(__FILE__)));
define('COMACO_RSA_LOCAL_PRIVATE_KEY', file_get_contents(
	'/path/to/contao-management-console/test/client.key'
));
define('COMACO_RSA_REMOTE_PUBLIC_KEY', file_get_contents(
	'/path/to/contao-management-console/test/server.pub'
));

require('/path/to/contao-management-console/vendor/autoload.php');
require('/path/to/contao-management-console/scripts/error_handler.php');
require('/path/to/contao-management-console/scripts/connect.php');
