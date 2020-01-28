<?php
$connect=mysqli_connect('localhost','root','','restaurant');
?>


<html>
<head>

<h1>update and delete</h1>
<title>update and delete</title>
</head>
<body>
<form name="form1" action="post">
<table>
<tr>
<td>enter name</td>
<td><input type="text" name="t1"></td>
</tr>
<tr>
<td>enter phno</td>
<td><input type="phno" name="t2"></td>
</tr>
<tr>
<td>enter address</td>
<td><input type="text" name="t3"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit1" value="delete">
<input type="submit" name="submit2" value="update">
</td>
</tr>
</table>
</form>

<?php
if(isset($_post["submit1"]))
{
	mysql_query($connect,"delete from customer where name='$_POST[t1]'");
}
?>

<?php
if(isset($_post["submit2"]))
{
	mysql_query($connect,"update customer set name='$_POST[t2]' where name'$_POST[t1]'");
}
?>