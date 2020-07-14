<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container">
<?php
//get data

  $query = "SELECT ID, first_name, last_name FROM details";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    
  echo "<table class='table table-condensed'><tr><th>ID</th><th>FirstName</th><th>LastName</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ID"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
</div>