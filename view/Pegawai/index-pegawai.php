<?php
	
	isset($_GET['act'])? $act = $_GET['act'] : $act = '';

	switch ($act) {
		case 'edit-dokumen-nikah':
			$id = $_GET['id_nikah'];
			foreach ($nikah->getDataById($id) as $key) {
			$data = $key['tanggal_pernikahan'];
			}
			break;
		case 'hapus-dokumen-nikah':
			$id = $_GET['id_nikah'];
			$query = $nikah->delDokPernikahan($id);
			if($query != ''){?>
                  <script>
                    alert("<?php echo 'Dokumen Pernikahan dengan Id Pendaftaran '.$id.' Sukses di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-pernikahan&id_nikah=".$id."&delete+dokumen+pernikahan=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Dokumen Pernikahan dengan Id Pendaftaran '.$id.' Gagal di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-pernikahan&id_nikah=".$id."&delete+dokumen+pernikahan=failed"?>";
                  </script>
            	<?php
            }
			break;
		case 'edit-dokumen-cerai':
			$id = $_GET['id_cerai'];
			foreach ($cerai->getDataById($id) as $key) {
			$data = $key['tanggal_perceraian'];
			}
			break;
		case 'hapus-dokumen-cerai':
			$id = $_GET['id_cerai'];
			$query = $cerai->delDokPernikahan($id);
			if($query != ''){?>
                  <script>
                    alert("<?php echo 'Dokumen Perceraian dengan Id Pendaftaran '.$id.' Sukses di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-perceraian&id_cerai=".$id."&delete+dokumen+perceraian=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Dokumen Perceraian dengan Id Pendaftaran '.$id.' Gagal di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-perceraian&id_cerai=".$id."&delete+dokumen+perceraian=failed"?>";
                  </script>
            	<?php
            }
			break;
		case 'edit-dokumen-rujuk':
			$id = $_GET['id_rujuk'];
			foreach ($rujuk->getDataById($id) as $key) {
			$data = $key['tanggal_rujuk'];
			}
			break;
		case 'hapus-dokumen-rujuk':
			$id = $_GET['id_rujuk'];
			$query = $rujuk->delDokRujuk($id);
			if($query != ''){?>
                  <script>
                    alert("<?php echo 'Dokumen Rujuk dengan Id Pendaftaran '.$id.' Sukses di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-rujuk&id_rujuk=".$id."&delete+dokumen+rujuk=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Dokumen Rujuk dengan Id Pendaftaran '.$id.' Gagal di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=dokumen-rujuk&id_rujuk=".$id."&delete+dokumen+rujuk=failed"?>";
                  </script>
            	<?php
            }
			break;
		case 'edit-data-penghulu':
			$id = $_GET['id_penghulu'];
			foreach ($penghulu->getDataById($id) as $key) {
				$data = $key;
			}
			break;
		case 'hapus-data-penghulu':
			$id = $_GET['id_penghulu'];
			$query = $penghulu->delDataPenghulu($id);
			if($query != ''){?>
                  <script>
                    alert("<?php echo 'Data Penghulu dengan Id penghulu '.$id.' Sukses di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-penghulu&id_penghulu=".$id."&delete+data+penghulu=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Data Penghulu dengan Id penghulu '.$id.' Gagal di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-penghulu&id_penghulu=".$id."&delete+data+penghulu=failed"?>";
                  </script>
            	<?php
            }
			break;
		case 'edit-data-user':
			$id = $_GET['id_user'];
			foreach ($pegawai->getDataById($id) as $key) {
				$data = $key;
			}
			break;
		case 'hapus-data-user':
			$id = $_GET['id_user'];
			$query = $pegawai->delDataUser($id);
			if($query != ''){?>
                  <script>
                    alert("<?php echo 'Data user dengan Id user '.$id.' Sukses di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-user&id_user=".$id."&delete+data+user=success"?>";
                  </script>
                  <?php
                }else{?>
                  <script>
                    alert("<?php echo 'Data user dengan Id user '.$id.' Gagal di Hapus' ?>");
                    window.location="<?php echo "index.php?user=admin&page=data-user&id_user=".$id."&delete+data+user=failed"?>";
                  </script>
            	<?php
            }
			break;			
		default:
			break;
	}
?>