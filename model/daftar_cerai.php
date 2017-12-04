<?php

	class Perceraian{
		private $conn;

		public function __construct($conn){
			$this->conn = $conn;
		}

		public function daftar_cerai(){

			$status = 1;

			if( isset($_POST['daftar']) ){
				$target_dir = "uploads/";

				$NIK						= $_POST['NIK'];
				$KK							= $_POST['KK'];
				$nama						= $_POST['nama'];
				$usia						= $_POST['usia'];
				$tempat_lahir				= $_POST['tempat_lahir'];
				$tanggal_lahir				= $_POST['tanggal_lahir'];
				$alamat						= $_POST['alamat'];
				$kota						= $_POST['kota'];
				$provinsi					= $_POST['provinsi'];
				$kode_pos					= $_POST['kode_pos'];
				$agama						= $_POST['agama'];
				$kewarganegaraan			= $_POST['kewarganegaraan'];
				$buku_nikah					= $_FILES['buku_nikah'];
				if($buku_nikah['name']!= ''){
					$file_extension = pathinfo($buku_nikah['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($buku_nikah) . "buku_nikah." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($buku_nikah["tmp_name"], $target_file);
							$buku_nikah = $target_file;
							}
					}
				}else{
					$buku_nikah = 'tidak ada foto';
				}
				$image_NIK						= $_FILES['image_NIK'];
				if($image_NIK['name']!= ''){
					$file_extension = pathinfo($image_NIK['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($image_NIK) . "image_NIK." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($image_NIK["tmp_name"], $target_file);
							$image_NIK = $target_file;
							}
					}
				}else{
					$image_NIK = 'tidak ada foto';
				}
				$image_KK 						= $_FILES['image_KK'];
				if($image_KK['name']!= ''){
					$file_extension = pathinfo($image_KK['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($image_KK) . "image_KK." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($image_KK["tmp_name"], $target_file);
							$image_KK = $target_file;
							}
					}
				}else{
					$image_KK = 'tidak ada foto';
				}
				$akte_anak					= $_FILES['akte_anak'];
				if($akte_anak['name']!= ''){
					$file_extension = pathinfo($akte_anak['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($akte_anak) . "akte_anak." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($akte_anak["tmp_name"], $target_file);
							$akte_anak = $target_file;
							}
					}
				}else{
					$akte_anak = 'tidak ada foto';
				}
				$surat_kuasa_khusus			= $_FILES['surat_kuasa_khusus'];
				if($surat_kuasa_khusus['name']!= ''){
					$file_extension = pathinfo($surat_kuasa_khusus['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($surat_kuasa_khusus) . "surat_kuasa_khusus." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_kuasa_khusus["tmp_name"], $target_file);
							$surat_kuasa_khusus = $target_file;
							}
					}
				}else{
					$surat_kuasa_khusus = 'tidak ada foto';
				}
				$surat_kuasa_insidential	= $_FILES['surat_kuasa_insidential'];
				if($surat_kuasa_insidential['name']!= ''){
					$file_extension = pathinfo($surat_kuasa_insidential['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($surat_kuasa_insidential) . "surat_kuasa_insidential." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_kuasa_insidential["tmp_name"], $target_file);
							$surat_kuasa_insidential = $target_file;
							}
					}
				}else{
					$surat_kuasa_insidential = 'tidak ada foto';
				}
				$surat_izin					= $_FILES['surat_izin'];
				if($surat_izin['name']!= ''){
					$file_extension = pathinfo($surat_izin['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($surat_izin) . "surat_izin." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_izin["tmp_name"], $target_file);
							$surat_izin = $target_file;
							}
					}
				}else{
					$surat_izin = 'tidak ada foto';
				}
				$permohonan_hak_asuh		= $_FILES['permohonan_hak_asuh'];
				if($permohonan_hak_asuh['name']!= ''){
					$file_extension = pathinfo($permohonan_hak_asuh['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($permohonan_hak_asuh) . "permohonan_hak_asuh." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($permohonan_hak_asuh["tmp_name"], $target_file);
							$permohonan_hak_asuh = $target_file;
							}
					}
				}else{
					$permohonan_hak_asuh = 'tidak ada foto';
				}
				$daftar_harta			= $_FILES['daftar_harta'];
				if($daftar_harta['name']!= ''){
					$file_extension = pathinfo($daftar_harta['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($daftar_harta) . "daftar_harta." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($daftar_harta["tmp_name"], $target_file);
							$daftar_harta = $target_file;
							}
					}
				}else{
					$daftar_harta = 'tidak ada foto';
				}
				$surat_tidak_mampu			= $_FILES['surat_tidak_mampu'];
				if($surat_tidak_mampu['name']!= ''){
					$file_extension = pathinfo($surat_tidak_mampu['name'], PATHINFO_EXTENSION);
					$target_file 	= $target_dir ."daftar_cerai". basename($surat_tidak_mampu) . "surat_tidak_mampu." .$file_extension;
					if( $file_extension != "jpg" && $file_extension != "png"){
						$status = 0;echo '<script>alert("Mohon Inputkan Gambar!");window.location="index.php?page=perceraian";</script>';
					}else{
						if ( !file_exists($target_file) ) {
							move_uploaded_file($surat_tidak_mampu["tmp_name"], $target_file);
							$surat_tidak_mampu = $target_file;
							}
					}
				}else{
					$surat_tidak_mampu = 'tidak ada foto';
				}
				
				$tanggal_daftar				= date('Y-m-d');

				if($status!=0){
					$query = "INSERT INTO perceraian VALUES ('', '$NIK', '$KK', '$nama', '$tempat_lahir', '$tanggal_lahir', '$usia', '$alamat', '$kota', '$provinsi', '$kode_pos', '$agama', '$kewarganegaraan', '$buku_nikah', '$image_NIK', '$image_KK', '$akte_anak', '$surat_kuasa_khusus', '$surat_kuasa_insidential', '$surat_izin', '$permohonan_hak_asuh', '$daftar_harta', '$surat_tidak_mampu', 'false', '$tanggal_daftar')";

					$upload = $this->conn->query($query);

					if($upload != ''){
						echo '<script>alert("Daftar Perceraian Berhasil!!!");window.location="index.php?daftar+perceraian=sukses";</script>';
		            	exit();
					}else{
						echo '<script>alert("Daftar Perceraian Gagal!!!");window.location="index.php?page=perceraian&daftar+perceraian=gagal";</script>';
		            	exit();
					}
				}
			}
		}
	}

?>