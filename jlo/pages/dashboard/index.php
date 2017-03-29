<?php include"../koneksi.php"; ?>
<?php include"../header.php"; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small><?php echo date('M | Y'); ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php $get_selesai = mysqli_query($koneksi,"SELECT * FROM barang WHERE selesai = '5'"); ?>
              <h3><?php echo mysqli_num_rows($get_selesai); ?></h3>

              <p>Barang Selesai</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php $get_unit = mysqli_query($koneksi,"SELECT * FROM unit_mesin"); ?>
              <h3><?php echo mysqli_num_rows($get_unit); ?></h3>

              <p>Total Unit Mesin</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php $get_akun = mysqli_query($koneksi,"SELECT * FROM akun"); ?>
              <h3><?php echo mysqli_num_rows($get_akun); ?></h3>

              <p>Jumlah Akun</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php $get_notif = mysqli_query($koneksi,"SELECT * FROM notifikasi WHERE view = '0'"); ?>
              <h3><?php echo mysqli_num_rows($get_notif); ?></h3>

              <p>Unread Notification</p>
            </div>
            <div class="icon">
              <i class="ion ion-email-unread"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

<?php include"../footer.php"; ?>