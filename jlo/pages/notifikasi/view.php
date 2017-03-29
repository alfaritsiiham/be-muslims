<?php include"../koneksi.php"; ?>
<?php include"../header.php"; ?>
<?php
  $id = $_GET['id'];
  $get_notif = mysqli_query($koneksi,"SELECT * FROM notifikasi WHERE id_notifikasi = '$id'");
  $r_notif = mysqli_fetch_array($get_notif);
    mysqli_query($koneksi,"UPDATE notifikasi SET view = '1' WHERE id_notifikasi = '$id'") or die ($koneksi);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Notifikasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notifikasi</a></li>
        <li class="active"><?php echo $r_notif['judul']; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $r_notif['judul']; ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="col-md-6">
          <?php
            if($r_notif['jenis'] == 'Selesai'){
              $barang = $r_notif['nama_barang'];
              $get_barang = mysqli_query($koneksi,"SELECT * FROM barang WHERE nama_barang = '$barang'");
              $r_barang = mysqli_fetch_array($get_barang);

              echo "<table>";
              echo "<tr>";
              echo "<td>Nama Barang &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$barang."</td>";
              echo "</tr><tr>";
              echo "<td>Deadline &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_barang['deadline']."</td>";
              echo "</tr><tr>";
              echo "<td>Jumlah Pesan &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_barang['jumlah_pesanan']."</td>";
              echo "</tr><tr>";
              echo "<td>Jumlah Cacat &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_notif['jumlah_cacat']."</td>";
              echo "</tr><tr>";
              echo "<td>Jumlah Total Sisa &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_notif['total_sisa']."</td>";
              echo "</tr><tr>";
              echo "<td>Start &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_notif['start']."</td>";
              echo "</tr><tr>";

              if($r_notif['pending'] && $r_notif['start_again'] != NULL){
                echo "<td>Pending &nbsp; </td>";
                echo "<td> &nbsp; : &nbsp;".$r_notif['finish']."</br>";
                echo "</tr><tr>";
                echo "<td>Start Again &nbsp; </td>";
                echo "<td> &nbsp; : &nbsp;".$r_notif['finish']."</br>";
                echo "</tr><tr>";
              }else{}

              echo "<td>Finish &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_notif['finish']."</br>";
              echo "</tr>";
              echo "</table>";
              echo "<br>Pesan untuk admin : <br>";
              echo $r_notif['isi']."<br><br>";

            }else if($r_notif['jenis'] == 'Pending' && $r_notif['pindah'] == ''){
              $barang = $r_notif['nama_barang'];
              $get_barang = mysqli_query($koneksi,"SELECT * FROM barang WHERE nama_barang = '$barang'");
              $r_barang = mysqli_fetch_array($get_barang);

              echo "<table>";
              echo "<tr>";
              echo "<td>Nama Barang &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$barang."</td>";
              echo "</tr><tr>";
              echo "<td>Deadline &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_barang['deadline']."</td>";
              echo "</tr><tr>";
              echo "<td>Jumlah Pesan &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_barang['jumlah_pesanan']."</td>";
              echo "</tr><tr>";
              echo "<td>Start &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_notif['start']."</td>";
              echo "</tr>";
              echo "</table>";
              echo "<br>Alasan Pending : <br>";
              echo $r_notif['isi']."<br><br>";

            }else if($r_notif['jenis'] == 'Pending' && $r_notif['pindah'] == 'Pindah'){
              $barang = $r_notif['nama_barang'];
              $tabel_mesin = $r_notif['tabel_mesin'];
              $id_notif = $r_notif['id_notifikasi'];

              $get_barang = mysqli_query($koneksi,"SELECT * FROM barang WHERE nama_barang = '$barang'");
              $get_pekerjaan = mysqli_query($koneksi,"SELECT * FROM mesin_printing WHERE nama_barang = '$barang'");
              $r_barang = mysqli_fetch_array($get_barang);
              $r_pekerjaan = mysqli_fetch_array($get_pekerjaan);
              $id_pekerjaan = $r_pekerjaan['id_pekerjaan'];

              echo "<table>";
              echo "<tr>";
              echo "<td>Nama Barang &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$barang."</td>";
              echo "</tr><tr>";
              echo "<td>Deadline &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_barang['deadline']."</td>";
              echo "</tr><tr>";
              echo "<td>Jumlah Pesan &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_barang['jumlah_pesanan']."</td>";
              echo "</tr><tr>";
              echo "<td>Start &nbsp; </td>";
              echo "<td> &nbsp; : &nbsp;".$r_notif['start']."</td>";
              echo "</tr>";
              echo "</table>";
              echo "<br>Alasan Pending : <br>";
              echo $r_notif['isi']."<br><br>";

              echo "Pindah Ke : &nbsp; &nbsp; <i><small>Pilih dropdown dibawah</small></i> <br><br>";

              echo "<form method='post' action='pilih-urut.php'>";
              $get_unit = mysqli_query($koneksi,"SELECT * FROM unit_mesin WHERE jenis_mesin = '$tabel_mesin'");

              echo "<input name='tabel_mesin' type='hidden' value='$tabel_mesin'>";
              echo "<input name='barang' type='hidden' value='$barang'>";
              echo "<input name='id_notif' type='hidden' value='$id_notif'>";
              echo "<input name='id_pekerjaan' type='hidden' value='$id_pekerjaan'>";

              echo "<select name='unit'>";
              while($r_unit = mysqli_fetch_array($get_unit)){
                $nama = $r_unit['nama_unit'];
                echo "<option value='$nama'>$nama</option>";
              }
              echo "</select> &nbsp; &nbsp;";

              echo "<input name='submit' value='Kirim' class='btn btn-primary' type='submit'>";
 
              echo "</form>";
              echo "<br><br>";
            }
          ?>
        </div>

        <div class="col-md-6" style="padding: 20px">
          <img src="<?php echo $url_img; ?>/photo1.png" width="400px" height="200px">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include"../footer.php"; ?>
 
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
</body>
</html>
