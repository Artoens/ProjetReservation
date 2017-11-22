<?php

class person
{
	private $name = "";
	private $fname = "";
	private $age = 0;

	public function __construct()
	{
	}

	public function GetName()
	{
		return $this->Name;
	}

	public function GetFname()
	{
		return $this->fname;
	}

	public function GetAge()
	{
		return $this->age;
	}

	public function SetName($last)
	{
		$this->name = $last;
	}

	public function Set($first)
	{
		$this->fname = $first;
	}

	public function SetAge($age)
	{
		$this->age = $age;
	}
}
	?>