<?php
$servername = "localhost";
$username = "root";
$password = ""; $dbname = "vp1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO MyGuests (name, email, phone) VALUES (:name, :email, :phone)");
    $stmt->bindParam(':name', $name); $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);

    // insert a row
    if ($_POST["submit"]) {
        $name  = $_POST["name"]; $phone = $_POST["phone"];
        $email = $_POST["email"]; /*$comment = $_POST["comment"];
        $street = $_POST["street"]; $home = $_POST["home"];
        $part = $_POST["part"]; $appt = $_POST["appt"];
        $floor = $_POST["floor"]; $payment = $_POST["payment"];
        $callback = $_POST["callback"];*/
    }
    $stmt->execute();
    echo "New records created successfully";
    }
catch(PDOException $e){ echo "Error: " . $e->getMessage(); }
$conn = null;
?>