<?php
header("content-type: application/json");

//hubungkan database
include("../connection.php");
//hubungkan fungsi.php
include("../function.php");


$data = retrievePortfolio($conn);


// tampilkan data dalam format JSON
echo json_encode($data);
// tutup koneksi database
mysqli_close($conn);
?>