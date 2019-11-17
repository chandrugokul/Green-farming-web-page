<?php
$first name = filter_input(INPUT_POST,'first name');
$last name= filter_input(INPUT_POST,'last name');

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="green farmy";
//create connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
//check connection
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
//create table
$sql="INSERT INTO myuser(first name,last name,user name)
VALUES('$first name','$last name')";
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
	}
?>