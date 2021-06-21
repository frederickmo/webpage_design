<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_db = 'myDB';
    $db_port = 3306;
    $db_socket = '/Applications/MAMP/tmp/mysql/mysql.sock';

    $mysqli = @new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db,
        $db_port,
        $db_socket
    );
	
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO student(name, age, gender)
    VALUES ('$name', $age, '$gender')";

    if ($mysqli->query($sql) === TRUE) {
        echo "<center><h1>Successfully inserted</h1></center>";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $sql2 = "SELECT name, age, gender FROM student";
    $result = $mysqli->query($sql2);

    echo "<center><h2>Current Record</h2></center>";

    if ($result->num_rows > 0) {
        echo "<center><h3>name age gender</h3></center>";
        while ($row = $result->fetch_assoc()) {
            echo "<center><h4>" . $row["name"] . " " . $row["age"] . " " . $row["gender"] . "</h4></center>";
        }
    } else {
        echo "0 result";
    }

    $mysqli->close();
?>