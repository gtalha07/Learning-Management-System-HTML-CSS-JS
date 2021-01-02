<?php

class Department
{
	private $deptNo;
	private $deptName;

	function __construct($m,$p)
	{
		$this->deptNo=$m;
		$this->deptName=$p;

	}

	function display()
	{
		echo "$this->deptNo";
		echo "$this->deptName";

	}


}
?>