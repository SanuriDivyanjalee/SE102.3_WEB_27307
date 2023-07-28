<?php

$conn=mysqli_connect("localhost","root","","University");
$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
if(!$conn)
{
die("connection failed");

}
$sql="insert into students(id,name,email,password) values('".$id."','".$name."','".$email."','".$password."')";
if($conn->query($sql)==TRUE)
{
echo "Success!";
}
else
{
echo "error";
}


?>