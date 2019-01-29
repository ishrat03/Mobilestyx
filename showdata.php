<?php 
include 'header.php';

?><br>
<?php if(isset($_GET['msg'])){?>
				<span class="alert alert-success mt-3"><?php echo $_GET['msg'];?></span>
			<?php } ?>
	<div class="card align-content-lg-center mt-3">
		<div class="card-header text-center">
			<h3>Display Users in Table</h3>
		</div>
		<div class="card-body">
			
			<table class=" table table-striped">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile</th>
						<th scope="col">Gender</th>

					</tr>
				</thead>
			
<?php
include 'dbcon.php';
$query="select * from dummy order By id desc";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($run)) 
 {
 	?>
	<tbody>
		<tr>
			<th scope="row"><?php echo $row['id'];?></th>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['gender'];?></td>
		</tr>
	</tbody>
	


	<?php
}
 ?>
</table>
</div>
</div>
 <?php 

include 'footer.php';
  ?>