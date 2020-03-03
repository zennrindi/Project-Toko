
	
	<div class="content-wrapper">
		<div class="container">
			<h3 align="center">DETAIL DATA JUAL</h3>

		<table class="table table-striped">
			<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>Kode Transaksi</th>
				<th>Waktu</th>
				<th>Total</th>
				<th>Seller</th>
				<th>Customer</th>
				<th>Kode Pembayaran</th>
				<th>Status</th>
			</tr>
<?php 
$no = 1;
foreach ($order as $odr) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $odr->kd_trx ?></td>
				<td><?php echo $odr->waktu ?></td>
				<td><?php echo $odr->total ?></td>
				<td><?php echo $odr->seller ?></td>
				<td><?php echo $odr->cust ?></td>
				<td><?php echo $odr->kd_pemb ?></td>
				<td><?php echo $odr->status ?></td>
				
				<a href="<?php echo base_url().'dashboard/data_jual' ?>"><button class="btn btn-primary"><i class="fa fa-sign-out-alt"></i> Kembali</button></a>
			</tr>
<?php endforeach; ?>
		
		</table>
		</div>
	</div>
