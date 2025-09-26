<?php
include 'config.php';

$sql = "SELECT * FROM info";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        echo "<tr>
                <td>".$row['ID']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['message']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4' style='text-align:center;'>No clients messaged you!</td></tr>";
}

$conn->close();
