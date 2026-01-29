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


            if($email == "jnikumbh69@gmail.com")
            {
                echo "<script>
                            alert('This record cannot be deleted!');
                            window.location.href='http://localhost/website/login.php';
                      </script>";
                      exit();
            }

            $sql="DELETE FROM `form` WHERE `form`.`email` = '$email'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $a="<script>alert('The user with $email email is deleted.')</script>";
                echo $a;
                $b="<script>location.href='http://localhost/website/login.php'</script>";
                echo $b;

            }else{
                $a="<script>alert('Something went wrong check your email.')</script>";
                echo $a;
                $b="<script>location.href='http://localhost/website/login.php'</script>";
                echo $b;
            }
        }
    }
?>
