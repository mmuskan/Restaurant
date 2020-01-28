<?php
$conn=mysqli_connect('localhost','root','','restaurant');
print "<h2>MySQL: Simple Select statement</h2>";
$sql = "select * from Waiters";
$result = mysqli_query($conn,$sql);
echo "<table border='1'>
<tr>
<th>ID</th>
<th>NAME</th>
<th>SALARY</th>
<th>EXPERIENCE</th>
<th>PHNO</th>
<th>EMAIL</th>
<th>DATE</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Salary'] . "</td>";
echo "<td>" . $row['exp'] . "</td>";
echo "<td>" . $row['phno'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "</tr>";
}
echo "</table>";
print "<h2>CREATE MySQL Trigger In PHP</h2>";
$sql = "CREATE TRIGGER MysqlTrigger BEFORE UPDATE ON waiters FOR EACH ROW SET NEW.Name=UPPER(NEW.Name);";
mysqli_query($conn,$sql);
print "<h2>MySQL: Update Statement</h2>";
$sql = "UPDATE waiters SET name='sanu' where id=6";
$qry = mysqli_query($conn,$sql);
echo "Table has been updated.";
mysqli_query($conn,$qry);
print "<h2>MySQL: Effect of Trigger</h2>";
$sql = "select * from waiters";
$result = mysqli_query($conn,$sql);
echo "<table border='1'>
<tr>
<th>ID</th>
<th>NAME</th>
<th>SALARY</th>
<th>EXPERIENCE</th>
<th>PHNO</th>
<th>EMAIL</th>
<th>DATE</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Salary'] . "</td>";
echo "<td>" . $row['exp'] . "</td>";
echo "<td>" . $row['phno'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['Date'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);

?>

<html>
<body>
<style>
body{
background:url(myimages/28.jpg)no-repeat;
background-size:cover;}
</style>
</body>
</html>
