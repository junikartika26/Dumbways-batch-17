<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DW Tube</title>
    <link rel="stylesheet" href="style.css">
    <script src="send_url.js"></script>
  </head>
  <body>
    <header>
      <a href="index.php" class="header-logo">DW Tube</a>
    </header>
    <div class="container">
      <div class="container-header">
       <h1>Tambah Kategori</h1>
      </div>
      <div class="item-form-wrapper">
        <p class="form-label">Apa kategori yang ingin anda tambahkan ?</p>
        <form action=" " method="post">
          <input type="text" name="name">
          <input type="submit" value="Tambahkan">
        </form>
      </div>
      <a href="index.php" class="cancel-button">Kembali</a>
    </div>
  </body>
</html>

<?php 
include 'koneksi.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $simpan= mysqli_query($koneksi, "INSERT INTO category_tb (name) VALUES
        ('$_POST[name]')");
      }
 ?>