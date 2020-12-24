<!DOCTYPE html>
<html>
<head>
	<title>B.A.H Volunteer Organization</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>



<body>
	<?php
		include('header.php');
	?>
		<div clas="text-bg">
			<h1>Become a Volunteer!</h1>
		</div>

		<div class="flex">
			<div>
				<span class="img-desc">
					<img class="form-img" src="images/nurse1.jpg">
					Volunteer Nurse
				</span>
				<span class="img-desc">
					Community Services
					<img class="form-img" src="images/community-service.jpg">
				</span>
				<span class="img-desc">
					<img class="form-img" src="images/teacher.jpg">
					Teach to Remote Places
				</span>
				<span class="img-desc">
					Give care to children
					<img class="form-img" src="images/tutor.jpg">
				</span>
			</div>
			<form>
				<div>
					<p class="small-heading">Fill in the form to become a<br>volunteer with our organization.</p><br>
					<p class="small-heading">Personal Information</p>
					<span>
						First Name <br>
							<input type="text" name="firstname" size="25"><br>
						Last Name<br>
							<input type="text" name="lastname" size="25"></span><br>
					<span>
						Gender <br>
							<input type="radio" name="gender" value="Male" checked>Male
							<input type="radio" name="gender" value="Female">Female
					</span><br><br><br>


					<p class="small-heading">Contact Details</p>
					<span>
						Phone Number <br>
							<input type="tel" name="phone_no"><br><br>
						E-mail Address<br>
							<input type="text" name="e-mail_add" size="30"><br>
						Address <br>
							<input type="text" name="address" size="30"><br>
						City <br>
							<input type="text" name="city" size="30"><br>
						State/Province <br>
							<input type="text" name="state/province" size="30"><br>
						Postal/Zip Code<br>
							<input type="text" name="postal/zip_code" size="30"><br>
					</span><br><br><br>


					<p class="small-heading">Work Details</p>
					<span>
						<p style="text-align: center; font-size: 20px !important;">Please indicate areas to volunteer<br>according to your skills</p><br>
						<input type="checkbox" name="hospital">
							<label for="hospital">Hospitals</label><br>
						<input type="checkbox" name="orphanage">
							<label for="orphanage">Orphanages</label><br>
						<input type="checkbox" name="School">
							<label for="school">Schools</label><br>
						<input type="checkbox" name="com_ser">
							<label for="com_ser">Community Services</label><br>
					</span><br>


					<p style="text-align: center; font-size: 20px !important;">Days of the week<br>to do volunteer</p>
					<span>
						<input type="checkbox" name="monday">
							<label for="monday">Monday</label><br>
						<input type="checkbox" name="tuesday">
							<label for="tuesday">Tuesday</label><br>
						<input type="checkbox" name="wednesday">
							<label for="wednesday">Wednesday</label><br>
						<input type="checkbox" name="thursday">
							<label for="thursday">Thursday</label><br>
						<input type="checkbox" name="friday">
							<label for="friday">Friday</label><br>
						<input type="checkbox" name="saturday">
							<label for="saturday">Saturday</label><br>
						<input type="checkbox" name="Sunday">
							<label for="sunday">Sunday</label><br>
					</span>


					<span>
						<p style="text-align: center; font-size: 20px !important;">Range of volunteering<br>hours per week</p>
						<input type="number" name="hours"><br>
						From<br>
							<input type="time" name="hour1"><br>
						To<br>
							<input type="time" name="hour2">
					</span><br><br>

						<input id="submit" type="submit" name="submit" >
				</div>
			</form>
		</div>

	<?php
		include('footer.php');
	?>
</body>



</html>