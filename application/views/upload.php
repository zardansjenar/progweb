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

			  	<a class="brand" href="index.html"> Modul 10 </a>

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
									Tambah Mahasiswa
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/mahasiswa/activity') ?>">
									<i class="menu-icon icon-circle-arrow-up"></i>
									Upload File
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/mahasiswa/view') ?>">
									<i class="menu-icon icon-table"></i>
									Tabel Mahasiswa 
								</a>
							</li>
						</ul><!--/.widget-nav-->
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Upload</h3>
							</div>
							<div class="module-body">
								<div class="stream-composer media">
									<div class="media-body">
									<?php echo $error;?>

									<?php echo form_open_multipart('mahasiswa/do_upload');?>

									<input type="file" name="userfile" size="20" />

									<br /><br />

									<input type="submit" value="upload" />

									</form>
								
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