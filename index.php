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
					<form class="align-self-center" name="RegForm" method="post" action="insert.php" onsubmit="return validation()">
						<div class="form-group row">
							<label for="name" class="col-form-label">Name:</label>
							<div class="input-group mb-3">
								<input type="text" id="name" name="name" class="form-control" placeholder="Full Name" min="3" max="50" onkeyup="return namevalidation()">
							<div id="nameerror" style="display: none;" class="input-group-append"><span class="input-group-text alert alert-success"><i class="far fa-check-circle"></i></span></div>
							<div id="nameerror1" style="display: none;" class="input-group-append"><span class="input-group-text alert alert-danger"><i class="far fa-check-circle"></i></span></div>
							</div>
							
						</div>
						<div class="form-group row">
							<label for="email" class="col-form-label">Email:</label>
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group row">
							<label for="password" class="col-form-label">Password:</label>
							<input type="password" name="password" class="form-control" placeholder="Password" min="6">
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