	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/login.jpg); margin-bottom: 50px;">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><b>DAFTAR PERNIKAHAN</b></h1>
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
						<form action="index.php?page=pernikahan&act=daftar-nikah" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal">
							<div class="col-md-6">
								<h3 align="center" style="padding-top: 30px;">Calon Mempelai Laki - laki</h3>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="NIK_l" class="control-label col-md-3 col-sm-2 col-xs-12">Nomor KTP</label>
											<div class="col-md-7 col-sm-7 col-xs-9">
												<input type="text" name="NIK_l" class="form-control" placeholder="NIK" >
											</div>
											<div class="col-md-2 col-sm-3 col-xs-3">
												<span class="form-control fileUpload" style="text-align: center;padding-right: 0px;padding-left: 0px;">Upload
												<input type="file" class="upload" name="img_no_ktp_l" required></span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="KK_l" class="control-label col-md-3 col-sm-2 col-xs-12">Nomor KK</label>
											<div class="col-md-7 col-sm-7 col-xs-9">
												<input type="text" name="KK_l" class="form-control" placeholder="Nomor Kartu Keluarga" >
											</div>
											<div class="col-md-2 col-sm-3 col-xs-3">
												<span class="form-control fileUpload" style="text-align: center;padding-right: 0px;padding-left: 0px;">Upload
												<input type="file" class="upload" name="img_no_kk_l" required></span>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="nama_lengkap_l" class="control-label col-md-3 col-sm-2 col-xs-12">Nama Lengkap</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="nama_lengkap_l" class="form-control" placeholder="Nama Lengkap" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="tempat_lahir_l" class="control-label col-md-3 col-sm-2 col-xs-12">Tempat Lahir</label>
											<div class="col-md-5 col-sm-7 col-xs-7">
												<input type="text" name="tempat_lahir_l" class="form-control" placeholder="Tempat Lahir" >
											</div>
											<div class="col-md-4 col-sm-3 col-xs-5">
												<input type="date" name="tanggal_lahir_l" class="form-control" style="padding-left: 8px; padding-right: 8px; text-align: center" values='Y-m-d' >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="umur_l" class="control-label col-md-3 col-sm-2 col-xs-12">Umur</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="number" name="umur_l" class="form-control" placeholder="Umur" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="alamat_l" class="control-label col-md-3 col-sm-2 col-xs-12">Alamat</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="alamat_l" class="form-control" placeholder="Alamat" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="kota_l" class="control-label col-md-3 col-sm-2 col-xs-12"></label>
											<div class="col-md-4 col-sm-5 col-xs-5" style="padding-right: 5px;">
												<input type="text" name="kota_l" class="form-control" placeholder="Kota" >
											</div>
											<div class="col-md-3 col-sm-3 col-xs-4" style="padding-left: 5px; padding-right: 5px;">
												<select name="provinsi_l" class="form-control" style="padding-left: 10px; padding-right: 10px;">
			        								<option value="Jawa Timur" selected>Jawa Timur</option>
			        								<option value="Jawa Tengah">Jawa Tengah</option>
			        								<option value="Jawa Barat">Jawa Barat</option>
			      								</select>
											</div>
											<div class="col-md-2 col-sm-2 col-xs-3" style="padding-left: 5px;">
												<input type="text" name="kode_pos_l" class="form-control" placeholder="Kode Pos" style="padding-right: 5px; padding-left: 5px; text-align: center;" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="agama_1" class="control-label col-md-3 col-sm-2 col-xs-12">Agama</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<select name="agama_l" class="form-control">
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
											<label for="pekerjaan_l" class="control-label col-md-3 col-sm-2 col-xs-12">Pekerjaan</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="pekerjaan_l" class="form-control" placeholder="Pekerjaan" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n1_l" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N1</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n1_l" class="form-control" placeholder="Dokumen N1" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n2_l" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N2</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n2_l" class="form-control" placeholder="Dokumen N2" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n3_l" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N3</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n3_l" class="form-control" placeholder="Dokumen N3" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n4_l" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N4</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n4_l" class="form-control" placeholder="Dokumen N4" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="foto_l" class="control-label col-md-3 col-sm-2 col-xs-12">Foto</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="foto_l" class="form-control" placeholder="Foto" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_ijin_ortu_l" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Ijin Orang Tua</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_ijin_ortu_l" class="form-control" placeholder="Surat Ijin Orang Tua" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_talak_l" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Talak / Cerai</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_talak_l" class="form-control" placeholder="Surat Talak / Cerai" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_ijin_tni_l" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Ijin Anggota TNI/POLRI</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_ijin_tni_l" class="form-control" placeholder="Surat Ijin Anggota TNI/POLRI" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_ijin_bm_l" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Pernyataan Belum Menikah</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_ijin_bm_l" class="form-control" placeholder="Surat Pernyataan Belum Menikah" >
											</div>
										</div>
									</div>									
								</div>
							</div>
							<!--- Kolom Mempelai Wanita -->
							<div class="col-md-6">
								<h3 align="center" style="padding-top: 30px;">Calon Mempelai Perempuan</h3>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="NIK_p" class="control-label col-md-3 col-sm-2 col-xs-12">Nomor KTP</label>
											<div class="col-md-7 col-sm-7 col-xs-9">
												<input type="text" name="NIK_p" class="form-control" placeholder="NIK" >
											</div>
											<div class="col-md-2 col-sm-3 col-xs-3">
												<span class="form-control fileUpload" style="text-align: center;padding-right: 0px;padding-left: 0px;">Upload
												<input type="file" class="upload" name="img_no_ktp_p" required></span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="KK_p" class="control-label col-md-3 col-sm-2 col-xs-12">Nomor KK</label>
											<div class="col-md-7 col-sm-7 col-xs-9">
												<input type="text" name="KK_p" class="form-control" placeholder="Nomor KK" >
											</div>
											<div class="col-md-2 col-sm-3 col-xs-3">
												<span class="form-control fileUpload" style="text-align: center;padding-right: 0px;padding-left: 0px;">Upload
												<input type="file" class="upload" name="img_no_kk_p" required></span>
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="nama_lengkap_p" class="control-label col-md-3 col-sm-2 col-xs-12">Nama Lengkap</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="nama_lengkap_p" class="form-control" placeholder="Nama Lengkap" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="tempat_lahir_p" class="control-label col-md-3 col-sm-2 col-xs-12">Tempat Lahir</label>
											<div class="col-md-5 col-sm-7 col-xs-7">
												<input type="text" name="tempat_lahir_p" class="form-control" placeholder="Tempat Lahir" >
											</div>
											<div class="col-md-4 col-sm-3 col-xs-5">
												<input type="date" name="tanggal_lahir_p" class="form-control" style="padding-left: 8px; padding-right: 8px; text-align: center" values='Y-m-d' >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="umur_p" class="control-label col-md-3 col-sm-2 col-xs-12">Umur</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="number" name="umur_p" class="form-control" placeholder="Umur" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="alamat_p" class="control-label col-md-3 col-sm-2 col-xs-12">Alamat</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="alamat_p" class="form-control" placeholder="Alamat" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="kota_p" class="control-label col-md-3 col-sm-2 col-xs-12"></label>
											<div class="col-md-4 col-sm-5 col-xs-5" style="padding-right: 5px;">
												<input type="text" name="kota_p" class="form-control" placeholder="Kota" >
											</div>
											<div class="col-md-3 col-sm-3 col-xs-4" style="padding-left: 5px; padding-right: 5px;">
												<select name="provinsi_p" class="form-control" style="padding-left: 10px; padding-right: 10px;">
			        								<option value="Jawa Timur" selected>Jawa Timur</option>
			        								<option value="Jawa Tengah">Jawa Tengah</option>
			        								<option value="Jawa Barat">Jawa Barat</option>
			      								</select>
											</div>
											<div class="col-md-2 col-sm-2 col-xs-3" style="padding-left: 5px;">
												<input type="text" name="kode_pos_p" class="form-control" placeholder="Kode Pos" style="padding-right: 5px; padding-left: 5px; text-align: center;" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="agama_p" class="control-label col-md-3 col-sm-2 col-xs-12">Agama</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<select name="agama_p" class="form-control">
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
											<label for="pekerjaan_p" class="control-label col-md-3 col-sm-2 col-xs-12">Pekerjaan</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="text" name="pekerjaan_p" class="form-control" placeholder="Pekerjaan" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n1_p" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N1</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n1_p" class="form-control" placeholder="Dokumen N1" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n2_p" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N2</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n2_p" class="form-control" placeholder="Dokumen N2" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n3_p" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N3</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n3_p" class="form-control" placeholder="Dokumen N3" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="dokumen_n4_p" class="control-label col-md-3 col-sm-2 col-xs-12">Dokumen N4</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="dokumen_n4_p" class="form-control" placeholder="Dokumen N4" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="foto_p" class="control-label col-md-3 col-sm-2 col-xs-12">Foto</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="foto_p" class="form-control" placeholder="Foto" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_ijin_ortu_p" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Ijin Orang Tua</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_ijin_ortu_p" class="form-control" placeholder="Surat Ijin Orang Tua" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_talak_p" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Talak / Cerai</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_talak_p" class="form-control" placeholder="Surat Talak / Cerai" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_ijin_tni_p" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Ijin Anggota TNI/POLRI</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_ijin_tni_p" class="form-control" placeholder="Surat Ijin Anggota TNI/POLRI" >
											</div>
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<label for="surat_ijin_bm_p" class="control-label col-md-3 col-sm-2 col-xs-12">Surat Pernyataan Belum Menikah</label>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<input type="file" name="surat_ijin_bm_p" class="form-control" placeholder="Surat Pernyataan Belum Menikah" >
											</div>
										</div>
									</div>									
								</div>
							</div>
							</div>
							<div class="col-md-12" style="padding-top: 15px;">
								<div class="col-md-offset-5 col-sm-offset-4 col-xs-offset-4">
									<button type="submit" name="daftar" value="daftar" class="btn btn-primary col-md-3 col-xs-6">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>				
			</div>
		</div>