<?php
$con=new mysqli("localhost", "root", "welcome", "class1");
if(mysqli_connect_errno())
{
	echo "failed to connect to mysql: ".mysqli_connect_error();
}
?>