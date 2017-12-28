<?php
//this model is used to is used to remember the personal information of each persons
class person
{
	private $firstname ="";
	private $lastname = "";
	private $age = "";
	private $ID = -1;

	//Constructor
	public function __construct($firstname, $lastname, $age) 
	{
		$this->firstname = $firstname;
    	$this->lastname = $lastname;
		$this->age = $age;
    }

    //		Getters 		//

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

	public function GetID()
	{
		return $this->ID;
	}

    //		Setters 		//

    public function SetID($id)
    {
    	$this->ID = $id;
    }
}
?>