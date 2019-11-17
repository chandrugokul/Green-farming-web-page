<html>
<head>
<title>register</title>
</head>
<body>
<?php
$firstname = filter_input(INPUT_POST,'firstname');
$lastname= filter_input(INPUT_POST,'lastname');
$username= filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
$retypepassword = filter_input(INPUT_POST,'retypepassword');
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="santha";
//create connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
//check connection
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
//insert into table
$sql="INSERT INTO myuser(firsname,lastname,username,password,retypepassword)
VALUES('$firstname','$lastname','$username','$password','$retypepassword')";
if($conn->query($sql)===TRUE)
{
	echo "new record is  created successfully";
}
else
{
	echo "error:".$sql."<br>".
	$conn->error;
}
$conn->close();
?>
</body>
</html>