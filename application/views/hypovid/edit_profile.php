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
	<?php $this->load->view("hypovid/css/edite_profile.css") ?>
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
	<a href="<?php echo site_url('profile');?>"><img class="gbr-back" src="<?php echo base_url(); ?>assets/gambar/back.png"></a>
	<h3 class="texth3" style="text-decoration:none"> Edit Profil Toko</h3>
</div>

<div class="input">
							<form action="<?php echo site_url('admin/c_profile/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Masukkan Merek Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="price">Nomor Hp</label>
								<input class="form-control <?php echo form_error('nomor') ? 'is-invalid':'' ?>"
								 type="number" name="nomor" min="0" placeholder="Masukkan Jumlah Stok" />
								<div class="invalid-feedback">
									<?php echo form_error('nomor') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat Toko</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Pilih Klasifikasi Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Facebook</label>
								<input class="form-control <?php echo form_error('facebook') ? 'is-invalid':'' ?>"
								 type="text" name="facebook" placeholder="Pilih Klasifikasi Produk"/>
								<div class="invalid-feedback">
									<?php echo form_error('facebook') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Email </label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="Pilih Klasifikasi Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Instagram</label>
								<input class="form-control <?php echo form_error('instagram') ? 'is-invalid':'' ?>"
								 type="text" name="instagram" placeholder="Pilih Klasifikasi Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('instagram') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Visi Dan Misi</label>
								<input class="form-control <?php echo form_error('visi') ? 'is-invalid':'' ?>"
								 type="text" name="visi" placeholder="Pilih Klasifikasi Produk"/>
								<div class="invalid-feedback">
									<?php echo form_error('visi') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Motivasi</label>
								<input class="form-control <?php echo form_error('motivasi') ? 'is-invalid':'' ?>"
								 type="text" name="motivasi" placeholder="Pilih Klasifikasi Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('motivasi') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('gbrtoko') ? 'is-invalid':'' ?>"
								 type="file" name="gbrtoko" />
								
								<div class="invalid-feedback">
									<?php echo form_error('gbrtoko') ?>
								</div>
							</div>

						 <input class="btn btn-success" type="submit" name="btn" value="Save" />
						 </form>
</div>


<div class="home">
	<a href="<?php echo site_url('home');?>"><img class="gbr-home" src="<?php echo base_url(); ?>assets/gambar/home.png">
</div>

</div>
</body>
</html>