<?php

class person
{
	

	public function __construct($last, $first, $age)
	{
		private $name = $last;
		private $fname = $first;
		private $age = $age;
	}

	public function GetName()
	{
		return $this->name;
	}

	public function GetFname()
	{
		return $this->fname;
	}

	public function GetAge()
	{
		return $this->age;
	}

}
	?>