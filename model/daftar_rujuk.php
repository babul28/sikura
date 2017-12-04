<?php

	class Rujuk{
		private $conn;
		private $status_upload = 1;
		
		public function __construct($conn)
		{
			$this->conn = $conn;
		}

		public function daftar_rujuk(){
			if( isset($_POST['daftar']) ){

				$target_dir = 'uploads/';

				$NIK_l							= $_POST['NIK_l'];
				$img_no_ktp_l					= $_FILES['img_no_ktp_l'];
				if($img_no_ktp_l[name]!= ''){
					$file_extension = pathinfo($img_no_ktp_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_l) . "img_no_ktp_l." .$file_extension;
					if( $file_extension != "jpg"&& $file_extension != "png" ){
						die("mohon upload file gambar");
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
				if($img_no_kk_l[name]!= ''){
					$file_extension = pathinfo($img_no_kk_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_l) . "img_no_kk_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
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
				$surat_rujuk_l					= $_FILES['surat_rujuk_l'];
				if($surat_rujuk_l[name]!= ''){
					$file_extension = pathinfo($surat_rujuk_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_l) . "surat_rujuk_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_rujuk_l["tmp_name"], $target_file);
							$surat_rujuk_l = $target_file;
							}
					}
				}else{
					$surat_rujuk_l = 'tidak ada foto';
				}
				$surat_ijin_ortu_l				= $_FILES['surat_ijin_ortu_l'];
				if($surat_ijin_ortu_l[name]!= ''){
					$file_extension = pathinfo($surat_ijin_ortu_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_l) . "surat_ijin_ortu_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_ortu_l["tmp_name"], $target_file);
							$surat_ijin_ortu_l = $target_file;
							}
					}
				}else{
					$surat_ijin_ortu_l = 'tidak ada foto';
				}
				$surat_cerai_l					= $_FILES['surat_cerai_l'];
				if($surat_cerai_l[name]!= ''){
					$file_extension = pathinfo($surat_cerai_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_l) . "surat_cerai_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_cerai_l["tmp_name"], $target_file);
							$surat_cerai_l = $target_file;
							}
					}
				}else{
					$surat_cerai_l = 'tidak ada foto';
				}
				$lampiran_putusan_pengadilan_l	= $_FILES['lampiran_putusan_pengadilan_l'];
				if($lampiran_putusan_pengadilan_l[name]!= ''){
					$file_extension = pathinfo($lampiran_putusan_pengadilan_l['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_l) . "lampiran_putusan_pengadilan_l." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($lampiran_putusan_pengadilan_l["tmp_name"], $target_file);
							$lampiran_putusan_pengadilan_l = $target_file;
							}
					}
				}else{
					$lampiran_putusan_pengadilan_l = 'tidak ada foto';
				}
				$NIK_p							= $_POST['NIK_p'];
				$img_no_ktp_p					= $_FILES['img_no_ktp_p'];
				if($img_no_ktp_p[name]!= ''){
					$file_extension = pathinfo($img_no_ktp_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_p) . "img_no_ktp_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
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
				if($img_no_kk_p[name]!= ''){
					$file_extension = pathinfo($img_no_kk_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_p) . "img_no_kk_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
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
				$umur_p							= $_POST['umur_p'];
				$alamat_p						= $_POST['alamat_p'];
				$kota_p							= $_POST['kota_p'];
				$provinsi_p						= $_POST['provinsi_p'];
				$kode_pos_p						= $_POST['kode_pos_p'];
				$agama_p						= $_POST['agama_p'];
				$pekerjaan_p					= $_POST['pekerjaan_p'];
				$surat_rujuk_p					= $_FILES['surat_rujuk_p'];
				if($surat_rujuk_p[name]!= ''){
					$file_extension = pathinfo($surat_rujuk_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_p) . "surat_rujuk_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_rujuk_p["tmp_name"], $target_file);
							$surat_rujuk_p = $target_file;
							}
					}
				}else{
					$surat_rujuk_p = 'tidak ada foto';
				}
				$surat_ijin_ortu_p				= $_FILES['surat_ijin_ortu_p'];
				if($surat_ijin_ortu_p[name]!= ''){
					$file_extension = pathinfo($surat_ijin_ortu_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_p) . "surat_ijin_ortu_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_ijin_ortu_p["tmp_name"], $target_file);
							$surat_ijin_ortu_p = $target_file;
							}
					}
				}else{
					$surat_ijin_ortu_p = 'tidak ada foto';
				}
				$surat_cerai_p					= $_FILES['surat_cerai_p'];
				if($surat_cerai_p[name]!= ''){
					$file_extension = pathinfo($surat_cerai_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_p) . "surat_cerai_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_cerai_p["tmp_name"], $target_file);
							$surat_cerai_p = $target_file;
							}
					}
				}else{
					$surat_cerai_p = 'tidak ada foto';
				}
				$lampiran_putusan_pengadilan_p	= $_FILES['lampiran_putusan_pengadilan_p'];
				if($lampiran_putusan_pengadilan_p[name]!= ''){
					$file_extension = pathinfo($lampiran_putusan_pengadilan_p['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir . "rujuk_nikah_" . basename($NIK_p) . "lampiran_putusan_pengadilan_p." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						die("mohon upload file gambar");
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($lampiran_putusan_pengadilan_p["tmp_name"], $target_file);
							$lampiran_putusan_pengadilan_p = $target_file;
							}
					}
				}else{
					$lampiran_putusan_pengadilan_p = 'tidak ada foto';
				}

				$tanggal_daftar					= date('Y-m-d');

				$query = "INSERT INTO rujuk VALUES ('','$NIK_l','$img_no_ktp_l','$KK_l','$img_no_kk_l','$nama_lengkap_l','$tempat_lahir_l','$tanggal_lahir_l','$umur_l','$alamat_l','$kota_l','$provinsi_l','$kode_pos_l','$agama_l','$pekerjaan_l','$surat_rujuk_l','$surat_ijin_ortu_l','$surat_cerai_l','$lampiran_putusan_pengadilan_l','$NIK_p','$img_no_ktp_p','$KK_p','$img_no_kk_p','$nama_lengkap_p','$tempat_lahir_p','$tanggal_lahir_p','$umur_p','$alamat_p','$kota_p','$provinsi_p','$kode_pos_p','$agama_p','$pekerjaan_p','$surat_rujuk_p','$surat_ijin_ortu_p','$surat_cerai_p','$lampiran_putusan_pengadilan_p','false','$tanggal_daftar');";

				$upload = $this->conn->query($query);

				if($upload != ''){
					echo '<script>alert("Daftar Rujuk Pernikahan Berhasil!!!");window.location="index.php?daftar+rujuk+pernikahan=sukses";</script>';
	            	exit();
				}else{
					echo '<script>alert("Daftar Rujuk Pernikahan Gagal!!!");window.location="index.php?page=rujuk-nikah&daftar+rujuk+pernikahan=gagal";</script>';
	            	exit();
				}
			}
		}
	}


?>
	