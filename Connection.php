<?php

class Monnection
{
    private $conn;

    function makeConnection()
    {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="learning_management_system";

    $this->conn=mysqli_connect($servername,$username,$password, $dbname);

    if( $this->conn == false)
     die ("\n  Database not connected successfully ...");
    else
     die ("\n  Database connected successfully ...");
    }


    function getConnection()
    {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="learning_management_system";

    $conn=mysqli_connect($servername,$username,$password, $dbname);

    if( $this->conn == false)
     die ("\n  Database not connected successfully ...");

       return $conn;


    }

}
 
   



?>