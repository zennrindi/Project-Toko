
<!DOCTYPE html>
<html>
<head>
	<title>Data Produk</title>
</head>
<body>

	<div class="content-wrapper">
		<div class="container">
				<h4><button type="4button" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-user plus"> Tambah Data Produk</i></button></h4>
				
				<br>
					<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>No</th>
						<th>Nama Produk <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Keterangan <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Kategori <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Harga <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Stok <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Foto <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
					</tr>
					</thead>
					<tbody id="show_data">
						
					</tbody>
				</table>
				<div class="modal fade" id="tambah" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-body">
          
          <h5>Tambah Data</h5>
          
          <form method="post" action="<?php echo base_url().'dashboard/simpan_tambah' ?>">
          <div class="form-group">
            ID
            <input type="text" name="id_prd" class="form-control">
          </div>
          <div class="form-group">
            NAMA PRODUK
            <input type="text" name="nm_prd" class="form-control" placeholder="Nama Produk">
          </div>
          <div class="form-group">
            KETERANGAN
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan Produk" >
          </div>
          <div class="form-group">
             KATEGORI
             <select name="ktg" class="form-control">
							<option></option>
							<option value="olahraga" class="form-control">Olahraga</option>
							<option value="elektronik" class="form-control">Elektronik</option>
							<option value="pakaian wanita" class="form-control">Pakaian Wanita</option>
							<option value="pakaian pria" class="form-control">Pakaian Pria</option>
							<option value="pakaian anak-anak" class="form-control">Pakaian Anak-anak</option>
						</select>
          </div>
          <div class="form-group">
             HARGA
             <input type="text" name="harga" class="form-control" placeholder="Harga">
          </div>
          <div class="form-group">
             STOK
             <input type="text" name="stok" class="form-control" placeholder="stok Produk">
          </div>
          <div class="form-group">
            FOTO
            <input type="text" name="foto" class="form-control" placeholder="dalam bentuk jpg">
          </div>
          <div class="form-group">
           <br>
          <br>
          <button type="submit" class="btn btn-success">TAMBAH</button>
          <a href="<?php echo base_url().'dashboard/data' ?>"><button class="btn btn-warning"><i class="fa fa-sign out"> Batal</i></button></a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!--<?php 
$no = 1;
foreach ($produk as $key) : ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $key->nm_prd; ?></td>
						<td><?php echo $key->keterangan; ?></td>
						<td><?php echo $key->ktg; ?></td>
						<td><?php echo $key->harga; ?></td>
						<td><?php echo $key->stok; ?></td>
						<td><?php echo $key->foto; ?></td>
						
							<a href="<?php echo base_url().'kontroler/detail_data/'.$key->id ?>"><button class="btn btn-success"><i class="fa fa-search-plus"></i></button></a>
						</td>
						<td>
							<a href="<?php echo base_url().'kontroler/ubah/'.$key->id ?>"><button class="btn btn-warning" data-toggle="modal" data-target="#ubah"><i class="fa fa-edit"></i></button></a>
						</td>
						<td onclick="javascript: message('Apakah anda yakin??')">
							<a href="<?php echo base_url().'kontroler/hapus_data/'.$key->id ?>"><button class="btn btn-warning"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
<?php endforeach; ?>
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
</div> -->
