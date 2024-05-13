<!DOCTYPE html>
<html>
<head>
    <title>Team Information</title>
</head>
<body>
    <h1>Team Information</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>CGPA</th>
        </tr>
        <?php
        $connect = mysqli_connect('db', 'php_docker', 'password', 'student_info');
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM students";
        $response = mysqli_query($connect, $query);

        if (mysqli_num_rows($response) > 0) {
            while ($row = mysqli_fetch_assoc($response)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["cgpa"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }

        mysqli_close($connect);
        ?>
    </table>
</body>
</html>