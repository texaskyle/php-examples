<?php
setcookie("user","karanja", time()+ 1*60*60);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE["user"])){
        echo "cookie is not found";
    }else{
        echo "<br/> Cookie value".$_COOKIE["user"];
    }

    if(isset($_SESSION['counter'])){
        $_SESSION['counter']=1;
    }else{
        $_SESSION['counter']++;
    }
    echo ("page views :".$_SESSION['counter']);
    ?>
    
</body>
</html>