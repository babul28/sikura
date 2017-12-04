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
            <li><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-penghulu"; ?>><i class="fa  fa-user-plus"></i>Data Penghulu</a></li>
        </li>
        <li class="treeview">
            <li class="active"><a href=<?php echo "index.php?user=".$_SESSION['level_user']."&page=data-user"; ?>><i class="fa fa-users"></i>Data User</a></li>
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
        Data User
        <small>Manajemen User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-group"></i> Data User</a></li>
      </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-4">
        <div class="box box-success">
          <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src=<?php echo $data['foto']; ?> alt="User profile picture">
              <h3 class="profile-username text-center"><?php echo $data['nama'] ?></h3>
              <p class="text-muted text-center">Pegawai Kantor Urusan Agama</p>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b style="padding-left: 15px;">Nama Lengkap</b>
                  <b class='pull-right' style="padding-right: 15px;"><?php echo $data['nama'] ?></b>
                </li>
                <li class="list-group-item">
                  <b style="padding-left: 15px;">Username</b>
                  <b class='pull-right' style="padding-right: 15px;"><?php echo $data['username']; ?></b>
                </li>
                <li class="list-group-item">
                  <b style="padding-left: 15px;">Password</b>
                  <b class='pull-right' style="padding-right: 15px;"><?php echo $data['password'] ?></b>
                </li>
                <li class="list-group-item">
                  <b style="padding-left: 15px;">Image</b>
                  <b class='pull-right' style="padding-right: 15px;"><?php echo $data['foto'] ?></b>
                </li>
                <li class="list-group-item">
                  <button type='button' class="btn btn-success col-md-offset-5 col-sm-offset-5 col-xs-offset-5" disabled><a href='' style="color: white;">Edit</a></button>
                </li>
              </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="box box-success">
          <div class="box-body">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="nama_user" class="col-sm-4 control-label">Nama User</label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_user" class="form-control" value='<?php echo $data['nama'] ?>' placeholder="Nama User">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="username" class="col-sm-4 control-label">Username</label>
                      <div class="col-sm-6">
                        <input type="text" name="username" class="form-control" value='<?php echo $data['username'] ?>' placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-4 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" name="password" class="form-control" value='<?php echo $data['password'] ?>' placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="repassword" class="col-sm-4 control-label">Retype Password</label>
                      <div class="col-sm-6">
                        <input type="password" name="repassword" class="form-control" value='<?php echo $data['password'] ?>' placeholder="Retype Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="fot" class="col-sm-4 control-label">Foto</label>
                      <div class="col-sm-6">
                        <input type="file" name="foto" class="form-control">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <a href="index.php?user=admin&page=data-user"><button type="button" class="btn btn-success" data-dismiss="modal">Close</button></a>
                <button type="submit" name="edit" class="btn btn-success">Edit</button>
              </div>
            </form>
            <?php
              if(isset($_POST['edit'])){
                $nama_user               = $_POST['nama_user'];
                $username                = $_POST['username'];
                $password                = $_POST['password'];
                $repassword              = $_POST['repassword'];
                $foto                    = $_FILES['foto'];

                $target_dir = 'images/';

                if($foto['name']!= ''){
                  $file_extension = pathinfo($foto['name'], PATHINFO_EXTENSION);
                  $target_file  =  $target_dir. basename($username) . "foto." .$file_extension;
                  if( $file_extension != "jpg"&& $file_extension != "png" ){
                    die("mohon upload file gambar");
                  }else{
                      move_uploaded_file($foto["tmp_name"], $target_file);
                      $foto = $target_file;
                  }
                }else{
                  $foto = $data['foto'];
                }

                $id_user = $data['id_user'];

                if($password == $data['password']){
                }else{
                  $password = md5($password);
                }

                $query = mysqli_query($config->koneksi(),"UPDATE user SET nama = '$nama_user', username = '$username', password = '$password', foto = '$foto' WHERE id_user = $id_user");
                if($query != ''){?>
                  <script>
                    alert("<?php echo 'Edit data user dengan nama '.$nama_user.' Sukses' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-user&edit+data+user=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Edit data user dengan nama '.$nama_user.' Gagal' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-user&edit+data+user=failed"?>";
                  </script>
                <?php
                }
              }
            ?>
          </div>
        </div>
      </div>
  </section>
</div>