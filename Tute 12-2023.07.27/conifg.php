<?php

$conn=mysqli_connect("localhost","root","","University");
if(!$conn)
{
die("connection failed");

}
echo "Database connected";

?>