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

        <a href="add.php" class="new-button">Tambah Kategori</a>
        <a href="add_data.php" class="new-button">Tambah Data</a>
      </div>
      <div class="index-table-wrapper">
        <div class="table-head">
          <span class="id-column">No</span>
          <span>Title</span>
          <span>Tumbnail</span>
        </div>

        <?php 
            include "koneksi.php";
            $no=1;
            $show = mysqli_query($koneksi, "SELECT * FROM video_tb");
            //$data=mysqli_fetch_array($show);
           while ($d = mysqli_fetch_array($show)) {
              echo "<tr>
                    <td>$no</td>
                    <td>$d[title]</td>
                    <td>$d[thumbnail]</td>
                                        <br/>
                    </tr>";
              $no++;
            }
         ?>

      </div>
    </div>
  </body>
</html>
