<?php
namespace app\controllers;

use grassrootsMVC\controllers\Controller;

/**
 * Class Products
 * @package controllers
 */
class Products extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        echo 'products page';

    }

    public function getProducts()
    {
        echo 'These are our products';
    }
}