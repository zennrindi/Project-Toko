<div class="container-fluid">
	<button class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Data Produk</button>

	<table class="bordered">
		<tr>
			<td>NO</td>
			<td>NAMA PRODUK</td>
			<td>KETERANGAN PRODUK</td>
			<td>KATEGORI</td>
			<td>HARGA PRODUK</td>
			<td>STOK</td>
			<td>IMAGE PRODUK</td>
		</tr>
	<?php 
	$no=1;
	foreach ($produk as $isi) : ?>
     
     <tr>
     	<th><?php echo $no++; ?></th>
     	<th><?php echo $isi->nm_prd ?></th>
     	<th><?php echo $isi->keterangan ?></th>
     	<th><?php echo $isi->ktg> ?></th>
     	<th><?php echo $isi->harga ?></th>
     	<th><?php echo $isi->stok ?></th>
     	<th><?php echo $isi->foto ?></th>
     	<td><div class="btn btn-success"><i class="fa fa-plus-search"></i></div></td>
     	<td><div class="btn btn-warning"><i class="fa fa-trash"></i></div></td>
     	<td><div class="btn btn-danger"><i class="fa fa-edit"></i></div></td>

     </tr>
	<?php endforeach; ?>


	</table>
</div>