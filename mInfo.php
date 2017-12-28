<?php
//this model is used to is used to remember the general information of the reservation
class info
{
	private $dest = "";
	private $nbrPlaces = "";
	private $ass = false;
	private $edit = false;
	private $ID = -1;

	//Constructor
	public function __construct()
	{
	}

    //		Getters 		//

	public function GetDestination()
	{
		return $this->dest;
	}

	public function GetPlaces()
	{
		return $this->nbrPlaces;
	}

	public function GetAssurance()
	{
		return $this->ass;
	}

	public function GetEdit()
	{
		return $this->edit;
	}

	public function GetID()
	{
		return $this->ID;
	}

    //		Setters 		//

	public function SetDestination($dst)
	{
		$this->dest = $dst;
	}

	public function SetPlaces($nbrP)
	{
		$this->nbrPlaces = $nbrP;
	}

	public function SetAssurance($assu)
	{
		$this->ass = $assu;
	}

	public function SetEdit($ed)
	{
		$this->edit = $ed;
	}

	public function SetID($id)
    {
    	$this->ID = $id;
    }

}
?>