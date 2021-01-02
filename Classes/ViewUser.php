
<?php

if(isset($_POST['search']))
{
	
     include("./User.php");
     include("./DBFacade.php");
   
	$Email = $_POST['emailID'];

	$acc=new User($Email, " ", " ");
	$acc->viewUserAccount($Email);

}






?>