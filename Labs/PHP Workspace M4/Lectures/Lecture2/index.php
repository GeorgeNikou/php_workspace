<?php
	session_start();
	include "dbConnection.php";
	$query 		= $db->query("SELECT * FROM student"); //whenever you want to select everything from your table
	$students 	= $query->fetchAll(PDO::FETCH_ASSOC);


	$query 		= $db->query("SELECT * FROM student WHERE student_id = 5"); //whenever you want to select a single record from your table
	$student 	= $query->fetch(PDO::FETCH_ASSOC);

	//var_dump($student);
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Lecture 2</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- Boootstrap -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<style type="text/css">
			body {background-color:#eee;}
			.container-fluid {padding:50px;}
			.container{background-color:white;padding:50px;}
			#title{font-family: 'Lobster', cursive;}
		</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="container">
			<?php if(isset($_SESSION['msg'])): ?>
				<div class="alert alert-success">
					<strong>Success!</strong> <?= $_SESSION['msg']; ?>
				</div>
			<?php endif; ?>
			<a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal"><b>Add</b></a>
			<h2 class="text-center" id="title">Mushu's Students</h2>
			<div class="row">
				<div class="col-md-12">
 					<table class="table">
					    <thead>
					      <tr>
					        <th width="5%">ID</th>
					        <th width="10%">Firstname</th>
					        <th width="10%">Lastname</th>
					        <th width="5%">Age</th>
					        <th width="10%">Gender</th>
					        <th width="15%">Location</th>
					        <th width="15%">Program</th>
					        <th width="5%">Status</th>
					        <th width="25%" class="text-center">Action</th>
					      </tr>
					    </thead>
					    <tbody>
					    	<?php foreach ($students as $student) :?>
						      <tr>
						        <td><?= $student['student_id'] ?></td>
						        <td><?= $student['student_firstname'] ?></td>
						        <td><?= $student['student_lastname'] ?></td>
						        <td><?= $student['student_age'] ?></td>
						        <td><?= $student['student_gender'] ?></td>
						        <td><?= $student['student_location'] ?></td>
						        <td><?= $student['student_program'] ?></td>
						        <td><?= $student['student_status'] ?></td>
						        <td class="text-center">
						        	<a href="#" class="btn btn-sm btn-warning" data-toggle="collapse" data-target="#edit<?= $student['student_id'] ?>"><b>Edit</b></a>&nbsp;
						        	<a href="core.php?action=ban&student_id=<?= $student['student_id'] ?>" onclick="return confirm('Are you sure you want to ban <?= $student['student_firstname'] ?> <?= $student['student_lastname'] ?>')"class="btn btn-sm btn-dark"><b>Ban</b></a>&nbsp;
						        	<a href="core.php?action=delete&student_id=<?= $student['student_id'] ?>" onclick="return confirm('Are you sure you want to delete <?= $student['student_firstname'] ?> <?= $student['student_lastname'] ?>')"class="btn btn-sm btn-danger"><b>Delete</b></a>
						        </td>
						      </tr>
						      <tr id="edit<?= $student['student_id'] ?>" class="collapse fade">
						      	<td colspan="9">
						      		<form action="core.php" method="POST">
						      			<input type="hidden" name="student_id" value="<?= $student['student_id'] ?>">
									  <table class="w-100 table table-borderless">
									  	<tr>
									        <td width="10%" class="p-1 border-0">
									        	<input type="text" class="form-control" name="student_firstname" id="fname" value="<?= $student['student_firstname'] ?>">
									        </td>
									        <td width="10%" class="p-1 border-0">
									        	<input type="text" class="form-control" id="lname" name="student_lastname" value="<?= $student['student_lastname'] ?>">
									        </td>
									        <td width="10%" class="p-1 border-0">
									        	<input type="number" class="form-control" id="age" min="18", max="100" name="student_age" value="<?= $student['student_age'] ?>">
									        </td>
									        <td width="10%" class="p-1 border-0">
									        	<select class="form-control" id="gender" name="student_gender">
											    	<option>Gender</option>
											    	<option <?= $student['student_gender'] == "Male"?'selected':'' ?>>Male</option>
											    	<option <?= $student['student_gender'] == "Female"?'selected':'' ?>>Female</option>
											    	<option <?= $student['student_gender'] == "Other"?'selected':'' ?>>Other</option>
											    </select>
									        </td>
									        <td width="15%" class="p-1 border-0">
			    								<input type="text" class="form-control" id="location" name="student_location" value="<?= $student['student_location'] ?>">
									        </td>
									        <td width="15%" class="p-1 border-0">
									        	<select class="form-control" id="program" name="student_program">
											    	<option <?= $student['student_program'] == "Program"?'selected':'' ?>>Program</option>
											    	<option <?= $student['student_program'] == "Programming"?'selected':'' ?>>Programming</option>
											    	<option <?= $student['student_program'] == "Business"?'selected':'' ?>>Business</option>
											    	<option <?= $student['student_program'] == "ECE"?'selected':'' ?>>ECE</option>
											    	<option <?= $student['student_program'] == "Networking"?'selected':'' ?>>Networking</option>
											    	<option <?= $student['student_program'] == "Computer Support"?'selected':'' ?>>Computer Support</option>
											    </select>
									        </td>
									        <td width="15%" class="p-1 border-0">
									        	<select class="form-control" id="gender" name="student_status">
											    	<option>Status</option>
											    	<option value="1" <?= $student['student_status'] == "1"?'selected':'' ?>>Active</option>
											    	<option value="0" <?= $student['student_status'] == "0"?'selected':'' ?>>Inactive</option>
											    </select>
									        </td>
									        <td width="10%" class="p-1 border-0 text-center">
									        	<button type="submit" class="btn btn-success btn-block" name="editStudent">Edit</button>
									        </td>
									      </tr>
									  </table>
									</form>
						      	</td>
						      </tr>
					  		<?php endforeach; ?>
					    </tbody>
					  </table>
				</div>
			</div>
		</div>
		<p class="text-center">
			<small id="passwordHelpInline" class="text-muted"> George Boursiquot:<a href="https://herzingmontreal.ca" target="_blank"> Herzing College Montreal </a>
		</p>
	</div>

	<!-- The Modal -->
	<div class="modal" id="addModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Add Student</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	      <div class="modal-body">
	       <form action="core.php" method="POST">
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
			  <button type="submit" class="btn btn-success btn-block" name="addStudent">Submit</button>
			</form>
	      </div>

	    </div>
	  </div>
	</div>
	</body>
</html>

<?php unset($_SESSION['msg']); ?>