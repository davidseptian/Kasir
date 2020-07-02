<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ."  ". ucfirst($this->uri->segment(2)) ?></title>


	<style type="text/css">
	
	

	<!--::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	-->
	<?php $this->load->view("hypovid/css/hypovid.css") ?>
	</style>
	<?php $this->load->view("hypovid/_partials/head.php") ?>
</head>
<body>
<div id="body">
<img class="gambar" src="<?php echo base_url(); ?>assets/gambar/bgrn1.jpg">


<div id="upbody">
<div id="navbar">
	
  <a class="nav-a" href="<?php echo site_url('home');?>" style="text-decoration:none" >Hypovid</a>
  <!--
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="nav-search">
  
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	</div>
 -->
  </div>

<div id="nav-top">
</div>

<div id="navbar2">
	<a href="<?php echo site_url('profile'); ?>" class="nav2" style="text-decoration:none"><p class="nav2"> Hallo Aloka Store </p></a>
</div>

<div id="content">
	</br></br>
	
	<div class="c-1">
	<a href="<?php echo site_url('profile'); ?>"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/corporate.png"></a>
		<div class="p-1">
		<a href="<?php echo site_url('profile'); ?>" style="text-decoration:none"><p class="p-1"> Profil Toko </p></a>
		</div>
	</div>
	<div class="c-2">
	<a href="<?php echo site_url('product'); ?>"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/sales.png"></a>
		<div class="p-1">
		<a href="<?php echo site_url('product'); ?>" style="text-decoration:none"><p class="p-1"> Produk Dijual </p></a>
		</div>
	</div>
	<div class="c-3">
	<a href="<?php echo site_url('admin/products/'); ?>"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/stock.png"></a>
		<div class="p-1">
		<a href="<?php echo site_url('admin/products/'); ?>" style="text-decoration:none"><p class="p-1"> Stok Produk </p></a>
		</div>
	</div>
	<div class="c-4">
	<a href="<?php echo site_url('laporan'); ?>"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/laporan.png"></a>
		<div class="p-1">
		<a href="<?php echo site_url('laporan'); ?>" style="text-decoration:none"><p class="p-1"> Laporan Penjualan </p></a>
		</div>
	</div>
	
</div>

<div id="sabuk">
	<div class="sabuk-name">
		<a href="#"> @hypospot.id </a>
	</div>
</div>

<div id="down">
	<div class="card-deck">
	
    <div class="card-1">
      <h4 class="card-1">Tentang Hypovid</h4>
      <p class="card-1">Hypovid mengerti betapa susah dan rumitnya pembukuan sebuah penjualan, harus menggunakan buku yang terpisah untuk mengerjakan itu.</br> Tetapi dengan datangnya apps Hypovid ini kita menjawab keresahan anda dengan membuatkan sebuah platform yang dapat mempermudah kinerja pembukuan toko anda.</p> </br></br>
		<div class="down-1">
	</div>
	</div>
	<div class="down-2">
	</div>
  <div class="card-1">
      <h4 class="card-2">Kontak Kami</h4>
	  <img class="gbr-kontak" src="<?php echo base_url(); ?>assets/gambar/ig.png"><p class="card-2">@hypospotid</p>
	  <img class="gbr-kontak" src="<?php echo base_url(); ?>assets/gambar/wa.png"><p class="card-2">0896-3499-3687</p>
      <img class="gbr-kontak" src="<?php echo base_url(); ?>assets/gambar/email.png"><p class="card-2">septianbdavid2gmail.com</p>
		<div class="down-3">
	</div>
	</div>
	<div class="down-4">
	</div>
	<!--
    <div class="card-2">
			</br><p class="footer">Ini adalah footer</p>
	</div>
   -->
</div>
</div>


</div>
</div>
</body>

</html>