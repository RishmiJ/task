



<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
    </head>
    <body>
        <div>
        <?php
            if(isset($_POST['create'])){
                echo 'User Submitted';
            }
            
        ?>
        
        </div>
        
        
         
        
        <style>
                body{
                     margin: 0;
                     padding: 0;
                     font-family: monospace;
                     background-image: url(images/img-3.jpg);
                     background-size: cover;
                 }
                 .box{
                     width: 300px;
                     padding: 30px;
                     position: absolute;
                     top: 50%;
                     left: 50%;
                     transform: translate(-50%,-50%);
                     background: linear-gradient(rgba(192,192,192,0.5),#a5678e);
                     text-align: center;
                     border-radius: 20px;
    
                 }
                 .box h1{
                     color: #fff;
                     text-transform: uppercase;
                     font-weight: 700;
                 }
                 .box input[type="text"],.box input[type="password"],.box input[type="email"],.box input[type="text"]
                 {
                     border: 0;
                     background: #fff;
                     display: block;
                     margin: 20px auto;
                     text-align: center;
                     border: 3px solid #79616f;
                     padding: 14px 10px;
                     width: 220px;
                     outline: none; 
                     color: #017572;
                     border-radius: 30px;
                     transition: 0.25px;
                 }
                 .box input[type="text"]:focus,.box  input[type="password"]:focus,.box input[type="email"]:focus,.box input[type="text"]:focus
                 {
                     width: 270px;
                     border-color: #79616f;
    
                 }
                 .box input[type="submit"]
                 {
                     border: 0;
                     background:#fff;
                     display: block;
                     margin: 20px auto;
                     text-align: center;
                     border: 3px solid #79616f;
                     padding: 14px 35px;
                     outline: none;
                     color: #79616f;
                     border-radius: 30px;
                     transition: 0.25px; 
                     cursor: pointer;   
                 }
                 .box input[type="submit"]:hover
                 {
                     background: #c9bbcb;
                 }
                 .box a
                 {
                text-decoration: none;
                color: #fff;
                 }
 
 
      </style>
        
        



 
        
             <form class="box" method="post" action="./db/signup.php">          
             <div style="font-size: 30px;margin: 10px; color: #79616f;">SIGNUP</div>   
                
             
                <input type="text" name="User_name" placeholder="Enter Username" id="username" required   >
                 
                 <input type="text" name="Telephone"
                        placeholder="Telephone" id="phone" required pattern="[0-9]{1}[0-9]{9}">
                
                 <input type="email" name="Email" placeholder="Enter Email" id="email" required>
                
                 
                <input type="password" name="Password" placeholder="Enter Password" id="password" required><br>
                 
                <input id="button" type="submit" value="Signup"><br>
                
                <p ; color: #fff>Have an account?</p>
                
                <a href="login.php">Click to LOGIN</a><br><br>
        </form>
    </body>
</html>
