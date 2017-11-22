<?php

class info
{
	private $dest = "";
	private $nbrPlaces = 0;
	private $ass = null;

	public function __construct()
	{
	}

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
		settype($ass , "integer");
		return $this->ass;
	}

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