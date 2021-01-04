

<?php

session_start();

include("./Department.php");
  
  
class DBFacadeManager
{
    
    function getConnection()
    {

        $con =  new mysqli("localhost","root","","learning_management_system");

       if($con == false)
       die ("\n  Database not connected successfully ...");
             
             return $con;

    }


    function ManagerLogIn($account)
    {
         $mail=$account->getMail();
         $pwd=$account->getPassword();

         $conn = $this->getConnection();


       $query = " SELECT * FROM Account WHERE Email =  '$mail'AND Type='Department Manager' ";
       $result = mysqli_query($conn,$query);

       if(mysqli_num_rows($result)!= 0 )
       {

           $row = mysqli_fetch_assoc($result);

           if($row['Password']== "$pwd")
           {
              $query2 = " SELECT * FROM Dept WHERE ManagerID =  '$mail' ";
              $res = mysqli_query($conn,$query2);

              $row = mysqli_fetch_assoc($res);

               $manager = new Department($row['DeptName'], $row['ManagerID'], $row['ManagerName']);
              // $manager->Display();

               $name=$manager->getDeptName();
             
            

               $_SESSION['manager'] = serialize($name);
            
            
             header("location: ../department.php");
                    

           }


           else
           {
                 echo "Incorrect Password.........!!<br>";

           }


       }


       else
       {
          echo "Invalid Account.........!!<br>";
       }
        
    }

   

}
  




?>


