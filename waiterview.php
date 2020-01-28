<?php
$connect=mysqli_connect('localhost','root','','restaurant');
$sql = "select * from waiters  order by 1 desc";
$res = mysqli_query($connect,$sql);
echo "<h2> The details of the waiter are:</h2> <br>";
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
background:url(myimages/28.jpg)no-repeat;
background-size:cover;}
</style>
</body>
</html>