<?php  


session_start();

include("connection.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(isset($_POST['name']) || isset($_POST['password']))
    {
    //somthing was posted
     $User_name = $_POST['name'];
     $Password  = $_POST['password'];
    
        if(!empty($User_name) && !empty($Password) && !is_numeric($User_name))
         {
        
        //read from database
    
        $query = "select * from users where User_name = '$User_name' AND Password = '$Password' ";
         
                
        $result = mysqli_query($conn, $query);
    
        
        echo mysqli_error($conn);
        
        }
       
        {
            header("Location: home.php");
            die;
        }
    }
    
    
    

}

?>