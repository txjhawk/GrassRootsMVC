<?php
/**
 * Author: Anthony Allen
 */
namespace app\controllers;
use app\models\User;
use grassrootsMVC\controllers\Controller;

/**
 * Class Home
 * @package controllers
 */
class Home extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$user = new User();

		$current_user = $user->getUser();

		$test = $user->setUserName('');
		foreach($test as $k => $v){
			echo 'Testing'.$k . ' ' . $v;
		}
		$data              = array();
		$data[ 'title' ]   = 'GrassRoots MVC';
		$data['firstname'] = $current_user['First Name'];
		$data[ 'message' ] = 'Here is a message created in our Home controller';
		$data['user'] = $test->getName();

		// Lets load our views
		$this->view->getView( 'header', $data, TRUE );
		$this->view->getView( 'home', $data );
		$this->view->getView( 'footer', $data, TRUE );

	}

}
