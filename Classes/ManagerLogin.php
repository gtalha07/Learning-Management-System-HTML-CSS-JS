<?php

if(isset($_POST['Log']))
{
	
     include("./Account.php");
     include("./DBFacadeManager.php");
   
	$email = $_POST['mail'];
	$password = $_POST['psd'];

   $account = new Account($email, $password);
   $account->managerAccount();
  // $account->sendToDBF($account);
  // $db=new DBFacade();
  // $db->AdminLogIn($account);
  // $db->makeConnection();

}



?>