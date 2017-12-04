	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/login.jpg); margin-bottom: 50px;">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><b>DAFTAR PERCERAIAN</b></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="row">
					<div class="col-md-12">
					<h1 align="center">Formulir Pendaftaran</h1>
					</div>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12">
					<div class="row">
						<form action="index.php?page=perceraian&act=daftar-cerai" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal">
							<div class="col-md-10">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="NIK" class="control-label col-md-3 col-sm-2 col-xs-12">NIK</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="NIK" class="form-control" placeholder="Nomor Induk Kependudukan" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="KK" class="control-label col-md-3 col-sm-2 col-xs-12">Nomor KK</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="KK" class="form-control" placeholder="Nomor Kartu Keluarga" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="nama_suami" class="control-label col-md-3 col-sm-2 col-xs-12">Nama Lengkap</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="tempat_lahir_l" class="control-label col-md-3 col-sm-2 col-xs-12">Tempat Lahir</label>
											<div class="col-md-6 col-sm-7 col-xs-7">
												<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-5">
												<input type="date" name="tanggal_lahir" class="form-control" style="padding-left: 8px; padding-right: 8px; text-align: center" values='Y-m-d' required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="usia_suami" class="control-label col-md-3 col-sm-2 col-xs-12">Usia</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="int" name="usia" class="form-control" placeholder="Usia" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="alamat" class="control-label col-md-3 col-sm-2 col-xs-12">Alamat</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="kota" class="control-label col-md-3 col-sm-2 col-xs-12"></label>
											<div class="col-md-4 col-sm-5 col-xs-5" style="padding-right: 5px;">
												<input type="text" name="kota" class="form-control" placeholder="Kota" required>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-4" style="padding-left: 5px; padding-right: 5px;">
												<select name="provinsi" class="form-control" style="padding-left: 10px; padding-right: 10px;">
			        								<option value="Jawa Timur" selected>Jawa Timur</option>
			        								<option value="Jawa Tengah">Jawa Tengah</option>
			        								<option value="Jawa Barat">Jawa Barat</option>
			      								</select>
											</div>
											<div class="col-md-2 col-sm-2 col-xs-3" style="padding-left: 5px;">
												<input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" style="padding-right: 5px; padding-left: 5px; text-align: center;" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="agama" class="control-label col-md-3 col-sm-2 col-xs-12">Agama</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<select name="agama" class="form-control">
													<option value="Islam" selected>Islam</option>
													<option value="Katholik">Katholik</option>
													<option value="Protestan">Protestan</option>
													<option value="Hindu">Hindu</option>
													<option value="Buddha">Budha</option>
													<option value="Konghucu">Konghucu</option>
												</select>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="kewarganegaraan" class="control-label col-md-3 col-sm-2 col-xs-12">Kewarganegaraan</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="buku_nikah" class="control-label col-md-3 col-sm-2 col-xs-12">Buku Nikah</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="buku_nikah" class="form-control" placeholder="Buku Nikah" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="image_NIK" class="control-label col-md-3 col-sm-2 col-xs-12">Kartu Tanda Penduduk / KTP</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="image_NIK" class="form-control" placeholder="FOTO KTP" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="image_KK" class="control-label col-md-3 col-sm-2 col-xs-12">Kartu Keluarga / KK</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="image_KK" class="form-control" placeholder=" FOTO Kartu Keluarga" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="akte_anak" class="control-label col-md-3 col-sm-2 col-xs-12">Akte Kelahiran Anak</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="akte_anak" class="form-control" placeholder="Akte Kelahiran Anak" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_kuasa_khusus" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Kuasa Khusus</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_kuasa_khusus" class="form-control" placeholder="Surat Kuasa Khusus" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_kuasa_insidential" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Kuasa Insidential</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_kuasa_insidential" class="form-control" placeholder="Surat Kuasa Insidential" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_izin" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Izin Cerai</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_izin" class="form-control" placeholder="Surat Izin Cerai" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="permohonan_hak_asuh" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Permohonan Hak Asuh</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="permohonan_hak_asuh" class="form-control" placeholder="Surat Permohonan Hak Asuh" required>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="daftar_harta" class="control-label col-md-3 col-sm-2 col-xs-12">Daftar Harta</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
											<input type="file" name="daftar_harta" class="form-control" placeholder="Daftar Harta" required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_tidak_mampu" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Keterangan Tidak Mampu</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_tidak_mampu" class="form-control" placeholder="Surat Keterangan Tidak Mampu" required>
											</div>
										</div>
									</div>									
								</div>
							</div>
							</divp
							</div>
							</div>
							<div class="col-md-12" style="padding-top: 15px;">
								<div class="col-md-offset-5 col-sm-offset-4 col-xs-offset-4">
									<button type="submit" name="daftar" class="btn btn-primary col-md-3 col-xs-6">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>				
			</div>
		</div>