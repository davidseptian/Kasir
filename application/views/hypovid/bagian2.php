<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ."". ucfirst($this->uri->segment(2)) ?></title>


	<style type="text/css">
	
	

	<!--::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	-->
	<?php $this->load->view("hypovid/css/bag2.css") ?>
	</style>
	<?php $this->load->view("hypovid/_partials/head.php") ?>
</head>
<body>
<div id="body">
<img class="gambar" src="<?php echo base_url(); ?>assets/gambar/bgrn1.jpg">

<div id="upbody">
<div id="navbar">
	
  <a class="nav-a" href="<?php echo site_url('home');?>" style="text-decoration:none" >Hypovid</a>
  </div>

<div class="cont-1">
	<h4 class="content-1">Daftar Produk</h4>
	</div>
<div id="content-1">
	
	<?php $this->load->view("admin/product/menu.php") ?>
</div>

<div id="nav-top">
</div>

<div id="navbar2">
	<a href="<?php echo site_url('profile');?>" class="nav2" style="text-decoration:none"><p class="nav2"> Hallo Aloka Store </p></a>
</div>
<a href="<?php echo site_url('home');?>"><img class="gbr-back1" src="<?php echo base_url(); ?>assets/gambar/backhome.png"></a>
<div id="content-2">
<h4 class="content-1">Tabel Penjualan</h4>
	
	<div class="content-table">
					
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Merek</th>
										<th>Klasifikasi</th>
										<th>Jumlah Stok</th>
										<th>Harga Jual</th>
										<th>Gambar Produk</th>
									</tr>
								</thead>
								<tbody>
									

								</tbody>
							</table>
						</div>
					</div>
				</div>
	
</div>


<div class="home">
	<a href="<?php echo site_url('home');?>"><img class="gbr-home" src="<?php echo base_url(); ?>assets/gambar/home.png">
</div>
<div id="footer">
</div>
</div>
</body>
</html>