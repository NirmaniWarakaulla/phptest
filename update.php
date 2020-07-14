<?php
$query = "UPDATE details SET last_name='warakaulla' WHERE id=31";

if ($conn->query($query) === TRUE) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . $conn->error;}
?>

