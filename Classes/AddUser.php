

<?php

if(isset($_POST['adduser']))
{
	
     include("./User.php");
     include("./DBFacade.php");
   
	$Email = $_POST['emailID'];
	$Password = $_POST['secret'];
  $Type = $_POST['type'];

   $user = new User($Email, $Password,  $Type);
   $user->addUserAccount($user);
 

}






?>