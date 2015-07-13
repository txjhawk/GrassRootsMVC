<?php

namespace app\entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="user")
 */
class Users
{
	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Column(type="string", length=32, unique=true, nullable=false)
	 */
	protected $username;

	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $password;

	/**
	 * @Column(type="string", length=255, unique=true, nullable=false)
	 */
	protected $email;

	public function setUser($username, $password, $email)
	{
		$this->username = $username;
		$this->password = $password;
		$this->email    = $email;
	}

	public function getName(){
		return $this->username;
	}

}
