  <div class="container-fluid">
    <div class="row text-center">
      
      <?php foreach ($ktg as $key) : ?>

        <div class="card mb-3 ml-3" style="width: 15rem;">
    <img src="<?php echo base_url()."/img/" .$key->foto; ?>" class="card-img-top" style=" height: 11rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo $key->nm_prd; ?></h5>
      <small><?php echo $key->keterangan; ?></small><br>
      <span class="badge badge-success">Rp <?php echo $key->harga; ?></span><br>
      <a href="#" class="btn btn-sm btn btn-primary">Tambah Ke keranjang <i class="fa fa-shopping-basket" aria-hidden="true"></i></a><br>
      <a href="#" class=" btn btn-sm btn btn-danger">Detail</a>
    </div> 
  </div>
      <?php endforeach; ?> 
  </div>
</div>