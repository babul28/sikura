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
            <li class="active"><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-penghulu"; ?>><i class="fa  fa-user-plus"></i>Data Penghulu</a></li>
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
        Data Penghulu
        <small>Manajemen Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-plus"></i> Data Penghulu</a></li>
      </ol>
  </section>
  <section class="content">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Data Penghulu</h3>
      </div>
      <div class="modal-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id_penghulu" class="col-sm-3 control-label">Id Penghulu</label>
                      <div class="col-sm-7">
                        <input type="text" name="id_penghulu" class="form-control" value=<?php echo $data['id_penghulu']; ?> disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_penghulu" class="col-sm-3 control-label">Nama Penghulu</label>
                      <div class="col-sm-7">
                        <input type="text" name="nama_penghulu" class="form-control" value=<?php echo $data['nama_penghulu']; ?> placeholder="Nama Penghulu">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                      <div class="col-sm-7">
                        <input type="text" name="alamat" class="form-control" value=<?php echo $data['alamat']; ?> placeholder="Alamat">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-3 col-sm-offset-3">
                        <input type="text" name="kota" class="form-control" value=<?php echo $data['kota']; ?> placeholder="Kota">
                      </div>
                      <div class="col-sm-2" style="padding-left: 0px;">
                        <select name="provinsi" class="form-control">
                          <option value="Jawa Timur">Jawa Timur</option>
                          <option value="Jawa Tengah">Jawa Tengah</option>
                          <option value="Jawa Barat">Jawa Barat</option>
                        </select>
                      </div>
                      <div class="col-sm-2" style="padding-left: 0px;">
                        <input type="number" name="kode_pos" class="form-control" value=<?php echo $data['kode_pos']; ?> placeholder="Kode Pos">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                      <div class="col-sm-7">
                        <select name="jabatan" class="form-control">
                          <option value="Pegawai">Pegawai</option>
                          <option value="Ketua KUA">Ketua KUA</option>
                          <option value="Wakil Ketua KUA">Wakil Ketua KUA</option>
                          <option value="Sekretaris">Sekretaris</option>
                          <option value="Bendahara">Bendahara</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal"><a href="index.php?user=admin&page=data-penghulu" style="color: white;">Close</a></button>
                <button type="submit" name="Add" class="btn btn-success">Add</button>
              </div>
            </form>
            <?php
              if(isset($_POST['Add'])){
                $nama_penghulu           = $_POST['nama_penghulu'];
                $alamat                  = $_POST['alamat'];
                $kota                    = $_POST['kota'];
                $provinsi                = $_POST['provinsi'];
                $kode_pos                = $_POST['kode_pos'];
                $jabatan                 = $_POST['jabatan'];

                $query = $config->koneksi()->query("UPDATE penghulu SET nama_penghulu = '$nama_penghulu', alamat = '$alamat', kota = '$kota', provinsi = '$provinsi', kode_pos = '$kode_pos', jabatan = '$jabatan' WHERE id_penghulu = $id");
                if($query != ''){?>
                  <script>
                    alert("<?php echo 'Edit data penghulu dengan nama '.$nama_penghulu.' Sukses' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-penghulu&id_penghulu=".$id."&edit+data+penghulu=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Edit data penghulu dengan nama '.$nama_penghulu.' Gagal' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-penghulu&id_penghulu=".$id."&edit+data+penghulu=failed"?>";
                  </script>
                <?php
                }
              }
            ?>
            </div>
            <!-- /.modal-content -->
          </div>
    </div>
  </section>
</div>