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
	protected $user_name;

	/**
	 * @Column(type="string", columnDefinition="VARCHAR(30) NULL")
	 */
	protected $first_name;

	/**
	 * @Column(type="string", columnDefinition="VARCHAR(30) NULL")
	 */
	protected $last_name;


	/**
	 * @Column(type="string", length=64, nullable=false)
	 */
	protected $password;

	/**
	 * @Column(type="string", length=255, unique=true, nullable=false)
	 */
	protected $email;

	public function setUser($user_name, $password, $email)
	{
		$this->user_name = $user_name;
		$this->password  = $password;
		$this->email     = $email;
	}

	public function setName($first_name, $last_name)
	{
		$this->first_name = $first_name;
		$this->last_name  = $last_name;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getName()
	{
		return $this->user_name;
	}

	public function getId()
	{
		return $this->id;
	}

}
