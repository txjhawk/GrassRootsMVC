<?php

namespace app\entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="tasks")
 */
class Tasks
{
	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Column(type="string")
	 */
	protected $task_name;

	/**
	 * @Column(type="string", columnDefinition="VARCHAR(500) NULL")
	 */
	protected $task_description;

	/**
	 * @Column(type="datetime")
	 */
	protected $task_created_date;

	/**
	 * @Column(type="datetime")
	 */
	protected $task_complete_date;

	/**
	 * @Column(type="string", columnDefinition="VARCHAR(30) NULL")
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