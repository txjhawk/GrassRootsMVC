<?php
namespace app\models;

use grassrootsMVC\models\Model;
use app\entity;

class User extends Model
{
    public $query;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUser()
    {
        $user = $this->em->find('app\entity\Users', 1);

        return $user;
    }

    public function setUserName($username)
    {

        return $username;
    }

}