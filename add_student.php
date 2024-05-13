<?php
$connect = mysqli_connect('db', 'php_docker', 'password', 'student_info');
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$id = $_POST['id'];
$age = $_POST['age'];
$cgpa = $_POST['cgpa'];

$query = "INSERT INTO students (id, name, age, cgpa) VALUES ('$id', '$name', '$age', '$cgpa')";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "Student successfully added.";
} else {
    echo "Error adding student: " . mysqli_error($connect);
}

mysqli_close($connect);
?>