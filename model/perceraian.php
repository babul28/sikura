<?php
	
	class DataPerceraian{

		private $koneksi;

		public function __construct($koneksi){
			$this->koneksi = $koneksi;
		}

		public function getCerai(){
			$query = mysqli_query($this->koneksi, "SELECT id_cerai, NIK, KK, nama, CONCAT(tempat_lahir,' ',DATE_FORMAT(tanggal_lahir, '%d-%m-%Y')) AS tempat_tanggal_lahir, usia, CONCAT(alamat,' ',kota,' ', provinsi, ' ', kode_pos) AS alamat, agama, verifikasi FROM perceraian ORDER BY id_cerai desc");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getVerifikasiCerai(){
			$query = mysqli_query($this->koneksi, "SELECT id_cerai, NIK, KK, nama,CONCAT(tempat_lahir, ' ', DATE_FORMAT(tanggal_lahir,'%d-%m-%Y')) AS tanggal_lahir, CONCAT(alamat,' ', kota, ' ', provinsi, ' ',kode_pos) AS alamat,agama,   verifikasi,tanggal_daftar FROM perceraian WHERE verifikasi != 'true'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getDokumenPerceraian(){
			$query = mysqli_query($this->koneksi, "SELECT * FROM data_perceraian d INNER JOIN perceraian p WHERE d.id_cerai = p.id_cerai");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getDataById($id){
			$query = mysqli_query($this->koneksi, "SELECT * FROM data_perceraian WHERE id_cerai = '$id'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function delDokPernikahan($id){
			$query = mysqli_query($this->koneksi, "DELETE FROM data_perceraian WHERE id_cerai = '$id'");

			return $query;
		}
	}
?>