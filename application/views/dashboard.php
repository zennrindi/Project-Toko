<div class="container-fluid">
  <div class="row text-center">
    
    <?php foreach ($produk as $key) : ?>

      <div class="card ml-3" style="width: 18rem;">
  <img src="<?php echo base_url()."/img/" .$key->foto; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $key->nm_prd; ?></h5>
    <small><?php echo $key->keterangan; ?></small><br>
    <span class="badge badge-success">Rp .<?php echo $key->harga; ?></span><br>
    <a href="#" class="btn btn-sm btn btn-primary">Tambah Ke keranjang <i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
    <a href="#" class="btn btn-sm btn btn-danger">Detail</a>
  </div>
</div>
    <?php endforeach; ?> 
<div class="ml-3"><br><br>
  <h5><span class="badge badge-pill badge-danger"><?php echo "SELAIN BUTUH PANGANAN SING AKEH, AYAS YO BUTUH UMAK SAM :)"; ?></span></h5>
   <h5><span class="badge badge-pill badge-info">NGODING IKU YO KADANG RUWET KADANG ORA, KOYO CINTANE DE'E, KADANG NANG SAMPEAN YO KADANG PISAN NANG AREK LIYAN :)</span></h5> 
</div>
  </div>
</div>