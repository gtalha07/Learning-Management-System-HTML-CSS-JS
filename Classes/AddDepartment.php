

<?php

if(isset($_POST['AddDept']))
{
	
     include("./Department.php");
     include("./DBFacade.php");
   
	//$deptNo = $_POST['deptNo'];
	$deptName = $_POST['deptName'];
  $ManagerID = $_POST['deptManager'];
  $ManagerName = $_POST['deptMName'];

   //$Manager = new DepartmentManager($ManagerID,  $ManagerName);
   $dept = new Department($deptName, $ManagerID, $ManagerName);
  
    $dept->addNewDepartment();
  

}






?>