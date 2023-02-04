<?php
  $server = "localhost";
  $password = "";
  $username = "root";
  $dbname = "test";
  $conn = mysqli_connect($server, $username, $password, $dbname);

  if (!$conn) {
    echo "couldn't connect to database";
  } else {
	if (isset($_POST['name']) && isset($_POST['roll_no']) && isset($_POST['course'])) {
		$name = $_POST['name'];
		$roll_no = $_POST['roll_no'];
		$course = $_POST['course'];
		$sql = "INSERT INTO student_table (name, roll_no, course)
		VALUES ('$name', '$roll_no', '$course')";

		if (mysqli_query($conn, $sql)) {
			echo "added files to database";
			echo '<a href="file.php"> go back </a>';
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	} else {
		echo "needed fields doesn't exist";
	}
  }
?>