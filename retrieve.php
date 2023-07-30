<?php
//Establish a connection to the MySQL database
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "raghad";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Execute a SELECT query to fetch the data from the database
$sql = "SELECT id, action FROM direction";
$result = $conn->query($sql);

//Create an HTML table and loop through the retrieved data to populate the table rows
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%; /* Set the table width to 80% */
            margin: 0 auto; /* Center the table horizontally */
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <center><h2>Retrieve Data</h2></center>
    <table>
        <tr>
            <th>ID</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["action"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
//Close the database connection
$conn->close();
?>
