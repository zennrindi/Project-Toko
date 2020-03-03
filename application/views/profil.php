<?php
include 'templates/header.php';
include 'templates/sidebar.php';
?>


<div class="modal fade"  role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-body">
          
          <form method="post" action="<?php echo base_url('aksi/profile'); ?>">
            
          <div class="form-group"> 
            ID Customer
            <input type="hidden" name="id_cust" class="form-control"  >
          </div>
          <div class="form-group">
            Username
            <input type="text" name="username" class="form-control" >
          </div>
          <div class="form-group">
            Email
            <input type="text" name="email" class="form-control" >
          </div>
          <div class="form-group">
             Password
            <input type="text" name="pass" class="form-control">
          </div>
          <div class="form-group">
            Nama
             <input type="text" name="nama" class="form-control" >
          </div>
          <div class="form-group">
            Alamat
             <input type="text" name="alamat" class="form-control" >
          </div>
          <div class="form-group">
            Jenis Kelamin
            <input type="text" name="Kelamin" class="form-control" >
          </div>
          <div class="form-group">
            No. HP
            <input type="text" name="no_hp" class="form-control" >
          </div>
          <div class="form-group">
            Foto
            <input type="text" name="foto" class="form-control" >
          </div>
          <div class="form-group">
           <br>
          <br>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<tbody id="show_data">
            
  </tbody>