<?php

if(isset($_POST['Log']))
{
	
     include("./Account.php");
     include("./DBFacade.php");
   
	$email = $_POST['mail'];
	$password = $_POST['psd'];

   $account = new Account($email, $password);
   $account->adminAccount();
  // $account->sendToDBF($account);
  // $db=new DBFacade();
   //$db->AdminLogIn($account);
  // $db->makeConnection();

}



?>