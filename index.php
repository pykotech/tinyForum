<?php
/**
 *
 * Site Root
 *  
 * PHP 5
 *
 * tinyForum(tm) : Simple & Lightweight Forum (http://tinyforum.us/site/index)
 * Copyright 2012, 7 Media Web Solutions, LLC (http://www.7mediaws.org/)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2012, 7 Media Web Solutions, LLC (http://www.7mediaws.org/)
 * @link http://tinyforum.us/site/index tinyForum(tm) Project
 * @since tinyForum(tm) v 0.1
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

define('INST_RUNSCRIPT', pathinfo(__FILE__, PATHINFO_BASENAME));
define('INST_BASEDIR',	 str_replace(INST_RUNSCRIPT, '', __FILE__));
define('INST_RUNFOLDER', 'installer/');
define('INST_RUNINSTALL', 'installer.php');
if (is_dir(INST_BASEDIR.INST_RUNFOLDER) && 
is_readable(INST_BASEDIR.INST_RUNFOLDER.INST_RUNINSTALL))
require(INST_BASEDIR.INST_RUNFOLDER.INST_RUNINSTALL);

/********************************************************************/

defined( 'DS' )					or define( 'DS', DIRECTORY_SEPARATOR );
defined( 'BASE_PATH' )			or define( 'BASE_PATH', __DIR__ . DS );
defined( 'APP_FOLDER' )			or define( 'APP_FOLDER', 'Forums' );
defined( 'SYS_PATH' )			or define( 'SYS_PATH', BASE_PATH . 'tinyPHP' . DS );
defined( 'APP_PATH' )			or define( 'APP_PATH', SYS_PATH . APP_FOLDER . DS );
defined( 'LOCALE_DIR' ) 		or define( 'LOCALE_DIR', SYS_PATH . 'Locale' );
defined( 'DEFAULT_LOCALE' )		or define( 'DEFAULT_LOCALE', '');
defined( 'ENCODING' )			or define( 'ENCODING', 'UTF-8');
defined( 'CURRENT_VERSION' )	or define( 'CURRENT_VERSION', '0.4');
defined( 'TFORUM_VERSION' )		or define( 'TFORUM_VERSION', '1.1');
require( SYS_PATH . 'Config/constants.php');
require( SYS_PATH . 'application.php');

$app = new \tinyPHP\Classes\Core\Bootstrap();