<?php
	
	class config{

		private $conn;
		private $host = "localhost";
		private $user = "root";
		private $password = "";
		private $database = "sikura";

		public function koneksi($status = 'open'){
			if($status == 'open'){
				$this->conn = new mysqli($this->host, $this->user, $this->password, $this->database) or die(mysqli_error());
				return $this->conn;
			}elseif($status == 'close') {
				mysql_close($conn);
			}
		}

		public function login(){
			$conn = $this->conn;
			$sql_check = "SELECT nama, level_user, id_user, foto FROM user WHERE username = ? AND password = ?";

	        $check_log = $conn->prepare($sql_check);
	        $check_log->bind_param('ss', $username, $password);

	        $username = $_POST['username'];

	        $password = md5($_POST['password']);

	        $check_log->execute();

	        $check_log->store_result();

	        if ( $check_log->num_rows > 0 ) {
	            $check_log->bind_result($nama, $level_user, $id_user, $foto);

	            while ( $check_log->fetch() ) {
	                $_SESSION['level_user'] = $level_user;
	                $_SESSION['id_user']    = $id_user;
	                $_SESSION['nama']       = $nama;
	                $_SESSION['foto']       = $foto;
	            }

	            $check_log->close();

	        } else {
	            echo '<script>alert("Kombinasi Username dan Password Salah!!!");window.location="?login=login";</script>';
	            exit();
	        }
		}

		public function logout(){
			if( isset($_SESSION['level_user']) ){
				unset($_SESSION['level_user']);
				if(!isset($_SESSION['level_user']) ){
					header('location:./');
				}
			}
		}
	}

?>