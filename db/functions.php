<?php  


function check_login($conn)
{
    {
        $Id = $_SESSION['id'];
        $query = "select * from users where id = '$Id' ";
  
            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result) > 0){
               $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }


    }
    
   //redirect to login

    header("Location: login.php");
    die;
      
}



