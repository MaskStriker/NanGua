<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>南瓜小屋</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style type="text/css">
    table td{
        text-align: center;
    }
</style>
</head>



<?php 
foreach($imgs as $x=>$x_value) {
    echo $x;
    echo "<img src='http://".$_SERVER['SERVER_NAME']."/".$x_value."'></img>";
}
?>
<a href="/UploadImg/">back</a>