<h2 class="text-center" id="title">Mushu's Students EDIT</h2>
<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-body">
				<form class="" action="?controller=edit&action=editStudent" method="POST">
					<input type="hidden" name="student_id" value="<?= $student->getStudentId() ?>">
					<div class="form-group">
						<label for="fname"><b>Student Firstname:</b></label>
						<input type="text" class="form-control" name="student_firstname" id="fname" value="<?= $student->getStudentFirstname() ?>">
					</div>
					<div class="form-group">
						<label for="lname"><b>Student Laststname:</b></label>
						<input type="text" class="form-control" id="lname" name="student_lastname" value="<?= $student->getStudentLastname() ?>">
					</div>
					<div class="form-group">
						<label for="age"><b>Student Age:</b></label>
						<input type="number" class="form-control" id="age" min="18", max="100" name="student_age" value="<?= $student->getStudentAge() ?>">
					</div>
					<div class="form-group">
						<label for="gender"><b>Student Gender:</b></label>
						<select class="form-control" id="gender" name="student_gender">
					    	<option>Gender</option>
					    	<option <?= $student->getStudentGender() == "Male"?'selected':'' ?>>Male</option>
					    	<option <?= $student->getStudentGender() == "Female"?'selected':'' ?>>Female</option>
					    	<option <?= $student->getStudentGender() == "Other"?'selected':'' ?>>Other</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="location"><b>Student Location:</b></label>
						<input type="text" class="form-control" id="location" name="student_location" value="<?= $student->getStudentLocation() ?>">
					</div>

					<div class="form-group">
						<label for="program"><b>Student Program:</b></label>
						<select class="form-control" id="program" name="student_program">
					    	<option <?= $student->getStudentProgram() == "Program"?'selected':'' ?>>Program</option>
					    	<option <?= $student->getStudentProgram() == "Programming"?'selected':'' ?>>Programming</option>
					    	<option <?= $student->getStudentProgram() == "Business"?'selected':'' ?>>Business</option>
					    	<option <?= $student->getStudentProgram() == "ECE"?'selected':'' ?>>ECE</option>
					    	<option <?= $student->getStudentProgram() == "Networking"?'selected':'' ?>>Networking</option>
					    	<option <?= $student->getStudentProgram() == "Computer Support"?'selected':'' ?>>Computer Support</option>
					    </select>
					</div>
					<div class="form-group">
						<label for="program"><b>Student Status:</b></label>
						<select class="form-control" id="gender" name="student_status">
					    	<option>Status</option>
					    	<option value="1" <?= $student->getStudentStatus() == "1"?'selected':'' ?>>Active</option>
					    	<option value="0" <?= $student->getStudentStatus() == "0"?'selected':'' ?>>Inactive</option>
					    </select>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-block" name="editStudent">Edit</button>
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