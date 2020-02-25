<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
</head>
<body>
	<div class="container">
		<div class="content-wrapper">
			
			<?php foreach ($produk as $isi) : ?>

		<form method="post" action="<?php echo base_url().'dashboard/update/'.$isi->id ?>">
					<h5>Ubah Produk</h5>
					
					<form method="post" action="<?php echo base_url().'dashboard/update/'.$isi->id; ?>">
					<div class="form-group">
						Nama Produk
						<input type="text" name="nm_prd" value="<?php echo $isi->nm_prd ?>" class="form-control" placeholder="Nama Produk">
					</div>
					<div class="form-group">
						Nama
						<input type="text" name="nama" value="<?php echo $isi->nama ?>" class="form-control" placeholder="Nama Siswa">
					</div>
					<div class="form-group">
						Tanggal Lahir
						<input type="date" name="tgl" value="<?php echo $isi->tgl_lahir ?>" class="form-control" >
					</div>
					<div class="form-group">
						 Kelas
						 <select name="kelas" class="form-control">
							<option><?php echo $isi->kelas ?></option>
							<option value="10" class="form-control">10</option>
							<option value="11" class="form-control">11</option>
							<option value="12" class="form-control">12</option>
						</select>
					</div>
					<div class="form-group">
						Jurusan
						<select name="jurusan" class="form-control">
							<option><?php echo $isi->jurusan ?></option>
							<option value="Administrasi Perkantoran" class="form-control">Administrasi Perkantoran</option>
							<option value="Pemasaran" class="form-control">Pemasaran</option>
							<option value="Akuntansi" class="form-control">Akuntansi</option>
							<option value="Rekayasa Perangkat Lunak" class="form-control">Rekayasa Perangkat Lunak</option>
							<option value="Multimedia" class="form-control">Multimedia</option>
							<option value="Tekhnik Sepeda Motor" class="form-control">Tekhnik Sepeda Motor</option>
						</select>
					</div> 
					<div class="form-group">
						Alamat
						<input type="text" name="alamat" value="<?php echo $isi->alamat ?>" class="form-control" placeholder="Alamat">
					</div>

					<br>
					<button type="submit" class="btn btn-success">UBAH</button>
					<a href="<?php echo base_url().'dashboard/data' ?>"><button class="btn btn-warning"><i class="fa fa-not"> Batal</i></button></a>

					</form>
					

			<?php endforeach; ?>
		</form>			
		</div>

	</div>
</body>
</html>