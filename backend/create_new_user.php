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

            $sql="INSERT INTO `form` (`email`, `password`) VALUES ('$email', '$password')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                $a="<script>alert('New user is created.')</script>";
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
