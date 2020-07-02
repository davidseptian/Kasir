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
	<a href="<?php echo site_url('admin/products/add') ?>" class="btn-1"><i class="fas fa-plus"></i> Tambahkan Stok</a>
	<button type="button" class="btn btn-info">Import Stok .xls</button>
	<button type="button" class="btn btn-info">Export Stok .xls</button>
</div>
				<!-- DataTables -->
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
										<th>HPP</th>
										<th>Harga Jual</th>
										<th>Laba</th>
										<th>Gambar Produk</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										
										<td><?php echo $product->id ?></td>
										<td><?php echo $product->merek ?></td>
										<td><?php echo $product->klasifikasi ?></td>
										<td><?php echo $product->stok ?></td>
										<td><?php echo $product->hpp ?></td>
										<td><?php echo $product->harga ?></td>
										<td><?php echo $product->laba ?></td>
										
										<td>
											<img src="<?php echo base_url('upload/product/'.$product->gbrmenu) ?>" width="60" />
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('admin/products/edit/'.$product->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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

	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>
	
	<script>
	function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
	}
	</script>

</body>

</html>