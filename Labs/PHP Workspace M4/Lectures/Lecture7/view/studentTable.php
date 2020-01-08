<?php if(isset($_SESSION['msg'])): ?>
	<div class="alert alert-success">
		<strong>Success!</strong> <?= $_SESSION['msg']; ?>
	</div>
<?php unset($_SESSION['msg']); ?>
<?php endif; ?>
<a href="?controller=add&action=view" class="btn btn-primary float-right" ><b>Add</b></a>
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
			        <td><?= $student->getStudentId() ?></td>
			        <td><?= $student->getStudentFirstname() ?></td>
			        <td><?= $student->getStudentLastname() ?></td>
			        <td><?= $student->getStudentAge() ?></td>
			        <td><?= $student->getStudentGender() ?></td>
			        <td><?= $student->getStudentLocation() ?></td>
			        <td><?= $student->getStudentProgram() ?></td>
			        <td><?= $student->getStudentStatus() ?></td>
			        <td class="text-center">
			        	<a href="?controller=edit&action=view&student_id=<?= $student->getStudentId() ?>" class="btn btn-sm btn-warning"><b>Edit</b></a>&nbsp;
			        	<a href="?controller=edit&action=banStudent&student_id=<?= $student->getStudentId() ?>" onclick="return confirm('Are you sure you want to ban <?= $student->getStudentFirstname() ?> <?= $student->getStudentLastname() ?>')"class="btn btn-sm btn-dark"><b>Ban</b></a>&nbsp;
			        	<a href="?controller=edit&action=deleteStudent&student_id=<?= $student->getStudentId() ?>" onclick="return confirm('Are you sure you want to delete <?= $student->getStudentFirstname() ?> <?= $student->getStudentLastname() ?>')"class="btn btn-sm btn-danger"><b>Delete</b></a>
			        </td>
			      </tr>
		  		<?php endforeach; ?>
		    </tbody>
		  </table>
	</div>
</div>
