<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "web";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        echo "connection is not.".mysqli_connect_error();
    }else{

        if (isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $sql="SELECT `id` FROM `form` WHERE `email`='$email' AND `password`='$password';";
            $result=mysqli_query($conn,$sql);
            $row =mysqli_num_rows($result);
            if($row==1)
            {
                header("Location:homie.html");  
            }else{
                echo "<script>
                            alert('Login failed ! please checck your email or password.');
                            window.location.href = 'form.html';
                      </script>";
            }
        }
    }
?>
