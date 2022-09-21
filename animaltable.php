
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT animal_id, animal_id from Animal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["animal_id"]?></td>
    <td><a href="animal-section.php?id=<?=$row["animal_id"]?>"><?=$row["animalname"]?></a></td>
    <td><?=$row["animaltype"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
