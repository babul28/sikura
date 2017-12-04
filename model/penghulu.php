<?php
	
	class DataPenghulu{
	
		private $koneksi;

		public function __construct($koneksi){
			$this->koneksi = $koneksi;
		}

		public function getDataPenghulu(){

			$query = mysqli_query($this->koneksi, "SELECT id_penghulu, nama_penghulu, CONCAT(alamat, ' ', kota, ' ', provinsi, ' ', kode_pos) AS alamat, jabatan FROM penghulu");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}

		}

		public function getDataById($id){
			$query = mysqli_query($this->koneksi, "SELECT * FROM penghulu WHERE id_penghulu = '$id'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function delDataPenghulu($id){
			$query = mysqli_query($this->koneksi, "DELETE FROM penghulu WHERE id_penghulu = '$id'");

			return $query;
		}
	}

?>