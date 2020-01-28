
 
<?php
$connect=mysqli_connect('localhost','root','','restaurant');
$flag=0;
$name=isset($_POST['Name']) ? $_POST['Name']: 'xyz';
//echo $name;
$Phno=isset($_POST['Phno']) ? $_POST['Phno']: 'xyz';
//echo " ";
//echo $salary;
$Address=isset($_POST['Address']) ? $_POST['Address']: 'xyz';
//echo " ";
//echo $exp;
$query="insert into Customer(Name,Phno,Address) values('$name','$Phno','$Address')";
if((mysqli_query($connect,$query)))
{
//echo  "success";
//sleep(5);
$flag=1;
}
else 
{
//echo "failed";
$flag=0;
} 
?>



<?php
if($flag==1)
{
	echo "<script type='text/javascript'>alert('Customer Added Successfully')</script>";
}
	?>
