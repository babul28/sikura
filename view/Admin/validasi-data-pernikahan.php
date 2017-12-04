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
        <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=dashboard"; ?> ><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
        <li class="treeview active menu-open">
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
              <li class="active"><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-pernikahan"; ?>><i class="fa fa-check-square-o"></i>Validasi Data</a></li>
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
        Data Pernikahan
        <small>Verifikasi Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-check-square-o"></i> Data Pernikahan</a></li>
        <li class="active">Verivikasi Data</li>
      </ol>
  </section>
    <section class="content">
      <!-- /.row -->
      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Verifikasi Data</h3>
            </div>
            <div class="box-body">
              <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-4">
                      <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">  
                        <div class="input-group">
                          <select name="validasi" class="form-control" required>
                            <?php
                              $data = $nikah->getVerifikasiNikah();
                              $data_p = $data_l = $verifikasi = $data;
                              foreach ($verifikasi as $row) {
                                ?>
                              <option value=<?php $value = $row['id_nikah'];  echo $value; ?> > <?php echo $value; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                          <div class="input-group-btn">
                            <button type="submit" name="verifikasi" class="btn btn-success">Verifikasi</button>
                          </div>
                        </div>
                      </form>
                    <?php
                      if(isset($_POST['verifikasi'])){
                        
                        $validasi = $_POST['validasi'];
                        
                        $query = mysqli_query($config->koneksi(), "UPDATE pernikahan SET verifikasi = 'true' WHERE id_nikah = $validasi");

                        if($query != ''){
                          ?>
                          <script>
                            alert("<?php echo 'Validasi Pendaftaran ID_nikah '.$validasi.' Sukses' ?>");
                            window.location="<?php echo "index.php?user=admin&page=validasi-data-pernikahan&id_nikah=".$validasi."&verifikasi=success"?>";
                          </script>
                          <?php
                        }else{?>
                          <script>
                            alert("<?php echo 'Validasi Pendaftaran ID_nikah '.$validasi.' Gagal' ?>");
                            window.location="<?php echo "index.php?user=admin&page=validasi-data-pernikahan&id_nikah=".$validasi."&verifikasi=Failed"?>";
                          </script>
                        <?php
                        }
                      } ?>
                    </div>
                </div>
              </div>
            </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Capin Laki - Laki</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover">
                <tr>
                  <th>ID Nikah</th>
                  <th>NIK</th>
                  <th>No KK</th>
                  <th>Nama Lengkap</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Pekerjaan</th>
                  <th>Verifikasi</th>
                </tr>
                <?php
                  foreach ($data_l as $row) {
                    ?>
                    <tr>
                     <td><p align="center"><?php echo $row['id_nikah']; ?></p></td>
                     <td><?php echo $row['NIK_l']; ?></td>
                     <td><?php echo $row['KK_l']; ?></td>
                     <td><?php echo $row['nama_lengkap_l']; ?></td>
                     <td><?php echo $row['tanggal_lahir_l']; ?></td>
                     <td><?php echo $row['alamat_l']; ?></td>
                     <td><?php echo $row['agama_l']; ?></td>
                     <td><?php echo $row['pekerjaan_l']; ?></td>
                     <td><span class="label label-danger" style="align-content: center;padding-left: 16px;padding-right: 16px;">False</span></td>
                    </tr>                    
                    <?php
                  }
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Capin Perempuan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-hover">
                <tr>
                  <th>ID Nikah</th>
                  <th>NIK</th>
                  <th>No KK</th>
                  <th>Nama Lengkap</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Pekerjaan</th>
                  <th>Verifikasi</th>
                </tr>
                <?php
                  foreach ($data_p as $row) {
                    ?>
                    <tr>
                     <td><p align="center"><?php echo $row['id_nikah']; ?></p></td>
                     <td><?php echo $row['NIK_p']; ?></td>
                     <td><?php echo $row['KK_p']; ?></td>
                     <td><?php echo $row['nama_lengkap_p']; ?></td>
                     <td><?php echo $row['tanggal_lahir_p']; ?></td>
                     <td><?php echo $row['alamat_p']; ?></td>
                     <td><?php echo $row['agama_p']; ?></td>
                     <td><?php echo $row['pekerjaan_p']; ?></td>
                     <td><span class="label label-danger" style="align-content: center;padding-left: 16px;padding-right: 16px;">False</span></td>
                    </tr>                    
                    <?php
                  }
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      
    </section>
</div>