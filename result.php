<?php
include('db_connect.php');
$sql = "SELECT * FROM title ORDER BY title_name ASC";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
?>

                    
                <?php echo $row["title_name"]; ?>

<?php
        }
        } else {
            echo "0 results";
        }
$conn->close();

?>