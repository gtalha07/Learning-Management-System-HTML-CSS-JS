<?php


if(isset($_POST['view']))
{
	
    include("./User.php");
    include("./DBFacade.php");

    $acc=new User(" "," "," ");
    $acc->viewAllAccounts();


}





?>