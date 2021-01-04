<?php
  
//    include("./DepartManager.php");


     
class Department
{
   
   
	//private $deptNo;
	private $deptName;
	private $deptManagerID;
	private $ManName;

	function __construct($p, $d, $m)
	{
		//$this->deptNo=$m;
		$this->deptName=$p;
		$this->deptManagerID=$d;
		$this->ManName=$m;
		
	}


/*	function getDeptNo()
	{
		return $this->deptNo;

	} */

	function getDeptName()
	{
		return $this->deptName;

	}

	function getManID()
	{
		return $this->deptManagerID;

	}

	function getManName()
	{
		return $this->ManName;

	}

	function Display()
	{
		echo $this->deptName;
		echo "<br>";
		echo $this->deptManagerID;
		echo "<br>";
		echo $this->ManName;

	}

	function addNewDepartment()
	{
           $db=new DBFacade();
           $db->AddDept($this);

	}


}
?>