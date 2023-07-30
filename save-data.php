<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $direction = $_POST["direction"];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "raghad";

  // Create a database connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert the data into the database (you need to create a suitable table)
  $sql = "INSERT INTO direction (action) VALUES ('$direction')";

  if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
