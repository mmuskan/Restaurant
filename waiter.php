<?php
$connect=mysqli_connect('localhost','root','','restaurant');
if($connect)
	echo "connection successfull";
$flag=0;
$Name=isset($_POST['Name']) ? $_POST['Name']: 'xyz';
echo $Name;
$Salary=isset($_POST['Salary']) ? $_POST['Salary']: 'xyz';
echo $Salary;
$Experience=isset($_POST['Experience']) ? $_POST['Experience']: 'xyz';
//echo " ";
echo $Experience;
$phno=isset($_POST['Phno']) ? $_POST['Phno']: 'xyz';
echo $phno;
$Email=isset($_POST['Email']) ? $_POST['Email']: 'xyz';
//echo " ";
echo $Email;
$Date=isset($_POST['Date']) ? $_POST['Date']: 'xyz';
//echo " ";
echo $Date;
$query="insert into waiters(Name,Salary,exp,phno,email,Date) values('$Name','$Salary','$Experience','$phno','$Email','$Date')";
if((mysqli_query($connect,$query)))
{
echo  "success";
//sleep(5);
$flag=1;
}
else 
{
echo "failed";
$flag=0;
} 
?>



<?php
if($flag==1)
{
	echo "<script type='text/javascript'>alert('Waiter Added Successfully')</script>";
}
//else
//	echo "<script type='text/javascript'>alert('There was an error')</script>";
	?>
