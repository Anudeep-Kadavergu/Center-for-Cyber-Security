<?php 
include_once 'dbconfig.php';
$value=$_COOKIE['user'];
echo $value;
$sql="DELETE FROM tbl_login where value='$value'";
mysqli_query($connection,$sql);
header('Location: index');
?>
