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
            $preusername=$_POST['pre-username'];
            $updateusername=$_POST['upd-username'];
            $prepassword=$_POST['pre-password'];
            $updatepassword=$_POST['upd-password'];
            
            if ($preusername == "jnikumbh69@gmail.com" ||  $prepassword == "8520") {
                echo "<script>
                        alert('This email and password cannot be changed.');
                        window.location.href='http://localhost/website/login.php';
                      </script>";
                exit();
            }


            $sql="UPDATE `form` SET `email` = '$updateusername', `password` = '$updatepassword' WHERE `form`.`email` = '$preusername'";
            
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $a="<script>alert('The user is updatd.')</script>";
                echo $a;
                $b="<script>location.href='http://localhost/website/login.php'</script>";
                echo $b;

            }else{
                $a="<script>alert('Something went wrong check your email or password.')</script>";
                echo $a;
                $b="<script>location.href='http://localhost/website/login.php'</script>";
                echo $b;
            }
        }
    }
?>
