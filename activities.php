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

	<h1>Organization Activities</h1>

	<div class="template">
			<h2>Medical Mission</h2>
		</span>
	</div>

		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "bah_organization";

			$conn = new mysqli ($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
			die ("Connection Failed" . $conn->connect_error);
		} 
			$sql ="SELECT title, description FROM activities";
			$result = $conn->query($sql);

		if ($result->num_rows > 0 ) {
			while ($row = $result->fetch_assoc()) {
			echo "<div><h2>" . $row["title"] . "</h2>" . "<p>" . $row["description"] . "</p></div>";
			}
		} else {
			echo "No more content to show";
		}
		$conn->close();
		?>
	
	<?php
		include('footer.php');
	?>
</body>



</html>