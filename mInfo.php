<?php

class info
{
	private $dest = "";
	private $nbrPlaces = "";
	private $ass = false;

	//Constructor
	public function __construct()
	{
	}

	//======================//
    //		Getters 		//
    //======================//

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

	//======================//
    //		Setters 		//
    //======================//

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
}
	?>