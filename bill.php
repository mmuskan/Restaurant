<?php

$conn=mysqli_connect('localhost','root','','restaurant');
$itemno = array();
$itemname = array();
$amt = array();
$quantity = array();
$totalamount = array();
//$cust_id=isset($_POST['Id']) ? $_POST['Id']: 'xyz';
//$sql="select Cust_id from Customer where Cust_id=$cust_id";
//echo $cust_id;
//$result = mysqli_query($conn,$sql);
//while($row = mysqli_fetch_array($result))
//{
	//$Cust_id = $row[0];
//}
//echo $cust_id;
//$query="insert into Order1(Cust_id) values('$Cust_id')";
//$res1 = mysqli_query($conn,$query);
 //if((mysqli_query($conn,$query)))
 //{
 //echo  "success-----";
 //}
 //else 
 //{
 //echo "failed--------";
	//} 
//$sql="select max(Id) from Order1 order by 1 desc";
//$result = mysqli_query($conn,$sql);
//while($row = mysqli_fetch_array($result))
//{
//	$order_id = $row[0];
//}
//echo $order_id;
//inserting items;
for($i=1;$i<=9;$i++)
{
	if($_POST['quantity'.$i.'']>=1)
	{	
		$itemno[]=$_POST['itemno'.$i.''];
		$item_no=$_POST['itemno'.$i.''];
		//echo $item_no;
		$itemname[]=$_POST['itemname'.$i.''];
		$item_name=$_POST['itemname'.$i.''];
		//echo $item_name;
		$amt[]=$_POST['amt'.$i.''];
		$amount=$_POST['amt'.$i.''];
		//echo $amount;
		$quantity[]=isset($_POST['quantity'.$i.''])?$_POST['quantity'.$i.'']:0;
		$qty=$_POST['quantity'.$i.''];
		//echo $qty;
		$totalamount[]=$_POST['totalamount'.$i.''];
		$total_amount=$_POST['totalamount'.$i.''];
		//echo $total_amount;
		$query="insert into Order1(Ino,Iname,amt,quantity,Tot_amt) 
				values('$item_no','$item_name','$amount','$qty','$total_amount')";
		$res2 = mysqli_query($conn,$query);
		//print $query;
			 if((mysqli_query($conn,$query)))
			 {
			 echo  "success here";
			 }
			 else 
			 {
			 echo "failed here";
			 }
			
			
			
	}

}
//print_r($itemno);
//print_r($itemname);
//print_r($amt);
//print_r($quantity);
//print_r($totalamount);

?>

<html>
<head>
<title>my web page</title>
</head>
<body>
<h1> your order has been placed</h1>








  