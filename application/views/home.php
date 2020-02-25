<?php
include 'templates/header.php';
include 'templates/sidebar.php';
?>
  <div class="container-fluid">
    <div class="row text-center">
      
      <?php foreach ($produk as $key) : ?>

        <div class="card mb-3 ml-3" style="width: 14rem;">
    <img src="<?php echo base_url()."/img/" .$key->foto; ?>" class="card-img-top" style=" height: 10rem;">
    <div class="card-body" style="text-align: left">
      <div class="card-title" style="font-weight: bold"><span style="color: black"><?php echo $key->nm_prd; ?></span></div>
      <small style="font-weight: bold"><?php echo $key->keterangan; ?></small>
      <div style="font-weight: bold">
      <span style="color: red">Rp <?php echo number_format($key->harga,0,",","."); ?></span></div>
      <a href="#" class="btn btn-sm btn btn-primary"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
      <a href="#" class=" btn btn-sm btn btn-danger"><i class="fa fa-search-plus"></i></a>
    </div> 
  </div>
      <?php endforeach; ?> 
  </div>
</div>
<?php include 'templates/footer.php'; ?>