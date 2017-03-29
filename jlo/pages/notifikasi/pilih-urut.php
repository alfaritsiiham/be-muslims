<?php include"../koneksi.php"; ?>
<?php include"../header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pilih Urutan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notifikasi</a></li>
        <li class="active">Pilih Urutan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pilih Urutan Pindah</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

                    <?php
                      $unit = $_POST['unit'];
                      $tabel_mesin = $_POST['tabel_mesin'];
                      $barang = $_POST['barang'];
                      $id_pekerjaan = $_POST['id_pekerjaan'];
                      $id_notif = $_POST['id_notif'];
                    ?>

                      <form name="unit" method="post" action="">

                          <input name="unit" type="hidden" value="$unit">
                          <input name="tabel_mesin" type="hidden" value="$tabel_mesin">
                          <input name="barang" type="hidden" value="$barang">
                          <input name="id_pekerjaan" type="hidden" value="$id_pekerjaan">
                          <input name="id_notif" type="hidden" value="$id_notif">

                              &nbsp; pada Urutan :
                                <select name="nomer">
                                <option value="0">Paling Atas</option>

                                  <?php
                                    $get_pekerjaan = mysqli_query($koneksi,"SELECT * FROM $tabel_mesin WHERE unit_mesin = '$unit' AND status = 'Pending'");
                                    while($r_pekerjaan = mysqli_fetch_array($get_pekerjaan)){
                                  ?>
                                      <option value="<?php echo $r_pekerjaan['nomor_urut']; ?>">Setelah <?php echo $r_pekerjaan['nama_barang']; ?></option>
                                  <?php } ?>
                                </select>

                                <br><br><br>

                                <center><input type="submit" name="selesai" class="btn btn-primary" value="Selesai"></center>
                      </form>

                      <?php
                        if(isset($_POST['selesai'])){
                          $unit = $_POST['unit'];
                          $tabel_mesin = $_POST['tabel_mesin'];
                          $barang = $_POST['barang'];
                          $id_pekerjaan = $_POST['id_pekerjaan'];
                          $id_notif = $_POST['id_notif'];
                          $no = $_POST['nomer'] + 1;

                          $insert = mysqli_query($koneksi,"UPDATE $tabel_mesin SET nama_barang = '$barang', status = 'Pending', unit_mesin = '$unit' WHERE id_pekerjaan = '$id_pekerjaan'");
                          $get_nomor = mysqli_query($koneksi,"UPDATE $tabel_mesin SET nomor_urut = nomor_urut + 1 WHERE unit_mesin = '$unit' AND nomor_urut > '$no' AND id_pekerjaan != '$id_pekerjaan' AND status = 'Pending'");

                                if($get_nomor && $insert){
                                  $nomers = mysqli_query($koneksi,"UPDATE $tabel_mesin SET nomor_urut = '$no' WHERE id_pekerjaan = '$id_pekerjaan'");
                                  if($nomers){
                                    header('location:index.php');
                                  }else{
                                    echo "<center><h1> MAAF ADA KESALAHANs! </h1></center>";
                                    echo "<a href='tambah-mesin.php'>Oke</a>";
                                  }
                                }else{
                                  echo "<center><h1> MAAF ADA KESALAHAN! </h1></center>";
                                  echo "<a href='tambah-mesin.php'>Oke</a>";
                                }
                        }
                      ?>

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
