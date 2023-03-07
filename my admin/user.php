<?php
 
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


   if(!empty($name)){
    if(!empty($email)){
        if(!empty($password)){


                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "account";

                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

                if(mysqli_connect_error()){
                    die('Connect Error(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
                }
                else{
                    $sql = "INSERT INTO login (name,email,password)values('$name','$email','$password')";
                    if($conn->query($sql)){
                        echo "New record is inserted successfully";
                    }
                    else{
                        echo "Error:" . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
        }
        else{
                header("location:signup.html?>error= password should not be empty");
                exit();
        }
    }
    else{
            echo "email should not be empty";
            die();
    }
   }
   else{
        echo "name should not be empty";
        die();
   }
}
?>
