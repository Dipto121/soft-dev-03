<?php 
include "inc/header.php";
include "inc/sidebar.php";

 ?>


 <div class="col-md-8">


<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Number</th>
        <th>Balance</th>
        <th>Due</th>
        <<th>Total Payment</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row['name']; ?></td>
<td><?php echo $row['number']; ?></td>
<td><?php echo $row['bal']; ?></td>
<td><?php echo $row['due']; ?></td>
<td><?php echo $row['Payment']; ?></td>
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
	 
