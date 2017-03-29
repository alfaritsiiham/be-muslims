<?php include"../koneksi.php"; ?>
<?php include"../header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Notifikasi
        <small><?php echo date('M | Y'); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Notifikasi</h3>
            </div>
            <br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Title</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php
                  $get_notif = mysqli_query($koneksi,"SELECT * FROM notifikasi");
                  while($r_notif = mysqli_fetch_array($get_notif)){
                    $judul = $r_notif['judul'];
                    $title = $r_notif['title'];
                    $tanggal = $r_notif['created_at'];
                    $jenis = $r_notif['jenis'];
                    $id = $r_notif['id_notifikasi'];
                ?>
                <tr>
                  <td><?php if($r_notif['view'] == '0'){ echo "<b> * $judul </b>"; }else{ echo "$judul"; } ?></td>
                  <td><?php if($r_notif['view'] == '0'){ echo "<b><i> * $title </i></b>"; }else{ echo "<i> $title </i>"; } ?></td>
                  <td><?php if($r_notif['view'] == '0'){ echo "<b> $tanggal </b>"; }else{ echo "$tanggal"; } ?></td>
                  <td><a href="view.php?id=<?php echo $id; ?> "><b> View </b></a></td>
                </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
<?php include"../footer.php"; ?>

<!-- jQuery 2.2.3 -->
<script src="<?php echo $base_url; ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $base_url; ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $base_url; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $base_url; ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo $base_url; ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $base_url; ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base_url; ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $base_url; ?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
