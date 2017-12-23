<?php

class person
{
	private $firstname ="";
	private $lastname = "";
	private $age = "";

	//Constructor
	public function __construct($firstname, $lastname, $age) 
	{
		$this->firstname = $firstname;
    	$this->lastname = $lastname;
		$this->age = $age;
    }

    //		Getters 	//

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