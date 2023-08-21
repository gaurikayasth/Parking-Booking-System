<?php
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$v_no=$_POST["v_no"];
$vdate=$_POST["vdate"];
$time1=$_POST["time1"];

$con=mysql_connect("localhost","root","");
if(!$con)
{
 die('cannot connect'.mysql_error());
}
echo "<font color=hotpink>"."<h1 align=center>"."thank you!"."</h1>";
mysql_select_db("parking");
echo "<font color=hotpink>"."<h1 align=center>"."your booking is successfully done!"."</h1>";
echo "</br>";

$insert="insert into customer(name,mobile,email,v_no,vdate,time1) values('$name','$mobile','$email','$v_no','$vdate','$time1')";
if(mysql_query($insert))
{
 echo " ";
}
else
{
die('cannot insert data'.mysql_error());
}
mysql_close($con);
?>