<?php include"../koneksi.php"; ?>
<?php include"../header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Barang Selesai
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
              <h3 class="box-title">Daftar Barang Selesai</h3>
            </div>
            <br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Repeat Order</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>

                <?php
                  $get_selesai = mysqli_query($koneksi,"SELECT * FROM barang WHERE selesai = '5'");
                  while($r_selesai = mysqli_fetch_array($get_selesai)){
                    $barang = $rselesai['nama_barang'];
                    $id = $rselesai['id_barang'];
                ?>
                <tr>
                  <td><?php echo $barang; ?></td>
                  <td><a href="repeat.php?id=<?php echo $r_selesai['id_barang']; ?>"><b> Repeat </b></a></td>
                  <td><a href="hapus.php?id=<?php echo $r_selesai['id_barang']; ?>"><b> Hapus </b></a></td>
                </tr>
                <?php } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Barang</th>
                  <th>Repeat Order</th>
                  <th>Hapus</th>
                </tr>
                </tfoot>
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
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
