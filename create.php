<?php include('header.php'); ?>

	<div class="main-form">
		<form method="post" action="inc/action.php"> 
			<div class="form-group">
				<label>Class</label>				
				<input type="text" name="class" >
			</div>

			<div class="form-group">
				<label>Subject</label>				
				<input type="text" name="subject">
			</div>

		    <div class="form-group">
				<label>Topic</label>				
				<input type="text" name="topic">
			</div>

			<div class="form-group">
				<label>Sub Topic</label>				
				<input type="text" name="sub_topic">
			</div>

			<div class="form-button">
							
				<input type="submit" name="submit" value="Submit">
			</div>

		</form>
	</div>

<?php include('footer.php');?>	