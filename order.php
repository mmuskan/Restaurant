<?php
$conn=mysqli_connect('localhost','root','','restaurant');
$sql = "SELECT Item_no,Amount,Item_name from items";
$result = $conn->query($sql);

/* if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["item_no"]. " - Name: " . $row["item_name"]. " AMOUNT" . $row["amt"]. "<br>";
    }
} else {
    echo "0 results";
} */
?>
<html>
<style>
body{ 
font-family:latha;
color:white;
background: url(myimages/2.jpg)no-repeat;
background-size:cover;
}
</style>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <h1>FILL IN THE ORDER DETAILS:</h1>
		
		<!--<p> CUSTOMER ID:   <input type="number" name="Id" > </p>-->
		
        <form action=bill.php method=post enctype="application/x-www-form-urlencoded">
        SELECT THE ITEMS:
			<div class="panel-body" >
			<table id="order">
				<thead>
				<tr>
					<th>item_no.</th>
					<th>amt.</th>
					<th>item_name</th>
					<th>quantity</th>
					<th>total_amount</th>
					
				</tr>
				</thead>
				<tbody>
			
				<?php if ($result->num_rows > 0) {
					$i=1;
					while($row = $result->fetch_assoc()) {
					?>
					<tr>
						<td><input name="itemno<?php echo $i?>" value="<?php echo $row["Item_no"]?>" readonly></td>
						<td><input id= "amt"  type="number"  name="amt<?php echo $i?>" value="<?php echo $row["Amount"]?>" readonly ></input></td>
						<td><input id= "item_name"  type="text" name="itemname<?php echo $i?>" value="<?php echo $row["Item_name"]?>" readonly ></td>
						<td><input id="quantity" type="number" name="quantity<?php echo $i?>" min="0" ></input></td>
						<td><input id="total" type="number" name="totalamount<?php echo $i?>" min="0" readonly  ></input></td>
						
					</tr>
				  <?php $i++;  ?>
				<?php }}  ?>
			<!--<th> Grandtotal</th>
				<tr>
					
					<td><input id="grandtotal" type="number" name="totalamount<?php echo $i?>" min="0" readonly  ></input></td>
					</tr>-->
					
				</tbody>
			</table>
			</div>
			<button type="button" onclick="generateamt()" style="background-color: #8BC34A;;">GENERATE AMOUNT</button>
			<input TYPE="submit" ACTION="bill.php" VALUE="submit" METHOD="post"><br />
		</form>
            <br />
			<!--<a href=''>ORDER QUERY!!</a><br>
			<br> <a href=''>ORDER QUERY 2 !! </a><br>-->
           


</body>
</html>
<script>
var items = new Array();
 function generateamt()
{
	$('table#order > tbody  > tr').each(function() {
		//var gtotal=0;
		var z=$(this);
		var itemname=z.find('td input#item_name').val();
		//item_name.push(itemname);
		items.push(itemname);
		var amt=z.find('td input#amt').val();
		var qty=z.find('td input#quantity').val();
		var total=amt*qty;
		z.find('td input#total').val(total);
		console.log("here",amt,qty,items);
			
	});
	
}

	

</script>

