<?php
  

     
class DepartmentManager
{
   
   
	private $ManID;
	private $ManName;
	//private $deptID;
      
	function __construct($m,$p)
	{
		$this->ManID=$m;
		$this->ManName=$p;
		//$this->deptID=$d;
		
      
	}


	function getManID()
	{
		return $this->ManID;

	}

	function getManName()
	{
		return $this->ManName;

	}

	


}
?>