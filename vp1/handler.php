<?php
$servername = "localhost";
$username = "root";
$password = ""; $dbname = "vp1";

try {
    $user_conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $user_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $user_conn->prepare("INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)");
    $stmt->bindParam(':name', $name); $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);

    // insert a row
    if ($_POST["submit"]) {$name  = $_POST["name"]; $phone = $_POST["phone"]; $email = $_POST["email"]; }
    $stmt->execute(); echo "New records created successfully";
    }
catch(PDOException $e){ echo "Error: " . $e->getMessage(); }
$user_conn = null;

try {
    $user_conn_detail = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $user_conn_detail->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt_detail = $user_conn_detail->prepare("INSERT INTO users_detail (street, home, part, appt, floor, payment, callback, comment) VALUES (:street, :home, :part, :appt, :floor, :payment, :callback, :comment)");
    $stmt_detail->bindParam(':street', $street); $stmt_detail->bindParam(':home', $home);
    $stmt_detail->bindParam(':part', $part); $stmt_detail->bindParam(':appt', $appt);
    $stmt_detail->bindParam(':floor', $floor); $stmt_detail->bindParam(':payment', $payment);
    $stmt_detail->bindParam(':callback', $callback); $stmt_detail->bindParam(':comment', $comment);

    // insert a row
    if ($_POST["submit"]) {
        $comment = $_POST["comment"];
        $street = $_POST["street"]; $home = $_POST["home"];
        $part = $_POST["part"]; $appt = $_POST["appt"];
        $floor = $_POST["floor"]; $payment = $_POST["payment"];
        $callback = $_POST["callback"];
    }
    $stmt_detail->execute(); echo "New records created successfully";
    }
catch(PDOException $e){ echo "Error: " . $e->getMessage(); }
$user_conn_detail = null;
?>