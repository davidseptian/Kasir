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
	<?php $this->load->view("hypovid/css/add.css") ?>
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

<div id="content-up">
	<a href="<?php echo site_url('stock');?>"><img class="gbr-back" src="<?php echo base_url(); ?>assets/gambar/back.png"></a>
	<h3 class="texth3"> Input Stok Barang</h3>
</div>

<div class="input">
	<label for="name">Merek</label>
	<input class="form-control" type="text" name="name" min="0" placeholder="Merek Produk" />
	<label for="name">Klasifikasi</label>
	<input class="form-control" type="text" name="name" min="0" placeholder="Klasifikasi" />
	<label for="name">Stok</label>
	<input class="form-control" type="text" name="name" min="0" placeholder="Masukkan Stok" />
	<label for="name">HPP</label>
	<input class="form-control" type="text" name="name" min="0" placeholder="Masukkan HPP" />
	<label for="name">Harga</label>
	<input class="form-control" type="text" name="name" min="0" placeholder="Masukkan harga jual" />
	<label for="name">Photo</label>
			<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
			 type="file" name="image" />
			<div class="invalid-feedback">
			<?php echo form_error('image') ?>
			</div>
	<button type="button" class="btn btn-info">Upload</button>
</div>


<div class="home">
	<a href="<?php echo site_url('home');?>"><img class="gbr-home" src="<?php echo base_url(); ?>assets/gambar/home.png">
</div>

</div>
</body>
</html>