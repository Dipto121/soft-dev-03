<?php 
include "inc/header.php";
include "inc/sidebar.php";

global $con;

 ?>


 <?php 

if (isset($_POST['sub'])) {




	$pay_tkz = $_POST['pay_tk'];

	$em = $_SESSION['id'];

	echo $up_bal = $total_joma-$pay_tkz;
	echo $up_due = $total_khoroch-$pay_tkz;
	echo $up_pay =$pymnt+$pay_tkz;



	$updateqrrrry = "UPDATE reg SET bal = $up_bal,due = $up_due,Payment = $up_pay WHERE email = '$em' ";
	$rss = mysqli_query($con,$updateqrrrry);

	if ($rss) {
		header("Location:pay.php");
	}



	


	
}



  ?>


 <div class="col-md-8">


<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>

        <th>Balance</th>
        <th>Due</th>
        <th>Payment</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row['name']; ?></td>
		<td><?php echo $row['bal']; ?></td>
		<td><?php echo $row['due']; ?></td>
		
			<form action="pay.php" method="post">
			<td><input type="text" name="pay_tk"></td>
			<td><input type="submit" name="sub"></td>
				
			</form>

      </tr>
    </tbody>
  </table>

 	
 </div>
 			</div>
 		</div>
 	</div>
 </div>
		


  


<?php 
include "inc/footer.php";

 ?>
	 
