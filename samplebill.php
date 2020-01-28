<?php
$connect=mysqli_connect('localhost','root','','restaurant');
?>

<html>
<head>
<title>bill</title>

<style>
td{
	border:0;
	font-size:20px;
}
th
{
	font-size:20px;
}
</style>
</head>
<body>
<table border="1">
<tr>
        <th width=25>item_no.</th>
		<th width=80>item_name.</th>
		<th width=100>amt</th>
		<th width=100>quantity</th>
		<th width=100>total_amount</th>
		
		
		<?php
		$sql = "SELECT Ino,Iname,amt,quantity,Tot_amt,date from order1";
		$result = mysqli_query($connect,$sql);
		if(!$result)
		{
			die("unable to fetch".mysql_errno($connect));
		}
		else
		{
			while($row = mysqli_fetch_array($result))
			{ ?>
		<tr>
		<td><?php echo $row['name']; ?></td>
		<td style="text-align:left"><?php echo $row['price']; ?></td>
		<td style="text-align:center"><?php echo $row['quantity']; ?></td>
		
		
		<!--Price Calculation Part-->
		<td>
		<?php $price = $row['price'];
		      $qty = $row['qty'];
			  $total = $price*$qty;
			  echo $total;
			  
			  $subTotal+=$total;
			  
		?>
		
		</td>
		</tr>
		
			<?php }
		} ?>
		     <tr>
			 <td></td>
			 <td></td>
			 
			 <td></td>
			 <td></td>
			  </tr>
			  
			  <tr>
			 <td></td>
			 <td></td>
			 <td style ="background-color:yellow;text-align:right">Subtotal Rs:</td>
			 <td style ="background-color:yellow;">
			 <?php
			 echo " ".$subTotal; ?></td>
			 </tr>
			 
			 <tr>
			 <td></td>
			 <td></td>
			 <td style ="background-color:pink;text-align:right">Tax</td>
			 <td style ="background-color:pink;">5%</td>
			 </tr>
			 
			 <tr>
			 <td></td>
			 <td></td>
			 <td style ="background-color:pink;text-align:right">Tax Amount</td>
			 <td style ="background-color:pink;"><?php echo number_format(($subTotal / 100)*5,2);?> Rs</td>
		     </tr>
			 
			 <tr>
			 <td></td>
			 <td></td>
			 <td style ="background-color:#b0e694">Total Amount Rs:</td>
			 <td style ="background-color:#b0e694;"><?php $tax = (($subTotal / 100)*10);
			     echo $grandTotal = number_format($tax,2)+$subTotal ;
				 ?></td>
				 </tr>
				 </table>
				 </body>
				 </html>
			 
		
		
		