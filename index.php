<?php
include 'header.php';
?>
	<div class="card align-content-lg-center mt-3">
		<div class="card-header text-center">
			<h3>Registration Form</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-6">
					<form class="align-self-center" method="post" action="insert.php">
						<div class="form-group row">
							<label for="name" class="col-form-label">Name:</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Full Name" onkeyup="validation()">
							<div id="nameerror" style="display: none;" class="input-group-append"><span class="input-group-text"><i class="far fa-check-circle"></i> Ok</span></div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-form-label">Email:</label>
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group row">
							<label for="password" class="col-form-label">Password:</label>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group row">
							<label for="mobile" class="col-form-label">Mobile:</label>
							<input type="mobile" name="mobile" class="form-control" placeholder="Mobile No">
						</div>
						<div class="form-group row">
							<label for="password" class="col-form-label">Gender:</label>
							<select class="form-control" name="gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="others">Others</option>
							</select>
						</div>
						<div class="form-group row">
							<button class="btn btn-primary" type="submit" name="submit">Submit</button>
						</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>