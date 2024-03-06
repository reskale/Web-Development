
<?php
$host="localhost";
$user="root";
$password="";
$db="travelopedia"





mysqli_connect($host,$user,$password);
mysql_select_db($db);
    if(isset($_POST['username']))
    {
        $uname=$_post['username'];
        $password=$_post['password']
        $sql="select* from loginform where user='".$name."' AND Pass='".$password."' limit 1";
        $result=mysqli_query($sql);
        if(mysqli_num_rows($result)==1)
        {
            echo" you have logged in successfully";
            exit();

        }else{
            echo"your password or userame is incorrect";
        }


    }


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div style = "width:300px; border: solid 1px #333333; ">
       <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
           
       <div style = "margin:30px">
          
          <form action = "login2.php" method = "post">
             <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
             <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
             <input type = "submit" value = " Submit "/><br />
          </form>
          
          <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
               
       </div>
           
    </div>
       
        
    </body>
    </html>



  