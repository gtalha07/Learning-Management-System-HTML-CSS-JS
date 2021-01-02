<?php


 // include("./Classes/Account.php");
  
class DBFacade
{
    
    function getConnection()
    {

        $con =  new mysqli("localhost","root","","learning_management_system");

       if($con == false)
       die ("\n  Database not connected successfully ...");
             
             return $con;

    }


    function AdminLogIn($account)
    {
         $mail=$account->getMail();
         $pwd=$account->getPassword();

         $conn = $this->getConnection();


       $query = " SELECT * FROM Account WHERE Email =  '$mail' ";
       $result = mysqli_query($conn,$query);

       if(mysqli_num_rows($result)!= 0 )
       {

           $row = mysqli_fetch_assoc($result);

           if($row['Password']== "$pwd")
           {


              header("location: ../admin.php");
                    

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

    function AddDept($dept)
    {

        $conn = $this->getConnection();

     //   $deptNo=$dept->getDeptNo();
        $deptName=$dept->getDeptName();
        $managerID=$dept->getManID();
        $manName=$dept->getManName();


      $query = " INSERT INTO dept (DeptName, ManagerID, ManagerName) 
      VALUES ('$deptName', '$managerID', '$manName')";
     
         if(mysqli_query($conn,$query))
            {

                       
                    
                     echo " <strong> Department is Added Successfully.. </strong>";
                       echo "<br>";
                      
                       echo " Department Name: " .$deptName;
                       echo "<br>";
                       echo " Department Manager ID: " . $managerID;
                       echo "<br>";
                      echo " Department Manager Name: " . $manName;
                       echo "<br>";
            }


                 else
            {
               echo " Department is not added Successfully..";

            }
                   
      


    }


      function AddUser($user)
    {

        $conn = $this->getConnection();

        $Email=$user->getMail();
        $Password=$user->getPassword();
        $Type=$user->getType();

      $query = " INSERT INTO Account VALUES ('$Email', '$Password', '$Type')";

            if(mysqli_query($conn,$query))
                {
                       echo " <strong> Account is Added Successfully.. </strong>";
                       echo "<br><br>";

                       echo " Email : " .$Email;
                       echo "<br>";
                       echo " Account Type : " .$Type;
                       echo "<br>";

                }


            else
            {
                echo " Account is not added Successfully..";

            }

    }



       function ViewUser($Email)
       {
                  $conn = $this->getConnection();

      $query = " SELECT * FROM Account WHERE Email =  '$Email' ";

      $result = mysqli_query($conn,$query);

       if(mysqli_num_rows($result) == 1 )
       {

           $row = mysqli_fetch_assoc($result);

            $acc=new User($row['Email'], $row['Password'], $row['Type']);
           
        

       }


       else
       {
            $row="NULL";
             $acc=$row;      
    

       }
        
          return $acc;

     }


       function viewAllUsers()
       {

         $conn = $this->getConnection();


        $query = " SELECT * FROM Account";
        $result = mysqli_query($conn,$query);

        $catalog=array();


if(mysqli_num_rows($result) > 0)
{
  

   while($row = mysqli_fetch_assoc($result))

   {
     

      $acc=new User($row['Email'], $row['Password'], $row['Type']);
      $catalog[] = $acc;
       

    }


}



else
{

    echo " No Accounts...";
}

         return $catalog;


       }

}
  




?>


