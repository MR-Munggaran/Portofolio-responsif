<html>
<head>
  <title>Form Upload Gambar dengan Nama dan Deskripsi</title>
</head>
<body>
  <h1>Form Upload Gambar dengan Nama dan Deskripsi</h1>
  <form method="post" enctype="multipart/form-data" action="outputData.php">
    <label for="gambar">Pilih Gambar:</label>
    <input type="file" name="gambar" id="gambar">
    <br>
    <label for="namaSaya">Nama Anda:</label>
    <input type="text" name="namaSaya" id="namaSaya">
    <br>
    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi" id="deskripsi"></textarea>
    <br>
    <input type="submit" value="Upload">
  </form>
</body>
</html>
