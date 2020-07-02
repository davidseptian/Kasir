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
	<?php $this->load->view("hypovid/css/bag1.css") ?>
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

<div id="nav-top">
</div>

<div id="navbar2">
	<a href="<?php echo site_url('profile');?>" class="nav2" style="text-decoration:none"><p class="nav2"> Hallo Aloka Store </p></a>
</div>

<div id="content-1">
	<a href="<?php echo site_url('home');?>"><img class="gbr-back1" src="<?php echo base_url(); ?>assets/gambar/backhome.png"></a>
	<h3 class="content-1"> Profil Toko Anda</h3>
	<img class="gbr-icon" src="<?php echo base_url(); ?>assets/gambar/corp.png">
	<div class="line-1">
	</div>
	<div class="btn-edit">
		<a href="<?php echo site_url('edit') ?>" class="btn-1"><i class="fas fa-plus"></i> Edit Profil</a>
	</div>
	
	<?php foreach ($profile as $product): ?>
	<div class="profil-1">
	<a href="#"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/corporate.png"></a>
	<p class="profil"><td><?php echo $product->nama ?></td></p>
	<a href="#"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/location.png"></a>
	<p class="profil">Tuliskan Alamat Toko</p>
	<a href="#"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/gmail.png"></a>
	<p class="profil">Tuliskan Email Toko</p>
	</div>
	<div class="profil-2">
	<a href="#"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/phone.png"></a>
	<p class="profil">Tuliskan Nomor Toko</p>
	<a href="#"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/facebook.png"></a>
	<p class="profil">Tuliskan Akun Facebook Toko</p>
	<a href="#"><img class="cover" src="<?php echo base_url(); ?>assets/gambar/instagram.png"></a>
	<p class="profil">Tuliskan Akun Instagram Toko</p>
	</div>
	<?php endforeach; ?>
</div>

<div id="content-2">
</br>
<h3 class="content-2"> Visi Misi</h3>
<img class="gbr-icon-1" src="<?php echo base_url(); ?>assets/gambar/lamp.png">
<div class="line-2">
	</div>
</div>

<div id="content-3">
</br>
<h3 class="content-3"> Motivation</h3>
<img class="gbr-icon-2" src="<?php echo base_url(); ?>assets/gambar/mutiara.png">
<div class="line-3">
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