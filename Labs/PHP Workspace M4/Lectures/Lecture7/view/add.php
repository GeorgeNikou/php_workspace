<h2 class="text-center" id="title">Mushu's Students ADD</h2>
<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-body">
				<form class="" action="?controller=add&action=register" method="POST">
					<div class="form-group">
						<label for="fname"><b>Student Firstname:</b></label>
						<input type="text" class="form-control" name="student_firstname" id="fname">
					</div>
					<div class="form-group">
						<label for="lname"><b>Student Laststname:</b></label>
						<input type="text" class="form-control" id="lname" name="student_lastname">
					</div>
					<div class="form-group">
						<label for="age"><b>Student Age:</b></label>
						<input type="number" class="form-control" id="age" min="18", max="100" name="student_age">
					</div>
					<div class="form-group">
						<label for="gender"><b>Student Gender:</b></label>
						<select class="form-control" id="gender" name="student_gender">
							<option>Select Gender</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="location"><b>Student Location:</b></label>
						<input type="text" class="form-control" id="location" name="student_location">
					</div>

					<div class="form-group">
						<label for="program"><b>Student Program:</b></label>
						<select class="form-control" id="program" name="student_program">
							<option>Select Program</option>
							<option>Programming</option>
							<option>Business</option>
							<option>ECE</option>
							<option>Networking</option>
							<option>Computer Support</option>
						</select>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-block" name="register">Submit</button>
						</div>
						<div class="col-md-6">
							<a href="index.php" class="btn btn-danger btn-block">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>