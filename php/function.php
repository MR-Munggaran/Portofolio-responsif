<?php
function fetchHomeData($conn) {
    $sql_home = "SELECT * FROM home";
    $hasil_home = mysqli_query($conn, $sql_home);
    $data_home = mysqli_fetch_array($hasil_home);
    return $data_home;
}

// function fetchHomeImage($conn, $id_home) {
//     $sql_gambar_home = "SELECT * FROM gambar WHERE id=$id_home";
//     $hasil_gambar = mysqli_query($conn, $sql_gambar_home);
//     $data_gambar = mysqli_fetch_array($hasil_gambar);
//     return $data_gambar;
// }

function fetchAboutData($conn) {
    $sql_about = "SELECT * FROM about";
    $hasil_about = mysqli_query($conn, $sql_about);
    $data_about = mysqli_fetch_array($hasil_about);
    return $data_about;
}

// function fetchAboutImage($conn, $id_about) {
//     $sql_gambar_about = "SELECT * FROM gambar WHERE id=$id_about";
//     $hasil_gambar_about = mysqli_query($conn, $sql_gambar_about);
//     $data_gambar_about = mysqli_fetch_array($hasil_gambar_about);
//     return $data_gambar_about;
// }

function retrieveServices($conn) {
    $sql_service = "SELECT * FROM service";
    $hasil_service = mysqli_query($conn, $sql_service);
    $jmldata_service = mysqli_num_rows($hasil_service);

    $services = array(); // Inisialisasi array untuk menyimpan data layanan

    if ($jmldata_service > 0) {
        while ($row = mysqli_fetch_assoc($hasil_service)) {
            $services[] = $row;
        }
    }

    return $services;
}

function retrievePortfolio($conn) {
    $sql_project = "SELECT * FROM project ORDER BY id DESC LIMIT 6";
    $hasil_project = mysqli_query($conn, $sql_project);
    $jmldata_project = mysqli_num_rows($hasil_project);

    $portfolio = array(); // Inisialisasi array untuk menyimpan data portofolio

    if ($jmldata_project > 0) {
        while ($row_p = mysqli_fetch_assoc($hasil_project)) {
            $portfolio[] = $row_p;
        }
    }

    return $portfolio;
}

// function processContactForm($conn) {
//     $notify = '';
//     $notifyClass = '';

//     if (isset($_POST['submit'])) {
//         // Membuat variabel untuk menerima data dari formulir
//         $email = $_POST['email'];
//         $name = $_POST['name'];
//         $subject = $_POST['subject'];
//         $message = $_POST['message'];

//         // Cek apakah ada data yang belum diisi
//         if (!empty($email) && !empty($name) && !empty($subject) && !empty($message)) {

//             if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//                 $notify = 'Email Anda salah. Silakan ketik alamat email yang benar.';
//                 $notifyClass = 'errordiv';
//             } else {
//                 // Pengaturan penerima email dan subjek email
//                 $toEmail = 'rafimunggaran25@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
//                 $emailSubject = 'Pesan website dari ' . $name;
//                 $htmlContent = '<h2> via Form Kontak Website</h2>
//                     <h4>Nama</h4><p>' . $name . '</p>
//                     <h4>Email</h4><p>' . $email . '</p>
//                     <h4>Subject</h4><p>' . $subject . '</p>
//                     <h4>Message</h4><p>' . $message . '</p>';

//                 // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
//                 $headers = "MIME-Version: 1.0" . "\r\n";
//                 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//                 // Header tambahan
//                 $headers .= 'From: ' . $name . '<' . $email . '>' . "\r\n";

//                 // Kirim email
//                 if (mail($toEmail, $emailSubject, $htmlContent, $headers)) {
//                     $notify = 'Pesan Anda sudah terkirim dengan sukses !';
//                     $notifyClass = 'succdiv';
//                 } else {
//                     $notify = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
//                     $notifyClass = 'errordiv';
//                 }
//             }
//         } else {
//             $notify = 'Harap mengisi semua field data';
//             $notifyClass = 'errordiv';
//         }
//     }

//     return array($notify, $notifyClass);
// }



function hanyaAngka($input){
    $filterInput = preg_replace('/[^0-9]/', '', $input);
    return $filterInput;
}

function CekId($input){
    if (ctype_digit($input)){
        return true;
    }
    else{
        return false;
    }
}
?>