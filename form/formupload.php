<!DOCTYPE html>
<html>
<head>
  <title>Form Upload Gambar</title>
</head>
<body>
  <h1>Form Upload Gambar</h1>
  <form method="post" enctype="multipart/form-data" action="inputImg.php">
    <input type="file" name="gambar"> <!-- Input gambar -->
    <input type="text" name="judul" placeholder="Judul"> <!-- Input judul -->
    <textarea name="ket" placeholder="Deskripsi"></textarea> <!-- Input deskripsi -->
    <input type="text" name="link" placeholder="Tautan"> <!-- Input tautan/link -->
    <input type="submit" value="Upload">
  </form>
</body>
</html>
