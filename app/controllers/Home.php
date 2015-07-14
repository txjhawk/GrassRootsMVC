<?php

namespace app\controllers;

use app\models\User;
use grassrootsMVC\controllers\Controller;

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
        $user = new User();

        $current_user = $user->getUser();

        $data              = array();
        $data['title']     = 'GrassRoots MVC';
        $data['firstname'] = $current_user->getName();
        $data['message']   = 'Here is a message created in our Home controller';

        // Lets load our views
        $this->view->getView('header', $data, true);
        $this->view->getView('home', $data);
        $this->view->getView('footer', $data, true);

    }

}
