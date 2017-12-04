<?php
    session_start();

	require_once 'config/config.php';
    require_once 'model/daftar_nikah.php';
    require_once 'model/daftar_cerai.php';
    require_once 'model/daftar_rujuk.php';
    require_once 'model/pernikahan.php';
    require_once 'model/rujuk.php';
    require_once 'model/perceraian.php';
    require_once 'model/penghulu.php';
    require_once 'model/pegawai.php';

	isset($_GET['act'])? $act = $_GET['act'] : $act = '';
    isset($_GET['login'])? $login = $_GET['login'] : $login = '';

    if ( isset($_SESSION['level_user'])) {
	    
        $config     = new config();
        $nikah      = new DataPernikahan($config->koneksi());
        $rujuk      = new DataRujuk($config->koneksi());
        $cerai      = new DataPerceraian($config->koneksi());
        $penghulu   = new DataPenghulu($config->koneksi());
        $pegawai    = new DataPegawai($config->koneksi());
        
        $user       = $_SESSION['level_user'];
                    	
            switch ($login) {
                case 'logout':
                    $config->logout();
                    break;
                default:
                    require_once 'view/Admin/index-admin.php';
                    break;
            }

            require_once 'view/Admin/header-admin.php';
            if($user == 'admin'){
                isset($_GET['page'])? $page = $_GET['page'] : $page = '';
                switch ($page) {
                    case 'data-capin-pria' :
                        require 'view/Admin/data-capin-pria.php';
                        break;
                    case 'data-capin-wanita' :
                        require_once 'view/Admin/data-capin-wanita.php';
                        break;
                    case 'validasi-data-pernikahan' :
                        require_once 'view/Admin/validasi-data-pernikahan.php';
                        break;
                    case 'dokumen-pernikahan' :
                        require_once 'view/Admin/dokumen-pernikahan.php';
                        break;
                    case 'data-pendaftaran-cerai' :
                        require_once 'view/Admin/data-pendaftaran-cerai.php';
                        break;
                    case 'validasi-data-cerai' :
                        require_once 'view/Admin/validasi-data-cerai.php';
                        break;
                    case 'dokumen-perceraian' :
                        require_once 'view/Admin/dokumen-perceraian.php';
                        break;
                    case 'data-rujuk-pria' :
                        require_once 'view/Admin/data-rujuk-pria.php';
                        break;
                    case 'data-rujuk-wanita' :
                        require_once 'view/Admin/data-rujuk-wanita.php';
                        break;
                    case 'validasi-data-rujuk' :
                        require_once 'view/Admin/validasi-data-rujuk.php';
                        break;
                    case 'dokumen-rujuk' :
                        require_once 'view/Admin/dokumen-rujuk.php';
                        break;
                    case 'data-penghulu' :
                        require_once 'view/Admin/data-penghulu.php';
                        break;
                    case 'data-user' :
                        require_once 'view/Admin/data-user.php';
                        break;
                    case 'profile' :
                        require_once 'view/Admin/profile-admin.php';
                        break;
                    case 'edit-dokumen-pernikahan' :
                        require_once 'view/Admin/edit-dokumen-pernikahan.php';
                        break;
                    case 'edit-dokumen-perceraian' :
                        require_once 'view/Admin/edit-dokumen-perceraian.php';
                        break;
                    case 'edit-dokumen-rujuk' :
                        require_once 'view/Admin/edit-dokumen-rujuk.php';
                        break;
                    case 'edit-data-penghulu' :
                        require_once 'view/Admin/edit-data-penghulu.php';
                        break;
                    case 'edit-data-user' :
                        require_once 'view/Admin/edit-data-user.php';
                        break;
                    default:
                        require_once 'view/Admin/dashboard-admin.php';
                }
            }elseif($user == 'pegawai') {
                isset($_GET['page'])? $page = $_GET['page'] : $page = '';
                switch ($page) {
                    case 'data-capin-pria' :
                        require_once 'view/Pegawai/data-capin-pria.php';
                        break;
                    case 'data-capin-wanita' :
                        require_once 'view/Pegawai/data-capin-wanita.php';
                        break;
                    case 'validasi-data-pernikahan' :
                        require_once 'view/Pegawai/validasi-data-pernikahan.php';
                        break;
                    case 'dokumen-pernikahan' :
                        require_once 'view/Pegawai/dokumen-pernikahan.php';
                        break;
                    case 'data-pendaftaran-cerai' :
                        require_once 'view/Pegawai/data-pendaftaran-cerai.php';
                        break;
                    case 'validasi-data-cerai' :
                        require_once 'view/Pegawai/validasi-data-cerai.php';
                        break;
                    case 'dokumen-perceraian' :
                        require_once 'view/Pegawai/dokumen-perceraian.php';
                        break;
                    case 'data-rujuk-pria' :
                        require_once 'view/Pegawai/data-rujuk-pria.php';
                        break;
                    case 'data-rujuk-wanita' :
                        require_once 'view/Pegawai/data-rujuk-wanita.php';
                        break;
                    case 'validasi-data-rujuk' :
                        require_once 'view/Pegawai/validasi-data-rujuk.php';
                        break;
                    case 'dokumen-rujuk' :
                        require_once 'view/Pegawai/dokumen-rujuk.php';
                        break;
                    case 'data-penghulu' :
                        require_once 'view/Pegawai/data-penghulu.php';
                        break;
                    case 'profile' :
                        require_once 'view/Pegawai/profile-pegawai.php';
                        break;
                    case 'edit-dokumen-pernikahan' :
                        require_once 'view/Pegawai/edit-dokumen-pernikahan.php';
                        break;
                    case 'edit-dokumen-perceraian' :
                        require_once 'view/Pegawai/edit-dokumen-perceraian.php';
                        break;
                    case 'edit-dokumen-rujuk' :
                        require_once 'view/Pegawai/edit-dokumen-rujuk.php';
                        break;
                    case 'edit-data-penghulu' :
                        require_once 'view/Pegawai/edit-data-penghulu.php';
                        break;
                    default:
                        require_once 'view/Pegawai/dashboard-pegawai.php';
                        break;
                }
            }

          	require_once 'view/Admin/footer-admin.php';

    }elseif($login == "login") {
        if($act == 'login'){
            $config = new config();
            
            $config->koneksi();

            $login = $config->login();

            if(isset($_SESSION['level_user'])){
                header('location: ./index.php?'.$_SESSION['level_user'].'&page=dashboard');
            }else{
                echo '<script>alert("'.$login.'");window.location="./";</script>';
            }

            $config->koneksi('close');
        }
        require_once 'view/login.php';

    }else{
        $config = new config();

        isset($_GET['page'])? $page = $_GET['page'] : $page = '';
    	switch ($page) {
    		case 'pernikahan':
                $daftar_nikah = new Pernikahan($config->koneksi());
    			require_once 'view/header_daftar.php';
    			require_once 'view/pernikahan.php';
                if($act=='daftar-nikah'){
                    $daftar_nikah->daftar_nikah();
                }
    			break;
    		case 'perceraian':
                $daftar_cerai = new Perceraian($config->koneksi());
    			require_once 'view/header_daftar.php';
    			require_once 'view/perceraian.php';
                if($act=='daftar-cerai'){
                    $daftar_cerai->daftar_cerai();
                }
    			break;
    		case 'rujuk-nikah':
                $rujuk_nikah = new Rujuk($config->koneksi());
    			require_once 'view/header_daftar.php';
    			require_once 'view/rujuk-nikah.php';
                if($act=='daftar-rujuk-nikah'){
                    $rujuk_nikah->daftar_rujuk();
                }
    			break;
    		default:
    			require_once 'view/header_home.php';
    			require_once 'view/body_home.php';
    			break;
    	}    	
    	require_once 'view/footer_home.php';
    }
?>