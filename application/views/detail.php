<?php
include 'templates/header.php';
include 'templates/sidebar.php';
?>
<div class="container-fluid">
	<div class="row text-center">
		<div class="card col-md-6 col-xs-12">
			<img src="<?php echo base_url('img/'.$foto); ?>" class="card-img-top" style=" height: auto;">
		</div>
		<div class="card mb-3 col-md-6 col-xs-12">
			<div class="card-header">
				<div class="card-title" style="font-weight: bold">
					<h2>
						<span style="color: black"><?php echo $nm_prd; ?></span>
					</h2>
				</div>
			</div>
			<div class="card-body">
				<h2>
					<div style="text-align: left;">
						<span class="badge badge-light" style="color: red">Rp <?php echo number_format($harga,0,",","."); ?></span>
					</div>
				<br>
				</h2>
				<h4><div style="text-align: left"><span style="color: black">Deskripsi Produk</span></div></h4>
				<div style="text-align: left">
					<span style="font-weight: bold"><?php echo $keterangan; ?></span>
				</div>
			</div>
			<div style="font-weight: bold" class="card-footer">
				<a href="#" class="btn btn-md btn-primary">Masukkan Keranjang
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
				</a>
				<span class="badge badge-warning">Jumlah
					<input type="number" name="stok" class="input-sm">
				</span>
			</div>
		</div>
		<div>
			<!-- lak gae maneh ng kene -->
		</div>
	</div>
</div>
<?php include 'templates/footer.php'; ?>