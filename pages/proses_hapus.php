<?php
	if(isset($_POST['kode'])) {
		
		include('../koneksi.php');
		$kode = $_POST['kode'];
		
		if($kode == 0) {
			
			try {
				$username		= $_POST['username'];
				
				$sql = "DELETE FROM pengelola WHERE username='". $username ."'";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
			catch(exception $x) {
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
		}
		
		if($kode == 1) {
			try {
				$kode_gejala	= $_POST['kode_gejala'];
			
				$sql = "DELETE FROM gejala WHERE kode_gejala='". $kode_gejala ."'";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
			catch(exception $x) {
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
		}
		
		if($kode == 2) {
			
			try {
				$kode_penyakit	= $_POST['kode_penyakit'];
				
				$sql = "DELETE FROM penyakit WHERE kode_penyakit='". $kode_penyakit ."'";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
			catch(exception $x) {
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
		}
		
		if($kode == 3) {
			
			try {
				$id_diagnosa	= $_POST['id_diagnosa'];
				
				$sql = "DELETE FROM diagnosa WHERE id_diagnosa='". $id_diagnosa ."'";
				$statement = $db->prepare($sql);
				$statement->execute();
				
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
			catch(exception $x) {
				echo '
					<script>
						window.history.back();
					</script>
				';
			}
		}
	}
?>