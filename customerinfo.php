<?php


$con=mysqli_connect("localhost","root","");
if(!$con)
{
 die('cannot connect'.mysqli_error());
}
echo "";
echo "</br>";
mysqli_select_db("parking");
echo "<font color=hotpink>"."<h1 align=center>"."customer table"."</h1>";
echo "</br>";



$query1="select * from customer";
$result=mysqli_query($query1);
echo "<table  border=10  cellspacing=1 cellpadding=1 align=center>";
echo "<tr><th><font color=blue>id</th>
<th><font color=blue>name</th>
<th><font color=blue> mobile no.</th>
<th><font color=blue>email id</th>
<th><font color=blue>vehical number</th>
<th><font color=blue>date of parking</th>
<th><font color=blue>time slot</th></tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr><td align='center'>"."<font color=hotpink>".$row['id'].
"</td><td align='center'>"."<font color=hotpink>".$row['name'].
"</td><td align='center'>"."<font color=hotpink>".$row['mobile'].
"</td><td align='center'>"."<font color=hotpink>".$row['email'].
"</td><td align='center'>"."<font color=hotpink>".$row['v_no'].
"</td><td align='center'>"."<font color=hotpink>".$row['vdate'].
"</td><td align='center'>"."<font color=hotpink>".$row['time1']."</td></br></tr>";
} 
echo "</table>";
mysqli_close($con);

?>