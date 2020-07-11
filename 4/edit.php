<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DW Tube</title>
    <link rel="stylesheet" href="style.css">
   
  </head>

  <body>
    <header>
      <a href="index.php" class="header-logo">DW Tube</a>
    </header>
    <div class="container">
      <div class="container-header">
        <h1>Edit Data</h1>
      </div>
      <div class="item-form-wrapper">

        <?php 
            include 'koneksi.php';
            $id = $_GET['id'];
            $show = mysqli_query("SELECT * FROM video_tb WHERE id = '$id'");
           
            $data = mysql_fetch_assoc($show);
        ?>

        <form action=" " method="post">
         <p class="form-label">Judul video</p>
          <input type="text" name="title" value="<?php echo $data['id']; ?>">

        <p class="form-label">Kategori</p>
          <input type="text" name="kategori">

        <p class="form-label">Link</p>
          <input type="text" name="link">

        <p class="form-label">Thumnail</p>
          <input type="text" name="img">

          <input type="submit" value="Perbarui">
        </form>
      </div>
      <a href="index.php" class="cancel-button">Kembali</a>
    </div>
  </body>
</html>

<?php 
include 'koneksi.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $simpan= mysqli_query($koneksi, "INSERT INTO video_tb (title,category_id,attache,thumbnail) VALUES
        ('$_POST[title]', '$_POST[kategori]', '$_POST[link]', '$_POST[img]')");
      }
 ?>