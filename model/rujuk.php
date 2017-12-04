<?php
	
	class DataRujuk{

		private $koneksi;

		public function __construct($koneksi){
			$this->koneksi = $koneksi;
		}

		public function getPria(){
			$query = mysqli_query($this->koneksi, "SELECT id_rujuk, NIK_l, KK_l, nama_lengkap_l, CONCAT(tempat_lahir_l,' ',DATE_FORMAT(tanggal_lahir_l, '%d-%m-%Y')) AS tempat_tanggal_lahir, umur_l, CONCAT(alamat_l,' ',kota_l,' ', provinsi_l, ' ', kode_pos_l) AS alamat, agama_l, pekerjaan_l, verifikasi FROM rujuk ORDER BY id_rujuk desc");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getWanita(){
			$query = mysqli_query($this->koneksi, "SELECT id_rujuk, NIK_p, KK_p, nama_lengkap_p, CONCAT(tempat_lahir_p,' ',DATE_FORMAT(tanggal_lahir_p, '%d-%m-%Y')) AS tempat_tanggal_lahir, umur_p, CONCAT(alamat_p,' ',kota_p,' ', provinsi_p, ' ', kode_pos_p) AS alamat, agama_p, pekerjaan_p, verifikasi FROM rujuk ORDER BY id_rujuk desc");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getVerifikasirujuk(){
			$query = mysqli_query($this->koneksi, "SELECT id_rujuk, NIK_l, KK_l, nama_lengkap_l,CONCAT(tempat_lahir_l, ' ', DATE_FORMAT(tanggal_lahir_l,'%d-%m-%Y')) AS tanggal_lahir_l, CONCAT(alamat_l,' ', kota_l, ' ', provinsi_l, ' ',kode_pos_l) AS alamat_l,agama_l, pekerjaan_l, NIK_p,KK_p,nama_lengkap_p,CONCAT(tempat_lahir_p, ' ', DATE_FORMAT(tanggal_lahir_p,'%d-%m-%Y')) AS tanggal_lahir_p, CONCAT(alamat_p,' ', kota_p, ' ', provinsi_p, ' ',kode_pos_p) AS alamat_p, agama_p, pekerjaan_p, verifikasi,tanggal_daftar FROM rujuk WHERE verifikasi != 'true'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}
			public function getDokumenRujuk(){
			$query = mysqli_query($this->koneksi, "SELECT d.id_dok_nik, p.id_rujuk, p.nama_lengkap_l, p.nama_lengkap_p, d.tanggal_rujuk, d.tempat_rujuk, pe.nama_penghulu FROM data_rujuk d INNER JOIN rujuk p INNER JOIN penghulu pe WHERE d.id_rujuk = p.id_rujuk AND d.penghulu = pe.id_penghulu");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}
		public function getDataById($id){
			$query = mysqli_query($this->koneksi, "SELECT * FROM data_rujuk WHERE id_rujuk = '$id'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function delDokRujuk($id){
			$query = mysqli_query($this->koneksi, "DELETE FROM data_rujuk WHERE id_rujuk = '$id'");

			return $query;
		}
	}
?>