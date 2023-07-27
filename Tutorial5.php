<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nsbm1";

$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection faild");
}
echo ("DataBase Connected\n");
$h=$_REQUEST["id"];
$k=$_REQUEST["un"];
$j=$_REQUEST["em"];
$i=$_REQUEST["pw"];


$s="insert into student values('$h','$k','$j','$i')";
if($conn->query($s)==TRUE)
{
	echo"Record Updated Successfully";
}
else
{
	echo"Error Updating Record: " . $conn->error;
}
?>