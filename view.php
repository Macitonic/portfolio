<?php
include 'config.php';

$sql="SELECT * FROM info";
$results=$conn->query($sql);

if($results->num_rows>0){
    echo "<h2>Clients List</h2>";
    echo "<table border='1'>
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>";
    while($row = $results-> fetch_assoc()) {
        echo"<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['message']."</td>
        </tr>";
    }
    echo"</table>";
}
else{
    echo"No clients messaged you!";
}

$conn->close();

?>