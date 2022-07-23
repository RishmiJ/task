<?php  


session_start();

include("connection.php");
include("functions.php");

//somthing was posted
$User_name = $_POST['name'];
$Telephone = $_POST['phone'];
$Email    = $_POST['email'];
$Password  = $_POST['password'];

//save to database
$query = "insert into users (name,phone,email,password) values ('$User_name','$Telephone','$Email','$Password')";

$result = mysqli_query($conn, $query);
    
if(!$result){
    echo mysqli_error($conn);
} 
else
{

    // login
    $query = "select * from users where User_name = '$User_name' AND Password = '$Password' ";
    $result = mysqli_query($conn, $query);
    $user_data = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $user_data['id'] ;
    
    header("Location: ../home.php");
}
            


?>