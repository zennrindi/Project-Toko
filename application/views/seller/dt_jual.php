<!DOCTYPE html>
<html>
<head>
	<title>Data Penjualan</title>
</head>
<body>

	<div class="content-wrapper">
		<div class="container">
				
					<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>No</th>
						<th>Kode Transaksi <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Waktu <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th colspan="3">AKSI <br> <input type="text" class="form-control input-sm" placeholder="search...">      
            			</th>
					</tr>
		
		<?php
          $no=1; 
          foreach ($order as $odr) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $odr->kd_trx ?></td>
              <td><?php echo $odr->waktu ?></td>
              <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail<?=$odr->kd_trx?>"><i class="fas fa-search-plus"></i></button></td>
              <td><button type="submit" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#update<?=$odr->kd_trx?>"><i class="fas fa-edit"></i></button></td>
              <td><a href="<?php echo base_url().'dashboard/batal/'.$odr->kd_trx ?>"><button type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#batal">Batal</a></button></td>
            </tr>

<div class="modal fade" id="detail<?=$odr->kd_trx?>" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Detail Data
      </div>
        <div class="modal-body">
          <label>Kode Transaksi : <?php echo $odr->kd_trx; ?></label><br>
          <label>Waktu : <?php echo $odr->waktu ?></label><br>
          <label>Total : <?php echo $odr->total ?></label><br>
          <label>Seller : <?php echo $odr->seller ?></label><br>
          <label>Customer : <?php echo $odr->cust ?></label><br>
          <label>Kode Pembayaran : <?php echo $odr->kd_pemb ?></label><br>
          <label>Status : <?php echo $odr->status ?></label><br>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update<?=$odr->kd_trx?>" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-body">
          
          <form method="post" action="<?php echo base_url('dashboard/updates/'.$odr->kd_trx); ?>">

          <div class="form-group"> 
            Kode Transaksi
            <input type="text" name="kd_trx" class="form-control" value="<?=$odr->kd_trx?>">
          </div>
          <div class="form-group">
            Waktu
            <input type="time" name="waktu" class="form-control" value="<?php echo date('H:i:s',strtotime($odr->waktu));?>" >
          </div>
          <div class="form-group">
            Total
            <input type="text" name="total" class="form-control" value="<?=$odr->total?>">
          </div>
          <div class="form-group">
             Seller
            <input type="text" name="seller" class="form-control" value="<?=$odr->seller?>">
          </div>
          <div class="form-group">
            Customer
             <input type="text" name="cust" class="form-control" value="<?=$odr->cust?>">
          </div>
          <div class="form-group">
            Kode Pembayaran
             <input type="text" name="kd_pemb" class="form-control" value="<?=$odr->kd_pemb?>">
          </div>
          <div class="form-group">
            Status
            <input type="text" name="status" class="form-control" value="<?=$odr->status?>">
          </div>
          <div class="form-group">
           <br>
          <br>
          <button type="submit" class="btn btn-success">Edit</button>
          <button class="btn btn-warning" type="reset">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</thead>
	<tbody id="show_data">
						
	</tbody>
</table>