<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
</head>
<body>
	<div class="modal fade" id="ubah" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-body">
          
          <form method="post" action="<?php echo base_url().'dashboard/update' ?>">
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
          <button type="submit" class="btn btn-success"><a href="<?php echo base_url().'dashboard/data' ?>">Ubah</a></button>
          <button class="btn btn-warning" type="reset">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>