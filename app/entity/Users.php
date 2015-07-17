<?php

namespace app\entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class Users
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=32, unique=true, nullable=false)
	 */
	protected $user_name;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(30) NULL")
	 */
	protected $first_name;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(30) NULL")
	 */
	protected $last_name;


	/**
	 * @ORM\Column(type="string", length=64, nullable=false)
	 */
	protected $password;

	/**
	 * @ORM\Column(type="string", length=255, unique=true, nullable=false)
	 */
	protected $email;

	public function setUser($username, $password, $email)
	{
		$this->user_name = $username;
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
		return $this->username;
	}

	public function getId()
	{
		return $this->id;
	}

}
