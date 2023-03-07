<?php
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "youtube";
$username = "";
$password = "";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
?>
<!DOCTYPE html>
<html >
<head>

  <style>
    .container{
        width: 300px;
        height: auto;
        border: 1px solid black;
        top: 9%;
        left: 50%;
        box-shadow:0 10px 20px 3px black;
        position: absolute;
        transform: translate(-50%,50%);
    }
    h1{
        text-align: center;
        font-size: 30px;
        color: blue;
    }
    h1::after{
        content: "";
        width: 70px;
        height: 5px;
        border-radius: 3px;
        background: tomato;
        position: absolute;
        margin-top: 37px;
        transform: translateX(-120%);
    }
    form input{
        width: 89%;
        height: 30px;
        left: 2%;
        padding:0 10px;
        background: #eee;
        border-radius: 5px;
        outline: none;
        border: none;
        position: relative;
        
    }
    
    
    .btn{
        width: 30%;
        height: 30px;
        left: 67%;
        position: relative;
        background-color: tomato;
        border-radius: 5px;
        outline: none;
        border: none;
        font-weight: bold;
        font-size: 16px;
        transition: background 1.5s;
    }
    .btn:hover{
        background: green;
    }
    .error{
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 90%;
            height: 20px;
            border-radius: 5px;
            margin: 20px auto;
         }
         .ca{
            font-size: 14px;
            display: inline-block;
            padding: 10px;
            margin-left: -90px;
            text-decoration: none;
            color: #444;
         }
         .ca:hover{
            text-decoration: underline;
         }
         .section{
            padding: 50px 0;
            background: radial-gradient(#fff,#ffd6d6);
            height: 80vh;
         }
         @media only screen and(max-width:800px){
        .container{
       width: 230px;
   }
   input{
        width: 75%;
    }
    .ca{
            padding: 10px 25px;
           
         }
    }
  </style>
</head>
<body>
    <div class="section">
    <div class="container">
        <div class="form">
            <h1>Sign Up</h1>
            
            <div class="input">
                    <form action="connection.php" method="POST">
                        <?php if(isset($_GET['error'])){ ?>
                            <p class="error"><?php echo $_GET['error'];?></p>
                        <?php }?>

                        <input type="text" placeholder="Name" name="name" value=""><br><br>
                        <input type="text" placeholder="Username" name="uname" value=""><br><br>
                        <input type="password" placeholder="Password" name="password" value=""><br><br>
                        <input type="password" placeholder="Confirm Password" name="re_password"value="" ><br><br>
                        <button type="submit" name="btn" class="btn" >Sign Up</button>
                        <a href="signin.php" class="ca">Already have an account?</a>
                    </form>
                </div>
    </div>
</div>
</div>

<?php
include("login.php");
?>
</body>
</html>
