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
              <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=validasi-data-pernikahan"; ?>><i class="fa fa-check-square-o"></i>Validasi Data</a></li>
              <li class="active"><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=dokumen-pernikahan"; ?>><i class="fa fa-folder"></i>Dokumen Pernikahan </a></li>
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
          <a href="#">
            <i class="fa  fa-cog"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!--level one-->
          <ul class="treeview-menu">
            <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=profile"; ?>><i class="fa fa-user"></i>profile User</a></li>
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
        <small>Dokumen Pernikahan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-folder"></i> Data Pernikahan</a></li>
        <li class="active">Dokumen Pernikahan</li>
      </ol>
  </section>
  <section class="content">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Dokumen Pernikahan</h3>
      </div>
      <div class="box-body table-responsive">
          <div class="form-group col-md-12">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Input Data</button>
          </div>
              <table class="table table-hover">
                <tr>
                  <th style="text-align: center;">ID_Dok</th>
                  <th style="text-align: center;">ID_Nik</th>
                  <th style="text-align: center;">Mempelai Pria</th>
                  <th style="text-align: center;">Mempelai Wanita</th>
                  <th style="text-align: center;">Tanggal Pernikahan</th>
                  <th style="text-align: center;">Tempat Pernikahan</th>
                  <th style="text-align: center;">Penghulu</th>
                  <th style="text-align: center;">Action</th>
                </tr>
                <?php
                  $data_pernikahan = $nikah->getDokumenPernikahan();
                  foreach ($data_pernikahan as $row) {?>
                  <tr>
                    <td style="text-align: center;"><?php echo $row['id_dok_nik']; ?></td>
                    <td style="text-align: center;"><?php echo $row['id_nikah']; ?></td>
                    <td style="text-align: center;"><?php echo $row['nama_lengkap_l']; ?></td>
                    <td style="text-align: center;"><?php echo $row['nama_lengkap_p']; ?></td>
                    <td style="text-align: center;"><?php echo $row['tanggal_pernikahan']; ?></td>
                    <td style="text-align: center;"><?php echo $row['tempat_pernikahan']; ?></td>
                    <td style="text-align: center;"><?php echo $row['nama_penghulu']; ?></td>
                    <td>
                      <span class="btn btn-block btn-xs btn-warning"><a href=<?php echo "index.php?user=admin&page=edit-dokumen-pernikahan&id_nikah=".$row['id_nikah']."&act=edit-dokumen-nikah"; ?> style="color: white;">Edit</a></span>
                      <span class="btn btn-block btn-xs btn-danger"><a href=<?php echo "index.php?user=admin&page=dokumen-pernikahan&id_nikah=".$row['id_nikah']."&act=hapus-dokumen-nikah"; ?> onclick="return confirm('Apakah Anda Yakin ?');" style="color: white;">Delete</a></span>
                    </div>
                    </td>
                  </tr>
                  <?php
                }?>
              </table>
        </div>
    </div>
        <div class="modal modal-success fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Input Data Dokumen Pernikahan</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id_nikah" class="col-sm-4 control-label">ID Daftar</label>
                      <div class="col-sm-6">
                        <select name="id_nikah" class="form-control" required>
                          <?php
                          $nikah = mysqli_query($config->koneksi(), "SELECT * FROM pernikahan p WHERE NOT EXISTS (SELECT id_nikah FROM data_pernikahan WHERE id_nikah = p.id_nikah) AND verifikasi != 'false'");
                          foreach ($nikah as $row) {
                            ?>
                          <option value="<?php $value = $row['id_nikah']; echo $value ?>"><?php echo $value ?></option>
                          <?php
                          }?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tanggal_pernikahan" class="col-sm-4 control-label">Tanggal Pernikahan</label>
                      <div class="col-sm-6">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="date" name="tanggal_pernikahan" class="form-control" values='Y-m-d' required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tempat_pernikahan" class="col-sm-4 control-label">Tempat Pernikahan</label>
                      <div class="col-sm-6">
                        <select name="tempat_pernikahan" class="form-control">
                          <option value="KUA">KUA</option>
                          <option value="Rumah">Rumah</option>
                          <option value="Masjid">Masjid</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="id_penghulu" class="col-sm-4 control-label">Penghulu</label>
                      <div class="col-sm-6">
                        <select name="id_penghulu" class="form-control">
                          <?php
                          $nikah = mysqli_query($config->koneksi(), "SELECT id_penghulu, nama_penghulu FROM penghulu");
                          foreach ($nikah as $row) {
                            ?>
                          <option value="<?php echo $row['id_penghulu'];?>"><?php echo $row['nama_penghulu'] ?></option>
                          <?php
                          }?>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
            <?php
              if(isset($_POST['submit'])){
                $id_nikah           = $_POST['id_nikah'];
                $tanggal_pernikahan = $_POST['tanggal_pernikahan'];
                $tempat_pernikahan  = $_POST['tempat_pernikahan'];
                $id_penghulu        = $_POST['id_penghulu'];

                $query = $config->koneksi()->query("INSERT INTO data_pernikahan VALUES ('', '$id_nikah', '$tanggal_pernikahan', '$tempat_pernikahan', '$id_penghulu')");
                if($query != ''){?>
                  <script>
                    alert("<?php echo 'Dokumen Pernikahan dengan Id Pendaftaran '.$id_nikah.' Sukses' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-pernikahan&id_nikah=".$id_nikah."&input+dokumen+pernikahan=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Dokumen Pernikahan dengan Id Pendaftaran '.$id_nikah.' Gagal' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-pernikahan&id_nikah=".$id_nikah."&input+dokumen+pernikahan=failed"?>";
                  </script>
                <?php
                }
              }
            ?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
  </section>
</div>

