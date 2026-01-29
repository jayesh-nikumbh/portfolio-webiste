<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
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
            margin-top: -160px;
            background-color: #712cf9;
            padding: 8px;
            border-bottom: 2px solid white;
            position:fixed;
            z-index: 1;
        }
        a{
            margin-top: 10px;
            color: white;
            text-decoration: none;
            font-size: 25px;
            font-family:var(--bs-body-font-family);            ;
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
            height: 420px;
            width: 420px;
            border: 2px solid white;
            display: grid;
            align-items: center;
            justify-content: center;
            margin-left: 650px;
            margin-top: 160px;
            background-color: #d0d0ff;
            border-radius: 20px;
        }
        .button{
            color: white;
            background-color:#712cf9;
            height: 55px;
            width: 200px;
            border: none;
            border-radius: 12px;
            margin-top: 30px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            transition: 0.6s;
            font-size: 20px;
            cursor: pointer;
            border: 2px solid white;
        }
        .button:hover{
            background-color:#712cf9;
            font-size: 25px;
        }
        h2{
            
            position: relative;
            margin-top: -15px;
            font-size: 40px;
            color: white;
        }
        .inputs{
            
            border: none;
            height: 25px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-left: 10px;
            border: 2px solid white;
            border-radius: 8px;
        }
        label{
            font-weight: bolder;
            color: white;
            font-size: 23px;
        }
        .box{
            display: grid;
            justify-content:center;
            align-items:center;
            height: 400px;
            width: 1200px;
            border: 2px solid white;
            border-radius:20px;
            background-color: #d0d0ff;
            margin-left: 250px;
            padding: 10px;
        }
        .table{
            width: auto;
            table-layout:fixed;
            border-collapse:separate;
            border-spacing:20px;
            position: relative;
            margin-left:20px;
            font-size: 40px;
            color: white;
        }
        td{
            border-bottom: 1px solid white;
            padding-left:100px;
            padding-right:100px;
            font-size: 30px;
            color: white;
        }
        a{
            text-decoration:none;
        }
        #delete-user{
            
            height: 320px;
            width: 420px;
            border: 2px solid white;
            display: grid;
            align-items: center;
            justify-content: center;
            margin-left: 650px;
            margin-top: 160px;
            background-color: #d0d0ff;
            border-radius: 20px;
        
        }
        #update-user{
            height: 420px;
            width: 420px;
            border: 2px solid white;
            display: grid;
            align-items: center;
            justify-content: center;
            margin-left: 650px;
            margin-top: 160px;
            background-color: #d0d0ff;
            border-radius: 20px;
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
        <center>
        <h2>Create new user</h2>
        <form action="backend/create_new_user.php" method="post">
            <label for="email">New Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="email" id="username" class="inputs" required><br><br>
            <label for="password">New Password &nbsp;&nbsp;</label>
            <input type="password" name="password" id="password" class="inputs" required><br><br>
            <input type="submit" value="create" name="submit" class="button">
        </form>
        </center>       
    </div>
    <center>
    
        <button type="submit" id="button" class="button">logout</button>
        <a href="#delete-user"><button type="submit" id="button" class="button">Delete user</button></a>
        <a href="#update-user"><button type="submit" id="button" class="button">Update user</button></a>
    
    </center>
    <br><br><br>
    <div class="box">
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "web";

        $conn=mysqli_connect($servername,$username,$password,$database);

        if(!$conn){
            echo "connection is not.".mysqli_connect_error();
        }else{

            $sql="SELECT * FROM `form`";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if($num > 0)
            {
                
                $n=1;
                echo "<table class='table'>";
                echo "<center><h2>Users of this website.</h2></center>";
                echo "<tr><th>id</th><th>username</th><th>password</th></tr>";                                                                  
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$n."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "</tr>";
                    $n++;
                }
                echo "</table>";
            }
        }
    ?>
    </div>

    <div id="delete-user">
        <center>
        <h2>Delete a user</h2>
        <form action="backend/delete_user.php" method="post">
            <label for="email">Users Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="email" id="username" class="inputs" required><br><br>
            <input type="submit" value="Delete" name="submit" class="button">
        </form>
        </center>       
    </div>
    <div id="update-user">
        <center>
        <h2>Update a user</h2>
        <form action="backend/update_user.php" method="post">
            <label for="email">Previous Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="pre-username" id="username" class="inputs" required><br><br>
            <label for="email">Updated Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" name="upd-username" id="username" class="inputs" required><br><br>
            <label for="password">Previous Password &nbsp;&nbsp;</label>
            <input type="password" name="pre-password" id="password" class="inputs" required><br><br>
            <label for="password">Updated Password &nbsp;&nbsp;</label>
            <input type="password" name="upd-password" id="password" class="inputs" required><br><br>
            <input type="submit" value="Update" name="submit" class="button">
        </form>
        </center>       
    </div>
        <br><br><br>
    <script>
        document.getElementById("button").addEventListener('click', function (){
            var a=confirm('You want to logout.');
            if(a==true)
            {
                location.href="http://localhost/website/form.html";
            }
        });
    </script>
</body>
</html>
