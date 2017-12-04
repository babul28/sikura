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
      <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id_nikah" class="col-sm-4 control-label">ID Daftar</label>
                      <div class="col-sm-6">
                        <input type="text" class='form-control' name="id_nikah" value=<?php echo $id;?> disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tanggal" class="col-sm-4 control-label">Tanggal Pernikahan</label>
                      <div class="col-sm-6">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="date" name="tanggal" class="form-control" value=<?php echo $data; ?>>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tempat" class="col-sm-4 control-label">Tempat Pernikahan</label>
                      <div class="col-sm-6">
                        <select name="tempat" class="form-control">
                          <option value="KUA">KUA</option>
                          <option value="Rumah">Rumah</option>
                          <option value="Masjid">Masjid</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="penghulu" class="col-sm-4 control-label">Penghulu</label>
                      <div class="col-sm-6">
                        <select name="penghulu" class="form-control">
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
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal"><a href="index.php?user=admin&page=dokumen-pernikahan" style="color: white;">Back</a></button>
                <button type="submit" name="update" class="btn btn-success">Update</button>
              </div>
            </form>
            <?php
              if(isset($_POST['update'])){
                $tanggal_pernikahan = $_POST['tanggal'];
                $tempat_pernikahan  = $_POST['tempat'];
                $id_penghulu        = $_POST['penghulu'];

                $query = mysqli_query($config->koneksi(), "UPDATE data_pernikahan SET tempat_pernikahan = '$tempat_pernikahan', tanggal_pernikahan = '$tanggal_pernikahan', penghulu = '$id_penghulu' WHERE id_nikah = $id");

                if($query != ''){?>
                  <script>
                    alert("<?php echo 'Dokumen Pernikahan dengan Id Pendaftaran '.$id.' Sukses di edit' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-pernikahan&id_nikah=".$id."&edit+dokumen+pernikahan=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Dokumen Pernikahan dengan Id Pendaftaran '.$id.' Gagal di edit' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-pernikahan&id_nikah=".$id."&edit+dokumen+pernikahan=failed"?>";
                  </script>
                <?php
                }
              }
            ?>
            </div>
            <!-- /.modal-content -->
          </div>
  </section>
</div>

