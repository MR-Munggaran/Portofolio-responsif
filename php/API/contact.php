<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include("../connection.php");

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the required data is set
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Insert data into the database
        $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        
        if ($conn->query($sql) === TRUE) {
            $response = array("message" => "Terima kasih");
            echo json_encode($response);
        } else {
            $response = array("error" => "Terjadi kesalahan: " . $sql . "<br>" . $conn->error);
            echo json_encode($response);
        }

        // Close the database connection
        $conn->close();
    } else {
        $response = array("error" => "Semua data diperlukan");
        echo json_encode($response);
    }
} else {
    $response = array("error" => "Metode request harus POST");
    echo json_encode($response);
}
