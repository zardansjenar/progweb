<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Admin</title>
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

			  	<a class="brand" href="index.html"> Menu Admin </a>

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
								<a href="<?php echo base_url('index.php/admin') ?>">
									<i class="menu-icon icon-folder-close"></i>
									Tambah Siswa
								</a>
							</li>
							<li class="active">
								<a href="<?php echo base_url('index.php/admin/createPelatih') ?>">
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
								<h3>Tambahkan Data Pelatih</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
										<?php echo form_open='admin/inputDataPelatih' ?>
											NIP : <br> 
											<input type = "text" name="nip" placeholder="Masukkan NISN"></br>
											Jenis pelatih : <br> 
											<input type = "text" name="pelatih" placeholder="Masukkan kelas"></br>			
											Nama : <br> 
											<input type = "text" name="nama" placeholder="Masukkan nama"></br>
											Alamat : <br> 
											<input type = "text" name="alamat" placeholder="Masukkan alamat"></br>
											Tanggal lahir : <br> 
											<input type = "date" name="tl"></br>
											No telp : <br> 
											<input type = "text" name="noTelp" placeholder="Masukkan no telp"></br>			
											Email : <br> 
											<input type = "text" name="email" placeholder="Masukkan email"></br>			
											Jenis kelamin : <br> 
											<input type = "radio" name="jk" value="laki">Laki-laki</br>		
											<input type = "radio" name="jk" value="perempuan">Perempuan</br>			
											Username : <br> 
											<input type = "text" name="username" placeholder="Masukkan username"></br>			
											Password : <br> 
											<input type = "text" name="password" placeholder="Masukkan password"></br>			
											<input type = "submit" name="submit" value="submit"></br>			
										<?php echo form_close(); ?>
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