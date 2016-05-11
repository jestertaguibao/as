<!DOCTYPE html>
<html>
<head>
	<title>Anime Saitama</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!-- CSS HERE -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

<!-- SCRIPT HERE -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>
		
       


<form>
    <input data-type="search" id="filterControlgroup-input">
</form>
<div data-role="controlgroup" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search Anime title" data-input="#filterControlgroup-input">
	<?php
			include('db_connect.php');
			$sql = "SELECT * FROM title ORDER BY title_name ASC";
			$result = $conn->query($sql);

			    if ($result->num_rows > 0) {
			        // output data of each row
			        while($row = $result->fetch_assoc()) {
		?>
		
		<form method="get" action="result.php" >
			<button type="submit" name="title" value="<?php echo $row["title_ID"]; ?>" class="ui-btn ui-shadow ui-corner-all">
			<?php echo $row["title_name"]; ?>
			</button>
		</form>
	</a>

	<?php
			        }
			        } else {
			            echo "0 results";
			        }
			$conn->close();

			?>
</div>

</body>
</html>