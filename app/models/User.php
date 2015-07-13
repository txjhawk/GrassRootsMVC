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
		$user = array(
			'First Name' => 'Anthony',
			'Last Name'  => 'Allen',
			'Age'        => '31'
		);

		return $user;
	}

	public function setUserName($username)
	{

		$username = $this->em->find('app\entity\Users', 6);


		return $username;
	}

}