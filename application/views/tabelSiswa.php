<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modul 10</title>
	<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/css/theme.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('files/images/icons/css/font-awesome.css') ?>" rel="stylesheet">
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html"> Admin </a>

			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="<?php echo base_url('index.php/mahasiswa') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Tambah Siswa
								</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url('index.php/mahasiswa') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Tambah Pelatih
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/mahasiswa/activity') ?>">
									<i class="menu-icon icon-circle-arrow-up"></i>
									Buat Berita Umum
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/mahasiswa/view') ?>">
									<i class="menu-icon icon-table"></i>
									Kelola Siswa 
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/mahasiswa/view') ?>">
									<i class="menu-icon icon-table"></i>
									Kelola Pelatih 
								</a>
							</li>
						</ul><!--/.widget-nav-->
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Tambahkan Data siswa</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<table border = '1' >
										<tr>
											<td>No</td>
											<td>NISN</td>
											<td>Kelas</td>
											<td>Nama</td>
											<td>Alamat</td>
											<td>Tanggal lahir</td>
											<td>No telp</td>
											<td>Email</td>
											<td>Kelamin</td>
											<td>Username</td>
											<td>Password</td>
										</tr>
										
										<?php
											$no = $this->uri->segment(3)+1;
											foreach ($extrakulikuler as $valsiswa)
											{
										?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $valsiswa->nisn; ?></td>
												<td><?php echo $valsiswa->kelas; ?></td>
												<td><?php echo $valsiswa->nama; ?></td>
												<td><?php echo $valsiswa->alamat; ?></td>
												<td><?php echo $valsiswa->tl; ?></td>
												<td><?php echo $valsiswa->no_telp; ?></td>
												<td><?php echo $valsiswa->email; ?></td>
												<td><?php echo $valsiswa->jk; ?></td>
												<td><?php echo $valsiswa->username; ?></td>
												<td><?php echo $valsiswa->password; ?></td>
											</tr>
										<?php
											$no++;
											}
										?>
									</div>
								</div>
								
                            </div><!--/.module-body-->
						</div><!--/.module-->
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			
		</div>
	</div>
</body>
</html>