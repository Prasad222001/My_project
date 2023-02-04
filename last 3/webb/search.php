<?php
$link=mysqli_connect("localhost","root","","info");
if(!$link)
{
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
}
$name=$_GET['name'];
$res=mysqli_query($link,"select * from stud where name='$name'");
if(mysqli_num_rows($res)==0)
{
echo "$name doesn't exist";
}
else
{
echo "<table border='1' align=center width=60%>";
echo "<tr><td width=15% align=center>NAME</td><td width=15%
align=center>ADDRESS1</td><td width=15% align=center>ADDRESS2</td><td
width=15% align=center>EMAIL ID</td></tr>";
while($arr=mysqli_fetch_row($res))
echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><
/tr>";
echo "</table>";
}
?>
