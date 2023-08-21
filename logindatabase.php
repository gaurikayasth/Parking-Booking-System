<?php
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$v_no=$_POST['v_no'];
$vdate=$_POST['vdate'];
$time1=$_POST['time1'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
 die('cannot connect'.mysql_error());
}
mysql_select_db("parking");
echo "database seleted";
echo "</br>";
$insert="insert into customer values('$name','$mobile','$email','$v_no','$vdate','$time1')";
if(mysql_query($insert,$con))
{
 echo "insert data successfully";
}
else
{
die('cannot insert data'.mysql_error());
}
$query1="select * from student";
$result=mysql_query($query1);
echo "<table  border=10  cellspacing=1 cellpadding=1>";
echo "<tr><th><font color=blue>customer name</th>
<th><font color=blue>customer number</th>
<th><font color=blue>customer email</th>
<th><font color=blue>vehical number</th>
<th><font color=blue>parking date</th>
<th><font color=blue>parking time</th></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td align='center'>"."<font color=red>".$row['name'].
"</td><td align='center'>"."<font color=red>".$row['mobile'].
"</td><td align='center'>"."<font color=red>".$row['email'].
"</td><td align='center'>"."<font color=red>".$row['v_no'].
"</td><td align='center'>"."<font color=red>".$row['vdate'].
"</td><td align='center'>"."<font color=red>".$row['time1']."</td></br></tr>";
} 
echo "</table>";
mysql_close($con);
?>

