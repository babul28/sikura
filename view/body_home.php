<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-heart"></i>
						</span>
						<h3>PERNIKAHAN</h3>
						<p>Ketika kamu sudah siap maka segerakanlah dan jangan di tunda !!!
						Ayo segera lengkapi berkas dan syarat kemudian daftarlah untuk menikah.</p>
						<p><a href="?page=pernikahan" class="btn btn-primary">DAFTAR</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-chevron-thin-down"></i>
						</span>
						<h3>PERCERAIAN</h3>
						<p>INGAT !!! Rosulullah bersabda : "Perkara halal yang dibenci Allah Ta'ala adalah thalaq atau perceraian."</p>
						<p><a href="?page=perceraian" class="btn btn-primary">DAFTAR</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-open-book"></i>
						</span>
						<h3>RUJUK NIKAH</h3>
						<p>Orang yang menyambung silaturahmi itu, bukanlah yang menyambung hubungan yang sudah terjalin, akan tetapi orang yang menyambung silaturahmi ialah orang yang menjalin kembali hubungan kekerabatan yang sudah terputus.</p>
						<p><a href="?page=rujuk-nikah" class="btn btn-primary">DAFTAR</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="gtco-counter" class="gtco-bg gtco-counter" style="background-image:url(images/img_bg_2.jpg);">
		<div class="gtco-container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-heart"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to=<?php $data = mysqli_fetch_assoc(mysqli_query($config->koneksi() , "SELECT COUNT(*) as jumlah FROM pernikahan")); $nikah = $data['jumlah']; echo $nikah; ?> data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Data Pendaftaran Pernikahan</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-chevron-thin-down"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to=<?php $data = mysqli_fetch_assoc(mysqli_query($config->koneksi() , "SELECT COUNT(*) as jumlah FROM perceraian")); $cerai = $data['jumlah']; echo $cerai; ?> data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Data Pendaftaran Perceraian</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-open-book"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to=<?php $data = mysqli_fetch_assoc(mysqli_query($config->koneksi() , "SELECT COUNT(*) as jumlah FROM rujuk")); $rujuk = $data['jumlah']; echo $rujuk; ?> data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Data Pendaftaran Rujuk Nikah</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-plus"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to=<?php $jumlah = $nikah+$cerai+$rujuk; echo $jumlah; ?> data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Total Pendaftar</span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="gtco-testimonial">
		<div class="gtco-container">
			<!-- <div class="row"> -->
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Testimonial</h2>
					</div>
				</div>
				<div class="row animate-box">
					
				
					<div class="owl-carousel owl-carousel-fullwidth ">
						<div class="item">
							<div class="testimony-slide active text-center">
								<figure>
									<img src="../images/person_1.jpg" alt="user">
								</figure>
								<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
								<blockquote>
									<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
							</div>
						</div>
						<div class="item">
							<div class="testimony-slide active text-center">
								<figure>
									<img src="../images/person_2.jpg" alt="user">
								</figure>
								<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								<blockquote>
									<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
							</div>
						</div>
						<div class="item">
							<div class="testimony-slide active text-center">
								<figure>
									<img src="../images/person_3.jpg" alt="user">
								</figure>
								<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								<blockquote>
									<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>