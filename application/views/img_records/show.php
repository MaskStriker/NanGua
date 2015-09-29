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
    echo "<img src='http://nangua-makeup1122-2.c9.io/".$x_value."'></img>";
}
?>
<a href="/UploadImg/">back</a>