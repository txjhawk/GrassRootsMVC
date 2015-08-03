<?php

namespace app\config;

/**
 * Class Configs
 *
 * @package grassrootsMVC\config
 */
class Configs
{
	const WEB_ROOT = "http://localhost:8000/sample-app/app/public";

	const HOME_URL = "http://localhost:8000/sample-app";

	public $dbArray        = array();
	public $frameworkArray = array();

	public function __construct()
	{

		$this->dbArray = $this->setDbParamsArray();

	}

	/**
	 * Change as needed for database connection.
	 * Returns our database connection array.
	 *
	 * Overwrite these in app/config that will need to created when using the framework.
	 *
	 * @return array
	 */
	public function setDbParamsArray()
	{

		$this->dbArray = array(
			"dbname"   => 'test',
			"user"     => 'root',
			"password" => 'root',
			"host"     => 'localhost',
			"driver"   => 'pdo_mysql'
		);

		return $this->dbArray;

	}

	/**
	 * Default framework settings these will need to be overwritten
	 * within the app/configs when using the framework.
	 *
	 * $this->frameworkArray['debug'] = Define true or false this will effect how Doctrine caches
	 *
	 * $this->frameworkArray['allowedUrlChars'] = this will be used in our router to sanitise what we want to allow
	 * in or URL.
	 *
	 * $this->frameworkArray['globalProfile'] = This isn't used just yet but it will be soon for something important.
	 *
	 * $this->frameworkArray['useLayout'] = This will be used when loading a view so we can tell our app to look in
	 * out layout directory within our view directory.
	 *
	 * $this->frameworkArray['devMode'] = This is set to true but will change upon production so certain things can be
	 * turned off that way we won't expose them in production.
	 *
	 * $this->frameworkArray['defaultController'] = This is the name of our default controller that will load for our
	 * home url and/or when our framework can't find one.
	 *
	 * $this->frameworkArray['defaultAction'] = This is the name of our default action/method that will be loaded if
	 * our framework can't find one or when we call the home URL.
	 *
	 * $this->frameworkArray['entities'] = This is the path to our entities for doctrine.
	 *
	 * @return array $this->frameworkArray
	 */
	public function frameworkSettings()
	{

		$this->frameworkArray = array(
			"debug"             => "on",
			"allowedUrlChars"   => "/[^A-z0-9\/\^]/",
			"globalProfile"     => TRUE,
			"useLayout"         => TRUE,
			"devMode"           => TRUE,
			"defaultController" => "Home",
			"defaultAction"     => "index",
			"entities"          => "app/entity"
		);

		return $this->frameworkArray;
	}

	/**
	 * Get HOME_URL constant so we have access to our home page.
	 *
	 * @return mixed
	 */
	public function setHomeUrl()
	{
		return self::HOME_URL;
	}

	/**
	 * Get WEB_ROOT constant so we have access to our public folder for loading our styles and js.
	 *
	 * @return mixed
	 */
	public function setWebRoot()
	{
		return self::WEB_ROOT;
	}

}