<html>
<body>
<?php 
$fName=$_REQUEST['fn'];
$lName=$_REQUEST['ln'];
$uname=$_REQUEST['un'];
$pswd=$_REQUEST['pwd'];
$gender=$_REQUEST['gen'];
$acyear=$_REQUEST['academicYear'];
$email=$_REQUEST['em'];
$phone=$_REQUEST['pno'];
?>


<table border="1">
<tr>
<td>First Name</td>
<td><?php echo $fName ?></td>
</td>
</tr>
<tr>
<td>Last Name</td>
<td><?php echo $lName ?></td>
</td>
</tr>
<tr>
<td>Username</td>
<td><?php echo $uname ?></td>
</td>
</tr>
<tr>
<td>Password</td>
<td><?php echo $pswd ?></td>
</td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $gender ?></td>
</td>
</tr>
<tr>
<td>Academic Year</td>
<td><?php echo $acyear ?></td>
</td>
</tr>
<tr>
<td>Email</td>
<td><?php echo $email ?></td>
</td>
</tr>
<tr>
<td>Phone</td>
<td><?php echo $phone ?></td>
</td>
</tr>

</table>
</body>
</html>