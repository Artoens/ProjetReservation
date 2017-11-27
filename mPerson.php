<?php

class person
{
	private $firstname;
	private $lastname;
	private $age;

	public function __construct($firstname, $lastname, $age) 
	{
		$this->firstname = $firstname;
    	$this->lastname = $lastname;
		$this->age = $age;
    }

	public function GetFirstname()
	{
		return $this->firstname;
	}

	public function GetLastname()
	{
		return $this->lastname;
	}

	public function GetAge()
	{

		return $this->age;
	}

}
?>