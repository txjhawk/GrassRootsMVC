<?php

namespace app\entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tasks")
 */
class Tasks
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $task_name;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(500) NULL")
	 */
	protected $task_description;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $task_created_date;

	/**
	 * @ORM\Column(type="datetime")
	 */
	protected $task_complete_date;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(30) NULL")
	 */
	protected $task_owner;

	public function setTaskName($taskName)
	{
		$this->task_name = $taskName;
	}

	public function setTaskDescription($taskDescription)
	{
		$this->task_description = $taskDescription;
	}

	public function setTaskCreateTime($taskCreatedDate)
	{
		$this->task_created_date = $taskCreatedDate;
	}

	public function setTaskCompleteDate($taskCompletedDate)
	{
		$this->task_complete_date = $taskCompletedDate;
	}

	public function setTaskOwner($taskOwner)
	{
		$this->task_owner = $taskOwner;
	}

	public function getTaskName()
	{
		return $this->task_name;
	}

	public function getTaskOwner()
	{
		return $this->task_owner;
	}


}