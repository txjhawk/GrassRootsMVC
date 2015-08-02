<?php

namespace app\controllers\todo;

use GrassRootsMVC\Routing\Controller;
use GrassRootsMVC\Configs\Config;

/**
 * Class Todo
 * @package app\controllers\todo
 */
class Todo extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        $config       = new Config();

		$data['todo'] = 'todo';
        $data['root']      = $config->getWebRoot();
        $data['home_url']  = $config->getHomeURL();

        $this->view->getView('header', $data, true);
        $this->view->getView('todo', $data, true);
        $this->view->getView('footer', $data, true);
	}
}