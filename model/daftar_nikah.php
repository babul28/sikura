<?php

	class Pernikahan{
		private $conn;

		public function __construct($conn)
		{
			$this->conn = $conn;
		}

		public function daftar_nikah(){
			
			if( isset($_POST['daftar']) ){

				$status = 1;

				$target_dir = 'uploads/';

				$NIK_l							= $_POST['NIK_l'];
				$img_no_ktp_l					= $_FILES['img_no_ktp_l'];
				if($img_no_ktp_l['name']!= ''){
					$file_extension = pathinfo($img_no_ktp_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "daftar_nikah" . basename($NIK_l) . "img_no_ktp_l." .$file_extension;
					if( $file_extension != "png" && $file_extension != "jpg"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($img_no_ktp_l["tmp_name"], $target_file);
							$img_no_ktp_l = $target_file;
							}
					}
				}else{
					$img_no_ktp_l = 'tidak ada foto';
				}	
				$KK_l 							= $_POST['KK_l'];
				$img_no_kk_l					= $_FILES['img_no_kk_l'];
				if($img_no_kk_l['name']!= ''){
					$file_extension = pathinfo($img_no_kk_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "img_no_kk_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($img_no_kk_l["tmp_name"], $target_file);
							$img_no_kk_l = $target_file;
							}
					}
				}else{
					$img_no_kk_l = 'tidak ada foto';
				}	
				$nama_lengkap_l					= $_POST['nama_lengkap_l'];
				$tempat_lahir_l					= $_POST['tempat_lahir_l'];
				$tanggal_lahir_l				= $_POST['tanggal_lahir_l'];
				$umur_l							= $_POST['umur_l'];
				$alamat_l						= $_POST['alamat_l'];
				$kota_l							= $_POST['kota_l'];
				$provinsi_l						= $_POST['provinsi_l'];
				$kode_pos_l						= $_POST['kode_pos_l'];
				$agama_l						= $_POST['agama_l'];
				$pekerjaan_l					= $_POST['pekerjaan_l'];
				$dokumen_n1_l					= $_FILES['dokumen_n1_l'];
				if($dokumen_n1_l['name']!= ''){
					$file_extension = pathinfo($dokumen_n1_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "dokumen_n1_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n1_l["tmp_name"], $target_file);
							$dokumen_n1_l = $target_file;
							}
					}
				}else{
					$dokumen_n1_l = 'tidak ada foto';
				}	
				$dokumen_n2_l					= $_FILES['dokumen_n2_l'];
				if($dokumen_n2_l['name']!= ''){
					$file_extension = pathinfo($dokumen_n2_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "dokumen_n2_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n2_l["tmp_name"], $target_file);
							$dokumen_n2_l = $target_file;
							}
					}
				}else{
					$dokumen_n2_l = 'tidak ada foto';
				}	
				$dokumen_n3_l					= $_FILES['dokumen_n3_l'];
				if($dokumen_n3_l['name']!= ''){
					$file_extension = pathinfo($dokumen_n3_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "dokumen_n3_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n3_l["tmp_name"], $target_file);
							$dokumen_n3_l = $target_file;
							}
					}
				}else{
					$dokumen_n3_l = 'tidak ada foto';
				}	
				$dokumen_n4_l					= $_FILES['dokumen_n4_l'];
				if($dokumen_n4_l['name']!= ''){
					$file_extension = pathinfo($dokumen_n4_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "dokumen_n4_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n4_l["tmp_name"], $target_file);
							$dokumen_n4_l = $target_file;
							}
					}
				}else{
					$dokumen_n4_l = 'tidak ada foto';
				}	
				$foto_l							= $_FILES['foto_l'];
				if($foto_l['name']!= ''){
					$file_extension = pathinfo($foto_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "foto_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($foto_l["tmp_name"], $target_file);
							$foto_l = $target_file;
							}
					}
				}else{
					$foto_l = 'tidak ada foto';
				}	
				$surat_ijin_ortu_l				= $_FILES['surat_ijin_ortu_l'];
				if($surat_ijin_ortu_l['name']!= ''){
					$file_extension = pathinfo($surat_ijin_ortu_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "surat_ijin_ortu_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_ortu_l["tmp_name"], $target_file);
							$surat_ijin_ortu_l = $target_file;
							}
					}
				}else{
					$surat_ijin_ortu_l = 'tidak ada foto';
				}	
				$surat_cerai_l					= $_FILES['surat_talak_l'];
				if($surat_cerai_l['name']!= ''){
					$file_extension = pathinfo($surat_cerai_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "surat_cerai_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_cerai_l["tmp_name"], $target_file);
							$surat_cerai_l = $target_file;
							}
					}
				}else{
					$surat_cerai_l = 'tidak ada foto';
				}	
				$surat_ijin_tni_l				= $_FILES['surat_ijin_tni_l'];
				if($surat_ijin_tni_l['name']!= ''){
					$file_extension = pathinfo($surat_ijin_tni_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "surat_ijin_tni_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_tni_l["tmp_name"], $target_file);
							$surat_ijin_tni_l = $target_file;
							}
					}
				}else{
					$surat_ijin_tni_l = 'tidak ada foto';
				}	
				$surat_ijin_bm_l				= $_FILES['surat_ijin_bm_l'];
				if($surat_ijin_bm_l['name']!= ''){
					$file_extension = pathinfo($surat_ijin_bm_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_l) . "surat_ijin_bm_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_bm_l["tmp_name"], $target_file);
							$surat_ijin_bm_l = $target_file;
							}
					}
				}else{
					$surat_ijin_bm_l = 'tidak ada foto';
				}	
				$NIK_p							= $_POST['NIK_p'];
				$img_no_ktp_p					= $_FILES['img_no_ktp_p'];
				if($img_no_ktp_p['name']!= ''){
					$file_extension = pathinfo($img_no_ktp_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "img_no_ktp_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($img_no_ktp_p["tmp_name"], $target_file);
							$img_no_ktp_p = $target_file;
							}
					}
				}else{
					$img_no_ktp_p = 'tidak ada foto';
				}	
				$KK_p 							= $_POST['KK_p'];
				$img_no_kk_p					= $_FILES['img_no_kk_p'];
				if($img_no_kk_p['name']!= ''){
					$file_extension = pathinfo($img_no_kk_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "img_no_kk_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($img_no_kk_p["tmp_name"], $target_file);
							$img_no_kk_p = $target_file;
							}
					}
				}else{
					$img_no_kk_p = 'tidak ada foto';
				}
				$nama_lengkap_p					= $_POST['nama_lengkap_p'];
				$tempat_lahir_p					= $_POST['tempat_lahir_p'];
				$tanggal_lahir_p				= $_POST['tanggal_lahir_p'];
				$umur_p							= $_POST['umur_l'];
				$alamat_p						= $_POST['alamat_p'];
				$kota_p							= $_POST['kota_p'];
				$provinsi_p						= $_POST['provinsi_p'];
				$kode_pos_p						= $_POST['kode_pos_p'];
				$agama_p						= $_POST['agama_p'];
				$pekerjaan_p					= $_POST['pekerjaan_p'];
				$dokumen_n1_p					= $_FILES['dokumen_n1_p'];
				if($dokumen_n1_p['name']!= ''){
					$file_extension = pathinfo($dokumen_n1_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "dokumen_n1_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n1_p["tmp_name"], $target_file);
							$dokumen_n1_p = $target_file;
							}
					}
				}else{
					$dokumen_n1_p = 'tidak ada foto';
				}
				$dokumen_n2_p					= $_FILES['dokumen_n2_p'];
				if($dokumen_n2_p['name']!= ''){
					$file_extension = pathinfo($dokumen_n2_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "dokumen_n2_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n2_p["tmp_name"], $target_file);
							$dokumen_n2_p = $target_file;
							}
					}
				}else{
					$dokumen_n2_p = 'tidak ada foto';
				}
				$dokumen_n3_p					= $_FILES['dokumen_n3_p'];
				if($dokumen_n3_p['name']!= ''){
					$file_extension = pathinfo($dokumen_n3_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "dokumen_n3_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n3_p["tmp_name"], $target_file);
							$dokumen_n3_p = $target_file;
							}
					}
				}else{
					$dokumen_n3_p = 'tidak ada foto';
				}
				$dokumen_n4_p					= $_FILES['dokumen_n4_p'];
				if($dokumen_n4_p['name']!= ''){
					$file_extension = pathinfo($dokumen_n4_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "dokumen_n4_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($dokumen_n4_p["tmp_name"], $target_file);
							$dokumen_n4_p = $target_file;
							}
					}
				}else{
					$dokumen_n4_p = 'tidak ada foto';
				}
				$foto_p							= $_FILES['foto_p'];
				if($foto_p['name']!= ''){
					$file_extension = pathinfo($foto_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "foto_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($foto_p["tmp_name"], $target_file);
							$foto_p = $target_file;
							}
					}
				}else{
					$foto_p = 'tidak ada foto';
				}
				$surat_ijin_ortu_p				= $_FILES['surat_ijin_ortu_p'];
				if($surat_ijin_ortu_p['name']!= ''){
					$file_extension = pathinfo($surat_ijin_ortu_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "surat_ijin_ortu_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_ortu_p["tmp_name"], $target_file);
							$surat_ijin_ortu_p = $target_file;
							}
					}
				}else{
					$surat_ijin_ortu_p = 'tidak ada foto';
				}
				$surat_cerai_p					= $_FILES['surat_talak_p'];
				if($surat_cerai_p['name']!= ''){
					$file_extension = pathinfo($surat_cerai_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "surat_cerai_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_cerai_p["tmp_name"], $target_file);
							$surat_cerai_p = $target_file;
							}
					}
				}else{
					$surat_cerai_p = 'tidak ada foto';
				}
				$surat_ijin_tni_p				= $_FILES['surat_ijin_tni_p'];
				if($surat_ijin_tni_p['name']!= ''){
					$file_extension = pathinfo($surat_ijin_tni_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "surat_ijin_tni_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_tni_p["tmp_name"], $target_file);
							$surat_ijin_tni_p = $target_file;
							}
					}
				}else{
					$surat_ijin_tni_p = 'tidak ada foto';
				}
				$surat_ijin_bm_p				= $_FILES['surat_ijin_bm_p'];
				if($surat_ijin_bm_p['name']!= ''){
					$file_extension = pathinfo($surat_ijin_bm_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_nikah". basename($NIK_p) . "surat_ijin_bm_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=pernikahan";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_bm_p["tmp_name"], $target_file);
							$surat_ijin_bm_p = $target_file;
							}
					}
				}else{
					$surat_ijin_bm_p = 'tidak ada foto';
				}

				$tanggal_daftar					= date('Y-m-d');

				if($status!=0){
					$query = "INSERT INTO pernikahan VALUES ('', '$NIK_l', '$img_no_ktp_l', '$KK_l', '$img_no_kk_l', '$nama_lengkap_l', '$tempat_lahir_l', '$tanggal_lahir_l', '$umur_l', '$alamat_l', '$kota_l', '$provinsi_l', '$kode_pos_l', '$agama_l', '$pekerjaan_l', '$dokumen_n1_l', '$dokumen_n2_l', '$dokumen_n3_l', '$dokumen_n4_l', '$foto_l', '$surat_ijin_ortu_l', '$surat_cerai_l', '$surat_ijin_tni_l', '$surat_ijin_bm_l','$NIK_p', '$img_no_ktp_p', '$KK_p', '$img_no_kk_p', '$nama_lengkap_p', '$tempat_lahir_p', '$tanggal_lahir_p', '$umur_p', '$alamat_p', '$kota_p', '$provinsi_p', '$kode_pos_p', '$agama_p', '$pekerjaan_p', '$dokumen_n1_p', '$dokumen_n2_p', '$dokumen_n3_p', '$dokumen_n4_p', '$foto_p', '$surat_ijin_ortu_p', '$surat_cerai_p', '$surat_ijin_tni_p', '$surat_ijin_bm_p', 'false', '$tanggal_daftar')";

					$upload = $this->conn->query($query);

					if($upload != ''){
						echo '<script>alert("Daftar Pernikahan Berhasil!!!");window.location="index.php?daftar+pernikahan=sukses";</script>';
		            	exit();
					}else{
						echo '<script>alert("Daftar Pernikahan Gagal!!!");window.location="index.php?page=pernikahan&daftar+pernikahan=gagal";</script>';
		            	exit();
					}
				}
			}
		}
	}


?>