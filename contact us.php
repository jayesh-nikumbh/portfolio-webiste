<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    $servername="localhost";
    $usernmae="root";
    $password="";
    $database="web";

    $conn=mysqli_connect($servername,$usernmae,$password,$database);
    if(!$conn)
    {
        echo "Error : ".mysqli_connect_error();
    }
    else{
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];

            $sql="INSERT INTO `mess` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                echo "<script>let a=alert('message sended sucessesfully.')</script>";
            }
            else{
                echo "<script>alert('message not sended.')</script>";
                
            }
        }
    }
?>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #d0d0ff;
        }
        ul{
            list-style: none;
            display: flex;
            flex-direction: row;
            margin-left: 800px;
            gap: 60px;
        }
        .navbar{
            background-color: #712cf9;
            padding: 8px;
            
        }
        a{
            margin-top: 10px;
            color: white;
            text-decoration: none;
            font-size: 25px;
            font-family:var(--bs-body-font-family);            
            font-weight: bold;
            padding: 10px;
            border-radius: 15px;
            
        }
        a:hover{
            color: #712cf9;
            background-color: white;
            transition: 0.5s;
        }
        img{
            height: 100px;
            position: absolute;
            background-repeat: no-repeat;
            background-size: contain;
            margin-left: -800px;
            border: 5px solid orange;
            border-radius: 10px;
        }
        .container{
            display: grid;
            align-items: center;
            justify-content: center;
            border: 2px solid  white;
            height: 800px;
        }
        h2{
            display: block;
            margin-top: -10px;
            font-size: 50px;
            color: white;
            margin-left: 400px;
        }
        h3{
            font-size: 50px;
            color: white;
        }
        .contact{
            display: flex;
            flex-direction: column;
            padding: 20px;
            height: 500px;
            width: 500px;
            margin-top: -100px;
            margin-left: -100px;
        }
        .contactinfo{
            display: flex;
            flex-direction: column;
            padding: 20px;
            height: 400px;
            width: 700px;
            margin-top: -800px;
            margin-left: 600px;
            padding-left: 10px;
            margin-right: -150px;
        }
        .inputs{
            border: none;
            height: 40px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-left: 10px;
        }
        textarea{
            border: none;
            height: 60px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-left: 10px;
            padding-top: 10px;
            resize: none;
        }
        #button{
            color: white;
            background-color:#712cf9;
            height: 50px;
            width: 200px;
            border: none;
            border-radius: 10px;
            margin-top: 30px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            transition: 0.2s ease;
            font-size: 15px;
            cursor: pointer;
        }
        #button:hover{
            background-color:#712cf9;
            font-size: 17px;
        }
        .inputs,textarea::placeholder{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        p{
            margin-top: 0px;
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .inputs:focus,textarea:focus{
            outline: none;
            box-shadow: 0 0 8px #bbb;
        }
        i{
            color:#712cf9;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        
        <ul>
            <img src="jc.jpeg">
            <li><a href="homie.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="contact us.php">Contact us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Follow us.html">Follow us</a></li>
        </ul>
    </div>
    <div class="container">
    <h2>Contact Us</h2>
    <form action="contact us.php" method="post">
    <div class="contact">
        <h3>Send us a messaage</h2>
        <input type="text" name="name" id="name"  class="inputs" placeholder="Your Name" required><br>
        <input type="email" name="email" id="email" class="inputs" placeholder="Your Email" required><br>
        <textarea name="message" id="measse" placeholder="Your messaage" required></textarea>
        <input type="submit" name="submit" id="button" value="Send Meassge">
    </div>
    </form>
    <div class="contactinfo">
        <h3>Contact Information</h3>
        <p><i class="fas fa-phone"></i>+91 7821060064</p><br>
        <p><i class="fas fa-envelope"></i>jnikumbh69@gmail.com</p><br>
        <p><i class="fas fa-map-marker-alt"></i>At. Nhave Post. Tarwade Tal. Chalisgaon Dist. Jalgaon.</p><br>
    </div>
    </div>
</body>
</html>