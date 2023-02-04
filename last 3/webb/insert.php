
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
$rollno=$_GET['rollno'];
$course=$_GET['course'];
$email=$_GET['email'];
echo "Hello" .$name;
echo " Record has been INSERTED SUCCESSFULLY<br/><br/>";
$query="insert into stud values('$name','$rollno','$course','$email')";
mysqli_query($link,$query) or die(mysql_error());
$res=mysqli_query($link,"select * from stud");
echo "<table border='1' align=center width=60%>";
echo "<tr><td width=15% align=center>NAME</td><td width=15%
align=center>ROLLNO</td><td width=15% align=center>COURSE</td><td
width=15% align=center>EMAIL ID</td></tr>";
while($arr=mysqli_fetch_row($res))
echo
"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td></tr>"
;
echo "</table>";
?>
