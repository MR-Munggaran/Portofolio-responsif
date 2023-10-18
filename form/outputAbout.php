<?php
// Load file koneksi.php
include "connection.php";

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Ambil data dari input judul, deskripsi, dan tautan
$namaSaya = $_POST['namaSaya'];
$deskripsi = $_POST['deskripsi'];

// Set path folder tempat menyimpan gambar
$path = "images/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diunggah kurang dari atau sama dengan 1MB
    // Jika tipe file dan ukuran sesuai, lakukan upload gambar
    if(move_uploaded_file($tmp_file, $path)){ 
      // Jika gambar berhasil diupload, lanjutkan proses penyimpanan ke database
      $query = "INSERT INTO about(nama, ukuran, tipe, namaSaya, deskripsi) 
      VALUES ('" . $nama_file . "', '" . $ukuran_file . "', '" . $tipe_file . "', '" . $namaSaya . "', '" . $deskripsi . "')";
      $sql = mysqli_query($conn, $query);

      if($sql){ // Cek jika proses penyimpanan ke database berhasil
        header("location: formupload.php"); // Redirect ke halaman formupload.php atau halaman lain yang sesuai
      } else {
        // Jika gagal menyimpan ke database
        echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database.";
        echo "<br><a href='formupload.php'>Kembali Ke Form</a>";
      }
    } else {
      // Jika gambar gagal diunggah
      echo "Maaf, gambar gagal diunggah.";
      echo "<br><a href='formupload.php'>Kembali Ke Form</a>";
    }
  } else {
    // Jika ukuran gambar lebih dari 1MB
    echo "Maaf, ukuran gambar yang diunggah tidak boleh lebih dari 1MB.";
    echo "<br><a href='formupload.php'>Kembali Ke Form</a>";
  }
} else {
  // Jika tipe file yang diunggah bukan JPG / JPEG / PNG
  echo "Maaf, tipe gambar yang diunggah harus JPG / JPEG / PNG.";
  echo "<br><a href='formupload.php'>Kembali Ke Form</a>";
}
?>