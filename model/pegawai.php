<?php

	class DataPegawai{

		private $koneksi;

		public function __construct($koneksi){
			$this->koneksi = $koneksi;
		}

		public function getDataPegawai(){
			$query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE level_user != 'admin'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function getDataById($id){
			$query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE id_user = '$id'");

			if($query){
				$data = array();

				while($row = mysqli_fetch_assoc($query)){
					$data[] = $row;
				}

				return $data;
			}
		}

		public function delDataUser($id){
			$query = mysqli_query($this->koneksi, "DELETE FROM user WHERE id_user = '$id'");

			return $query;
		}

	}

?>