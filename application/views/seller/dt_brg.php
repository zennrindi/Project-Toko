
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Penjualan Online</title>
</head>
<body>

	<div class="content-wrapper">
		<div class="container">
				<h5 align="center">Data Produk</h5><br>

				<h4><button type="4button" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-user plus"> Tambah Data Produk</i></button></h4>
				
				<br>
					<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Produk <br> <input type="text" class="form-control input-sm" placeholder="SEARCH.."></th>
							<th>Keterangan <br> <input type="text" class="form-control input-sm" placeholder="SEARCH.."></th>
							<th>Kategori <br> <input type="text" class="form-control input-sm" placeholder="SEARCH.."></th>
							<th>Harga <br> <input type="text" class="form-control input-sm" placeholder="SEARCH.."></th>
							<th>Stok <br> <input type="text" class="form-control input-sm" placeholder="SEARCH.."></th>
							<th>Foto</th>
						</tr>
					</thead>
					<tbody id="show_data">
						
					</tbody>
					</table>	
		</div>
	</div>
</body>
</html>


<div class="modal fade" id="tambah" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-body">
					
					<h5>Tambah Data</h5>
					
					<form method="post" action="<?php echo base_url()?>">
					<div class="form-group">
						ID
						<input type="hidden" name="id" class="form-control" >
					</div>
					<div class="form-group">
						Nama Produk
						<input type="text" name="nm_prd" class="form-control" placeholder="Nama Produk">
					</div>
					<div class="form-group">
						Keterangan
						<input type="text" name="keterangan" class="form-control" >
					</div>
					<div class="form-group">
						 Kategori
						 <select name="ktg" class="form-control">
							<option></option>
							<option value="pakaian wanita" class="form-control">Pakaian Wanita</option>
							<option value="pakaian pria" class="form-control">Pakaian Pria</option>
							<option value="pakaian anak-anak" class="form-control">Pakaian Anak-anak</option>
							<option value="olahraga" class="form-control">Olahraga</option>
							<option value="elektronik" class="form-control">Elektronik</option>
						</select>
					</div>
					<div class="form-group">
						Harga
						<input type="text" name="harga" class="form-control" placeholder="harga produk">
					</div>
						
					</div> 
					<div class="form-group">
						Stok
						<input type="text" name="stok" class="form-control" placeholder="stok barang">
					</div>
					<div class="form-group">
						Foto
						<input type="text" name="foto" class="form-control" placeholder="dalam bentuk jpg">
					</div>
					<br>
					<br>
					<button type="submit" class="btn btn-success">TAMBAH</button>
					<a href="<?php echo base_url()?>"><button class="btn btn-warning"><i class="fa fa-sign out"> Batal</i></button></a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>