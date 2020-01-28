<?php
$conn=mysqli_connect('localhost','root','','restaurant');
$sql = "select * from Customer  order by 1 desc";
$res = mysqli_query($conn,$sql);
echo "<h2> Customer recorded are:</h2> <br>";
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
echo "<h2>The remaining customers after updating the customer are : </h2> ";
$sql = "update customer set name='Taj' where cust_id=20";
$res = mysqli_query($conn,$sql);
$sql = "select * from Customer order by 1 desc";
$res = mysqli_query($conn,$sql);
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
