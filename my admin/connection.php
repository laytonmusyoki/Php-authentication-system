<?php
if (isset($_POST['btn'])) {
    $name =$_POST['name'] ;
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    
    if (!empty($name)) {
    if(!empty($password)){
    if(!empty($re_password)){
     if($password==$re_password){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "youtube";
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if(mysqli_connect_error()){
            die('connect_error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO signup(name,username,password,re_password)values('$name','$username','$password','$re_password')";
            if($conn->query($sql)){
                header("location:signin.php");
                
                #echo "<script>alert('Account created successfully')</script>";
                
            }
            else{
                echo "error:" . $sql."</br>".$conn->error;
            }
            $conn->close();
        }
     }
  else{
                    header("location:signup.php?>error=passwords do not much");
  }
               
    }
               else{
                 header("location:signup.php?>error= Password is required");
                 exit();
               
    }
    }
    else {
        header("location:signup.php?>error=Email is required");
        exit();
            
            
    }
    }
    else{
        header("location:signup.php?>error=Name is required");
        exit();
            
        
        
    }
}
?>