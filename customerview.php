<?php
$connect=mysqli_connect('localhost','root','','restaurant');
$sql = "select * from customer  order by 1 desc";
$res = mysqli_query($connect,$sql);
echo "<h2> The details of the Customer  are:</h2> <br>";
echo "<table border='3'>
<tr>
<th>CUST_ID</th>
<th>NAME</th>
<th>PHNO</th>
<th>ADDRESS</th>
</tr>";
while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>" . $row['Cust_id'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Phno'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
//echo "<td>" . $row['Id'] . "</td>";
echo "</tr>";
}
echo "</table>";
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
