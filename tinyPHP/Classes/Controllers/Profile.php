<?php namespace tinyPHP\Classes\Controllers;
/**
 *
 * Settings Controller
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

if ( ! defined('BASE_PATH') ) exit('No direct script access allowed');

use \tinyPHP\Classes\Libraries\Cookies as Auth;
class Profile extends \tinyPHP\Classes\Core\Controller {
	
	private $_auth;

	public function __construct() {
		parent::__construct();
		ob_start();
		
		$this->_auth = new Auth;
		
		if(!$this->_auth->isUserLoggedIn()) { redirect(BASE_URL); }
	}
	
	public function index() {
		$this->view->staticTitle = array('Profile');
		$this->view->profile = $this->model->profile();
		$this->view->render('header/index',true);
		$this->view->render('profile/index',true);
		$this->view->render('footer/index',true);
	}
	
	public function success() {
		$this->view->staticTitle = array('Profile Saved Successfully');
		$this->view->render('header/index',true);
		$this->view->render('profile/success',true);
		$this->view->render('footer/index',true);
	}
	
	public function save() {
		$data = array();
		$data['first_name'] = $_POST['first_name'];
		$data['last_name'] = $_POST['last_name'];
		$data['email'] = $_POST['email'];
		$data['facebook'] = $_POST['facebook'];
		$data['twitter'] = $_POST['twitter'];
		$data['googleplus'] = $_POST['googleplus'];
		$data['linkedin'] = $_POST['linkedin'];
		$data['password'] = $_POST['password'];
		$this->model->save($data);
	}
}