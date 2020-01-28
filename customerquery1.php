<?php
$conn=mysqli_connect('localhost','root','','restaurant');
echo "<h2>The name of the Custmer who lives in Delhi is: </h2> ";
$sql = "select Name from customer where Address='Delhi'";
$res = mysqli_query($conn,$sql);

while( $row = mysqli_fetch_array($res))
echo "<h4><li>Waiter_name =>$row[0]</li></h4><br/>";


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
