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
	<?php $this->load->view("hypovid/css/bag3.css") ?>
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
<a href="<?php echo site_url('home');?>"><img class="gbr-back1" src="<?php echo base_url(); ?>assets/gambar/backhome.png"></a>
<div id="content-up">
	<h3 class="texth3"> Data Stok Barang</h3>
</div>

<div id="content-add">
	<a href="<?php echo site_url('input') ?>" class="btn-1"><i class="fas fa-plus"></i> Tambahkan Stok</a>
	<button type="button" class="btn btn-info">Import Stok .xls</button>
	<button type="button" class="btn btn-info">Export Stok .xls</button>
</div>

<div class="content-table">
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Merek</th>
			<th>Klasifikasi</th>
			<th>Stok</th>
			<th>HPP</th>
			<th>Harga</th>
			<th>Laba</th>
			<th>Gambar</th>							
		</tr>
		<?php foreach ($hypostok as $stk): ?>
		<tr>
			<td><?php echo $stk->merek ?></td>
			<td><?php echo $stk->klasifikasi ?></td>
			<td><?php echo $stk->stok ?></td>
			<td><?php echo $stk->hpp ?></td>
			<td><?php echo $stk->harga ?></td>
			<td><?php echo $stk->laba ?></td>
		</tr>
<?php endforeach; ?>
		
	</table>
</div>

<div class="home">
	<a href="<?php echo site_url('home');?>"><img class="gbr-home" src="<?php echo base_url(); ?>assets/gambar/home.png">
</div>

</div>
</body>
</html>