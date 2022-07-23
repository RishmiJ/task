


<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        
        <style type="text/css">
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
                     color: #79616f;
                     text-transform: uppercase;
                     font-weight: 700;
                 }
            
                  .box p a{
                      text-decoration: none;
                      color: #fff;
                      font-size: 20px;
                      
                 }
                 .box input[type="text"],.box input[type="password"]
                 {
                     border: 0;
                     background:#fff;
                     display: block;
                     margin: 20px auto;
                     text-align: center;
                     border: 3px solid #79616f;
                     padding: 14px 10px;
                     width: 220px;
                     outline: none; 
                     color: #79616f;
                     border-radius: 30px;
                     transition: 0.25px;
                 }
                 .box input[type="text"]:focus,.box input[type="password"]:focus
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
                     border: 3px solid  #79616f;
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
                 
                 btnnew
                 {
                width: 400px;
                height: 50px; 
                 }
                  .box a
                 {
                text-decoration: none;
                color: #fff;
                 }
 
      </style>
        
        
                <form class="box" method="post" action="./db/login.php">              
                    <div style="font-size: 30px;margin: 10px; color: #79616f;">LOGIN</div>
                
                <br>
                <input type="text" name="User_name" placeholder="Enter Username" id="name" required>
                
                <input type="password" name="password" placeholder="Enter Password" id="password" required>
                
                <input id="button" type="submit" value="Login"><br>
                    
         
		
                
       
                <p>Don't have an account?</p>
                
                <a href="signup.php">Click to SIGNUP</a><br><br>
        </form>
</body>
</html>
         