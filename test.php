<?php
$connect = mysqli_connect('db', 'php_docker', 'password', 'student_info');
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM students";
$response = mysqli_query($connect, $query);

if ($response->num_rows > 0) {
    // Output data of each row
    while ($row = $response->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - CGPA: " . $row["cgpa"] . "<br>";
    }
} else {
    echo "0 responses";
}

mysqli_close($connect);
?>