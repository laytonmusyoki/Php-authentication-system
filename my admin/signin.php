<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "youtube";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
?>
<!DOCTYPE html>
<html >
<head>
   
  <style>
    .section{
            padding: 50px 0;
            background: radial-gradient(#fff,#ffd6d6);
            height: 80vh;
         }
    .container{
       
        width: 300px;
        height: auto;
        border: 1px solid black;
         top: 15%;
        left: 50%;
        box-shadow:0 10px 20px 3px black;
        position: absolute;
        transform: translate(-50%,50%);
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
        transform: translateX(-110%);
    }
    input{
        width: 87%;
        height: 40px;
        left: 2%;
        background: #eee;
        border-radius: 5px;
        outline: none;
        border: 2px solid green;
        padding: 0 10px;
        position: relative;
        margin: auto;
        
    }

    .btn{
        width: 30%;
        font-weight: bold;
        color: black;
        height: 30px;
        left: 67%;
        position: relative;
        background-color:  rgb(95, 95, 173);
        border-radius: 5px;
        outline: none;
        border: none;
        font-size: 16px;
        transition: background 1.5s;
        
    }
    .btn:hover{
        background: #204969;
       
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
            padding: 10px 25px;
            margin-left: -90px;
            text-decoration: none;
            color: #444;
         }
         .ca:hover{
            text-decoration: underline;
         }
         
  </style>
</head>
<body>
   
<div class="section">
    <div class="container">
        <div class="form">
            <h1>Sign In</h1>
            <?php if(isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error'];?></p>
               <?php }?>
            <div class="input">
    <form method="POST">
      <?php if(isset($_GET['uname'])){?>
        <input type="text" placeholder="Enter username" requiredname="uname"
          value="<?php echo $_GET['uname'] ; ?>"><br><br>
      <?php } else{ ?>
      <input type="text" 
      placeholder="Enter username" 
      required
       name="uname" > 
      <?php } ?>
      <br><br>
      
<input type="password" placeholder="Enter password"name="password" required value=""><br><br>
<button type="submit"name="btns" class="btn" >Log in</button>

<a href="signup.php" class="ca">Create an account</a>
    </form>
</div>
    </div>
</div>

<?php
if (isset($_POST['btns'])) {
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = mysqli_query($conn, "SELECT * FROM `signup` WHERE username='$username'&&password='$password'");
    $num = mysqli_num_rows($sql);
    if ($num > 0) {
        session_start();
        $_SESSION['usernameId'] = $_POST['username'];
        header("location:home.php");
    } else {
        echo "<script>alert('invalid username or password')</script>";
        
    }
}
?>

</div>
    
</body>
</html>
