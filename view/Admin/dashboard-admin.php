  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src=<?php echo $_SESSION['foto']; ?> class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!---menu-->
        <li class="active"><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=dashboard"; ?> ><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-heart"></i>
            <span>Data Pernikahan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!--level one-->
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i>
                <span>Data Pendaftaran</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <!--level two-->
              <ul class="treeview-menu">
                <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-capin-pria"; ?>><i class="fa fa-male"></i>Data Capin Pria</a></li>
                <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-capin-wanita"; ?>><i class="fa fa-female"></i>Data Capin Wanita</a></li>
              </ul>
              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-pernikahan"; ?>><i class="fa fa-check-square-o"></i>Validasi Data</a></li>
              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=dokumen-pernikahan"; ?>><i class="fa fa-folder"></i>Dokumen Pernikahan </a></li>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-heartbeat"></i>
            <span>Data Perceraian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!--level one-->
          <ul class="treeview-menu">
            <li class="treeview">
              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-pendaftaran-cerai"; ?>><i class="fa fa-file-text"></i>Data Pendaftaran</a></li>
              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-cerai"; ?>><i class="fa fa-check-square-o"></i>Validasi Data</a></li>
              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=dokumen-perceraian"; ?>><i class="fa fa-folder"></i>Dokumen Perceraian</a></li>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-venus-mars"></i>
            <span>Data Rujuk Nikah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!--level one-->
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i>
                <span>Data Pendaftaran</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <!--level two-->
              <ul class="treeview-menu">
                <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-rujuk-pria"; ?>><i class="fa fa-male"></i>Data Pria</a></li>
                <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-rujuk-wanita"; ?>><i class="fa fa-female"></i>Data Wanita</a></li>
              </ul>

              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-rujuk"; ?>><i class="fa fa-check-square-o"></i>Validasi Data</a></li>
              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=dokumen-rujuk"; ?>><i class="fa fa-folder"></i>Dokumen Rujuk</a></li>
          </ul>
        </li>
        <li class="treeview">
            <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-penghulu"; ?>><i class="fa  fa-user-plus"></i>Data Penghulu</a></li>
        </li>
        <li class="treeview">
            <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-user"; ?>><i class="fa fa-users"></i>Data User</a></li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cog"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!--level one-->
          <ul class="treeview-menu">
            <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=profile"; ?>><i class="fa fa-user"></i>Profile Admin</a></li>
            <li><a href="?login=logout"><i class="fa fa-power-off"></i>Logout</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
    </section>
      <section class="content">
      <div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-green-active">
              <h3 class="widget-user-username"><?php echo $_SESSION['nama']; ?></h3>
              <h5 class="widget-user-desc">Administrator</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src=<?php echo $_SESSION['foto']; ?> alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <br>
                    <h5 class="description-header"><?php $query = $nikah->getCapinPria(); $jnikah = count($query); echo $jnikah ?></h5>
                    <span class="description-text">Pernikahan</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <br>
                    <h5 class="description-header"><?php $query = $cerai->getCerai(); $jcerai = count($query); echo $jcerai ?></h5>
                    <span class="description-text">Perceraian</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <br>
                    <h5 class="description-header"><?php $query = $rujuk->getPria(); $jrujuk = count($query); echo $jrujuk ?></h5>
                    <span class="description-text">Rujuk Nikah</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-md-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jnikah ?></h3>

              <p>Pernikahan</p>
            </div>
            <div class="icon">
              <i class="fa fa-venus-mars"></i>
            </div>
            <a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-pernikahan"; ?> class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $jcerai ?></h3>

              <p>Perceraian</p>
            </div>
            <div class="icon">
              <i class="fa fa-code-fork"></i>
            </div>
            <a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-cerai"; ?> class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $jrujuk ?></h3>

              <p>Rujuk Nikah</p>
            </div>
            <div class="icon">
              <i class="fa fa-refresh"></i>
            </div>
            <a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-rujuk"; ?> class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-md-2 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php $query = $pegawai->getDataPegawai(); $count = count($query); echo $count ?></h3>

              <p>Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-user"; ?> class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <?php $query = $nikah->getVerifikasiNikah(); $jvernikah = count($query); $query = mysqli_query($config->koneksi(), "SELECT * FROM pernikahan WHERE verifikasi != 'false'"); $jtnikah = mysqli_num_rows($query); ?>
        <?php $query = $cerai->getVerifikasiCerai(); $jvercerai = count($query); $query = mysqli_query($config->koneksi(), "SELECT * FROM perceraian WHERE verifikasi != 'false'"); $jtcerai = mysqli_num_rows($query); ?>
        <?php $query = $rujuk->getVerifikasiRujuk(); $jverrujuk = count($query); $query = mysqli_query($config->koneksi(), "SELECT * FROM rujuk WHERE verifikasi != 'false'"); $jtrujuk = mysqli_num_rows($query); ?>

        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Data Pendaftaran</span>
              <?php $total = ($data1 = $jtnikah+$jtcerai+$jtrujuk)/($data2 = $jnikah+$jcerai+$jrujuk)*100; ?>
              <span class="info-box-number"><?php echo $data1.'/'.$data2; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $total.'%'; ?>"></div>
              </div>
                  <span class="progress-description"><?php echo $total.'%'; ?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">


        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-maroon">
            <span class="info-box-icon"><i class="fa fa-heart"></i></span>
            
            <div class="info-box-content">
              <span class="info-box-text">Data Pernikahan</span>
              <span class="info-box-number"><?php echo $jtnikah.'/'.$jnikah; ?></span>

              <div class="progress">
                <?php $total = ($jtnikah/$jnikah)*100 ?>
                <div class="progress-bar" style="width: <?php echo $total.'%'; ?>"></div>
              </div>
                  <span class="progress-description">
                    <?php echo $total.'%'; ?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-heartbeat"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Perceraian</span>
              <span class="info-box-number"><?php echo $jtcerai.'/'.$jcerai; ?></span>

              <div class="progress">
                <?php $total = ($jtcerai/$jcerai)*100 ?>
                <div class="progress-bar" style="width: <?php echo $total.'%'; ?>"></div>
              </div>
                  <span class="progress-description">
                    <?php echo $total.'%'; ?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
            <span class="info-box-icon"><i class="fa fa-venus-mars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Rujuk Nikah</span>
              <span class="info-box-number"><?php echo $jtrujuk.'/'.$jrujuk; ?></span>

              <div class="progress">
                <?php $total = ($jtrujuk/$jcerai)*100 ?>
                <div class="progress-bar" style="width: <?php echo $total.'%'; ?>"></div>
              </div>
                  <span class="progress-description">
                    <?php echo $total.'%'; ?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div> 

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Rekap Data Tiap Bulan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Kantor Urusan Agama</strong>
                  </p>

                  <div class="box-body">
                    <div class="chart">
                      <canvas id="areaChart" style="height:250px"></canvas>
                    </div>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Detail Pendaftaran Online</strong>
                  </p>
                  <?php $total = $jnikah+$jrujuk+$jcerai; $tnikah = ($jnikah/$total)*100; $tcerai = ($jcerai/$total)*100; $trujuk = ($jrujuk/$total)*100; ?>
                  <div class="progress-group">
                    <span class="progress-text">Daftar Pernikahan</span>
                    <span class="progress-number"><?php echo '<b>'.$jnikah.'</b>/'.$total ?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: <?php echo $tnikah.'%' ?>"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Daftar Perceraian</span>
                    <span class="progress-number"><?php echo '<b>'.$jcerai.'</b>/'.$total ?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: <?php echo $tcerai.'%' ?>"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Daftar Rujuk Nikah</span>
                    <span class="progress-number"><?php echo '<b>'.$jrujuk.'</b>/'.$total ?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: <?php echo $trujuk.'%' ?>"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Total</span>
                    <span class="progress-number"><?php echo '<b>'.$total.'</b>/'.$total ?></span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
    </section>
</div>


<?php
  
  for ($i=1; $i <= 12; $i++) { 
    $query = mysqli_query($config->koneksi(), "SELECT tanggal_daftar FROM pernikahan WHERE YEAR(CURRENT_DATE()) = YEAR(tanggal_daftar) AND MONTH(tanggal_daftar) = '$i'");
    $nikah_bulan[$i] = mysqli_num_rows($query);

    $query = mysqli_query($config->koneksi(), "SELECT tanggal_daftar FROM perceraian WHERE YEAR(CURRENT_DATE()) = YEAR(tanggal_daftar) AND MONTH(tanggal_daftar) = '$i'");
    $cerai_bulan[$i] = mysqli_num_rows($query);

    $query = mysqli_query($config->koneksi(), "SELECT tanggal_daftar FROM rujuk WHERE YEAR(CURRENT_DATE()) = YEAR(tanggal_daftar) AND MONTH(tanggal_daftar) = '$i'");
    $rujuk_bulan[$i] = mysqli_num_rows($query);

    $jumlah[$i] = intval($nikah_bulan[$i])+intval($cerai_bulan[$i])+intval($rujuk_bulan[$i]);
  }
?>