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
	<a href="<?php echo site_url('admin/products/');?>"><img class="gbr-back" src="<?php echo base_url(); ?>assets/gambar/back.png"></a>
	<h3 class="texth3"> Input Stok Barang</h3>
</div>
			<div class="input">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-body">

						<form action="<?php echo site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data" >		
							<div class="form-group">
								<label for="name">Merek</label>
								<input class="form-control <?php echo form_error('merek') ? 'is-invalid':'' ?>"
								 type="text" name="merek" placeholder="Masukkan Merek Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('merek') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Klasifikasi</label>
								<input class="form-control <?php echo form_error('klasifikasi') ? 'is-invalid':'' ?>"
								 type="text" name="klasifikasi" placeholder="Pilih Klasifikasi Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('klasifikasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Jumlah Stok</label>
								<input class="form-control <?php echo form_error('stok') ? 'is-invalid':'' ?>"
								 type="number" name="stok" min="0" placeholder="Masukkan Jumlah Stok" />
								<div class="invalid-feedback">
									<?php echo form_error('stok') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">HPP Produk</label>
								<input class="form-control <?php echo form_error('hpp') ? 'is-invalid':'' ?>"
								 type="number" name="hpp" placeholder="Masukkan Merek Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('hpp') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Harga Produk</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="number" name="harga" placeholder="Masukkan Merek Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Laba Per Produk</label>
								<input class="form-control 
								<?php echo form_error('laba') ? 'is-invalid':'' ?>"
								 type="number" name="laba" placeholder="Masukkan Merek Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('laba') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('gbrmenu') ? 'is-invalid':'' ?>"
								 type="file" name="gbrmenu" />
								<div class="invalid-feedback">
									<?php echo form_error('gbrmenu') ?>
								</div>
							</div>

							

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<div class="home">
					<a href="<?php echo site_url('home');?>"><img class="gbr-home" src="<?php echo base_url(); ?>assets/gambar/home.png">
				</div>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>