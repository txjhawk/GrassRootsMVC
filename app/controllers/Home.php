<?php

namespace app\controllers;

use app\models\User;
use grassrootsMVC\controllers\Controller;
use app\config\Configs;
use app\controllers\todo;
use app\entity\Tasks;
/**
 * Class Home
 * @package controllers
 */
class Home extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$user         = new User();
		$config       = new Configs();
		$current_user = $user->getUser();

		$todo = new todo\Todo();

		$task = $user->getTask();



		$data              = array();
		$data['title']     = 'Sample TODO App';
		$data['firstname'] = $current_user->getName();
		$data['task'] = $task->getTaskName();

		$data['message']   = 'Here is a message created in our Home controller';
		$data['root']      = $config->getWebRoot();
		// Lets load our views
		$this->view->getView('header', $data, TRUE);
		$this->view->getView('home', $data);
		$this->view->getView('footer', $data, TRUE);

	}

}
