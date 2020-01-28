<?php
$conn=mysqli_connect('localhost','root','','restaurant');
$sql = "select * from Waiters  order by 1 desc";
$res = mysqli_query($conn,$sql);
echo "<h2> Waiter recorded are:</h2> <br>";

	
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
while($row = mysqli_fetch_array($res))
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
echo "<h2>The remaining waiters after updating the waiter are : </h2> ";
$sql = "update waiters set phno='9997676545' where Id=2";
$res = mysqli_query($conn,$sql);
$sql = "select * from Waiters order by 1 desc";
$res = mysqli_query($conn,$sql);

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
while($row = mysqli_fetch_array($res))
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
	
?>
<html>
<body>
<body>
<style>
body{
background:url(myimages/19.jpg)no-repeat;
background-size:cover;}
</style>
</body>
</html>
