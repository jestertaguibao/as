<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<!-- SCRIPT HERE -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- SCRIPT HERE -->

</head>
<body>

		<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search fruits..." data-inset="true">

		<?php
		include('db_connect.php');
		$sql = "SELECT * FROM title ORDER BY title_name ASC";
		$result = $conn->query($sql);

		    if ($result->num_rows > 0) {
		        // output data of each row
		        while($row = $result->fetch_assoc()) {
		?>
		             
		          
		    <li><a href="#"><?php echo $row["title_name"]; ?></h2></a></li>
		  

		<?php
		        }
		        } else {
		            echo "0 results";
		        }
		$conn->close();

		?>
	</ul>

</body>
</html>