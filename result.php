<!DOCTYPE html>
<html>
<head>
	<title>Anime Saitama</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<!-- CSS HERE -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

<!-- SCRIPT HERE -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>
	<?php
			$title =$_GET['title'];

			include('db_connect.php');
			$sql = "SELECT * FROM episodes WHERE episode_title_ID = '$title'";
			$result = $conn->query($sql);

			    if ($result->num_rows > 0) {
			        // output data of each row
			        while($row = $result->fetch_assoc()) {
	?>
    
	<?php echo $row["episode_embedcode"]; ?></a>
	
	<?php
			        }
			        } else {
			            echo "0 results";
			        }
			$conn->close();

	?>



</body>
</html>