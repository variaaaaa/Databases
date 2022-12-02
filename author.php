<?php
require("connectdb.php");

if(!isset($_GET["id"])){
    echo "Не указан идентификатор страницы.";
    exit;
}
else{
    $result = mysqli_query($connect, "SELECT name FROM users WHERE id=".$_GET["id"]);
    header("Location: allpages.php");
}

//require("template.php");
?>