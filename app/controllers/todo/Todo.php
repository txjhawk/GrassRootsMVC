<?php

namespace app\controllers\todo;

use grassrootsMVC\controllers\Controller;

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
		echo 'todo';
	}
}