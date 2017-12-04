<?php
	
	class DataPernikahan{

		private $koneksi;

		public function __construct($koneksi){
			$this->koneksi = $koneksi;
		}

		public function getCapinPria(){
			$query = mysqli_query($this->koneksi, "SELECT id_nikah, NIK_l, KK_l, nama_lengkap_l, CONCAT(tempat_lahir_l,' ',DATE_FORMAT(tanggal_lahir_l, '%d-%m-%Y')) AS tempat_tanggal_lahir, umur_l, CONCAT(alamat_l,' ',kota_l,' ', provinsi_l, ' ', kode_pos_l) AS alamat, agama_l, pekerjaan_l, verifikasi FROM pernikahan ORDER BY id_nikah desc");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getCapinWanita(){
			$query = mysqli_query($this->koneksi, "SELECT id_nikah, NIK_p, KK_p, nama_lengkap_p, CONCAT(tempat_lahir_p,' ',DATE_FORMAT(tanggal_lahir_p, '%d-%m-%Y')) AS tempat_tanggal_lahir, umur_p, CONCAT(alamat_p,' ',kota_p,' ', provinsi_p, ' ', kode_pos_p) AS alamat, agama_p, pekerjaan_p, verifikasi FROM pernikahan ORDER BY id_nikah desc");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getVerifikasiNikah(){
			$query = mysqli_query($this->koneksi, "SELECT id_nikah, NIK_l, KK_l, nama_lengkap_l,CONCAT(tempat_lahir_l, ' ', DATE_FORMAT(tanggal_lahir_l,'%d-%m-%Y')) AS tanggal_lahir_l, CONCAT(alamat_l,' ', kota_l, ' ', provinsi_l, ' ',kode_pos_l) AS alamat_l,agama_l, pekerjaan_l, NIK_p,KK_p,nama_lengkap_p,CONCAT(tempat_lahir_p, ' ', DATE_FORMAT(tanggal_lahir_p,'%d-%m-%Y')) AS tanggal_lahir_p, CONCAT(alamat_p,' ', kota_p, ' ', provinsi_p, ' ',kode_pos_p) AS alamat_p, agama_p, pekerjaan_p, verifikasi,tanggal_daftar FROM pernikahan WHERE verifikasi != 'true'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getDokumenPernikahan(){
			$query = mysqli_query($this->koneksi, "SELECT d.id_dok_nik, p.id_nikah, p.nama_lengkap_l, p.nama_lengkap_p, d.tanggal_pernikahan, d.tempat_pernikahan, pe.nama_penghulu FROM data_pernikahan d INNER JOIN pernikahan p INNER JOIN penghulu pe WHERE d.id_nikah = p.id_nikah AND d.penghulu = pe.id_penghulu");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getDataById($id){
			$query = mysqli_query($this->koneksi, "SELECT * FROM data_pernikahan WHERE id_nikah = '$id'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function delDokPernikahan($id){
			$query = mysqli_query($this->koneksi, "DELETE FROM data_pernikahan WHERE id_nikah = '$id'");

			return $query;
		}
	}
?>