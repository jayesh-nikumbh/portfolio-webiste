<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $file='calculator.html';
    if(file_exists($file))
    {
        $code=file_get_contents($file);
        "<p font-size='50px'>".$code."</p>";    
        highlight_string($code);
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            font-family:var(--bs-body-font-family);       
            font-weight: 200px;
            background-color: #f4f4f4;
            margin: 20px;
            font-size:15px;
        }
        pre{
            background-color: #fff;
            border: 1ps solid #ccc;
            padding: 10px;
            overflow: auto;
            border-radius: 5px;
        }
        .php{
            color: #007700;
        }
        .string{
            color: #d14;
        }
        .comment{
            color: #999;
        }
    </style>
</head>
<body>
    
</body>
</html>';
    }
    else{
        echo "file not found";
    }
    
?>  
</body>
</html>