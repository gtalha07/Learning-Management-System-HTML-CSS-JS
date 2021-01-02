<?php
  
 
     
class User
{


	private $email;
	private $password;
	private $type;
      
	function __construct($m,$p,$t)
	{
		$this->email=$m;
		$this->password=$p;
		$this->type=$t;

	}


	function getMail()
	{
		return $this->email;

	}

	function getPassword()
	{
		return $this->password;

	}

	function getType()
	{
		return $this->type;

	}


	function addUserAccount($user)
	{

		 $db=new DBFacade();
   		 $db->AddUser($user);
	}

	function viewUserAccount($m)
	{
		 $info=new User($m, " ", " ");
		 $db=new DBFacade();
         $info=$db->ViewUser($m);
    

         if($info!="NULL")
        { 
          echo " Email : " .$info->getMail();
          echo "<br>";
		 echo " Account Type : " .$info->getType();
         echo "<br>";
        }

        else
        {
        	echo "No Account with this Email.";
        }


	}

	function viewAllAccounts()
	{
		 $db=new DBFacade();
		 $accounts=$db->viewAllUsers();

	
         

           echo " <center> <h2> All User Accounts </h2> <br><br>";

          echo "<table>
       <tr>
           <th>Email</th>
           <th>     </th>
           <th>Account Type</th>
           
           

       </tr> ";

       	  $info=new User(" ", " ", " ");

   		 foreach ($accounts as $info)
   		  {
   		 	 echo "   <tr> ";

     	 	 	echo "<td>" .$info->getMail() . "</td>";
     	 	 	echo "<td>"       ."</td>";
       	  		echo "<td>" .$info->getType() . "</td>";
      
  			  echo " </tr> ";    
   		  }



   		   echo " </table>";
	}

}
?>