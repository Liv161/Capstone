
        <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo 'Connected...';
}

$sql = "SELECT * FROM profile";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><thead><tr><th>ID</th><th>Image</th><th>Name</th><th>Banner</th><th>Campaign</th><th>Slogan</th><th>About</th><th>Quote</th><th>Twitter</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>"
        . "<td>".$row["id"]."</td>"
        ."<td>"."<img src=".$row['imagename']." height=150 width=150/>"."</td>"
        ."<td>".$row["firstname"]." ".$row["lastname"]."</td>"
        ."<td>".$row["banner"]."</td>"
        ."<td>".$row["campaign"]."</td>"
        ."<td>".$row["slogan"]."</td>"
        ."<td>".$row["about"]."</td>"
        ."<td>".$row["quote"]."</td>"
        ."<td>".$row["twitter_url"]."</td>"
        ."</tr>";
    }
    echo "</table>";    
} else {
    echo "0 results";
}
$conn->close();
        ?>
        


