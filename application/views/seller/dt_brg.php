
	<div class="content-wrapper " >
		<div class="container">
				<h4><button type="4button" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-user plus"> Tambah Data Produk</i></button></h4>
				
				<br>
        <div class="table-responsive">
					<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>No <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
            <th>ID <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Nama Produk <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th colspan="3">AKSI <br> <input type="text" class="form-control input-sm" placeholder="search...">      
            </th>
					</tr>

          <?php
          $no=1; 
          foreach ($produk as $prd) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $prd->id_prd ?></td>
              <td><?php echo $prd->nm_prd ?></td>
              <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail<?=$prd->id_prd?>"><i class="fas fa-search-plus"></i></button></td>
              <td><a href="<?php echo base_url().'dashboard/hapus/'.$prd->id_prd ?>"><button type="submit" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#hapus<?=$prd->id_prd?>"><i class="fas fa-trash"></i></button></td>
              <td><button type="submit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?=$prd->id_prd?>"><i class="fas fa-edit"></i></a></button></td>
            </tr>


<div class="modal fade" id="detail<?=$prd->id_prd?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Detail Data
      </div>
        <div class="modal-body">
          <label>ID : <?php echo $prd->id_prd; ?></label><br>
          <label>Nama Produk : <?php echo $prd->nm_prd ?></label><br>
          <label>Keterangan : <?php echo $prd->keterangan ?></label><br>
          <label>Kategori : <?php echo $prd->ktg ?></label><br>
          <label>Harga : <?php echo $prd->harga ?></label><br>
          <label>Stok : <?php echo $prd->stok ?></label><br>
          <label>Foto : <?php echo $prd->foto ?></label><br>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
    </div>
  </div>
</div>
        

<div class="modal fade" id="hapus<?=$prd->id_prd?>" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Hapus Data</h3>
      </div>
      <form method="post" action="<?php echo base_url('dashboard/hapus/'.$prd->id_prd); ?>">
      <div class="modal-body">
          <input class="id-hapus" name="id_prd" type="hidden">
          <p>Anda Yakin Ingin Menghapus Kenangan Data?</p>
      </div>
      <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button class="btn btn-danger" type="submit">Hapus</button>
      </div>
      </form>

<div class="modal fade" id="update<?=$prd->id_prd?>" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-body">
          
          <form method="post" action="<?php echo base_url('dashboard/update/'.$prd->id_prd); ?>">
          <div class="form-group">
            NAMA PRODUK
            <input type="text" name="nm_prd" class="form-control" placeholder="Nama Produk" value="<?=$prd->nm_prd?>">
          </div>
          <div class="form-group">
            KETERANGAN
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan Produk" value="<?=$prd->keterangan?>">
          </div>
          <div class="form-group">
             KATEGORI
             <select name="ktg" class="form-control" value="<?=$prd->ktg?>">
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
             <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?=$prd->harga?>">
          </div>
          <div class="form-group">
             STOK
             <input type="text" name="stok" class="form-control" placeholder="stok Produk" value="<?=$prd->stok?>">
          </div>
          <div class="form-group">
            FOTO
            <input type="file" name="foto" class="form-control" placeholder="dalam bentuk jpg" value="<?=$prd->foto?>">
          </div>
          <div class="form-group">
           <br>
          <br>
          <button type="submit" class="btn btn-success">Ubah</button>
          <button class="btn btn-warning" type="reset" data-dismiss="modal">Batal</button>
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
        </div>
				<div class="modal fade" id="tambah" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-body">
          
          <h5>Tambah Data</h5>
          
          <form method="post" enctype="multipart/form-data" role="" action="<?php echo base_url().'dashboard/do_upload' ?>">
          <div class="form-group"> 
            ID
            <input type="hidden" name="id_prd" class="form-control"></span>
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
            <input type="file" name="foto" class="form-control" placeholder="dalam bentuk jpg">
          </div>
          <div class="form-group">
           <br>
          <br>
          <button type="submit" class="btn btn-success">TAMBAH</button>
          <button class="btn btn-warning" type="reset">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var save_method;
  var table;

  $(document).ready(function() {
    // $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
    //   return{
    //     "iStart"        : oSettings._iDisplayStart,
    //     "iEnd"          : oSettings.fnDisplayEnd(),
    //     "iLength"       : oSettings._iDisplayLength,
    //     "iTotal"        : oSettings.fnRecordsTotal(),
    //     "iFilteredTotal": oSettings.fnRecordsDisplay(),
    //     "iPage"         : Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
    //     "iTotalPages"   : Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
    //   }
    // };

    table = $('#table_unit').DataTable({
      "processing" : true,
      "serverSide" : true,
      "searching" : true,
      "pagingType" : 'full_numbers',
    //   "dom" :'Bfrtip',
    //   "buttons" : [
    //   {"extend" : 'excel', "className" : 'btn btn-success btn-flat'},
    //   {"extend" : 'pdf', "className" : 'btn btn-danger btn-flat' },
    //   {"extend" : 'pageLength', "className" : 'btn btn-default btn-flat'}
    // ],
    "lengthMenu" : [
    [100, 150, 200, 300, -1],
    ['100 Rows', '150 Rows', '200 Rows', '300 Rows', 'All']
  ],
    "ajax" : '<?php echo site_url('admin/ssp_unit'); ?>',
    "order" : [[1, 'asc']],
    "columnDefs" : [{
      "targets" :[-1],
      "orderable" : false
    }],
    "rowCallback" : function(row, data, iDisplayIndex){
      var info = this.fnPagingInfo();
      var page = info.iPage;
      var length = info.iLength;
      var index = page * length + (iDisplayIndex + 1);
      $('td:eq(0)',row).html(index);
    }
    });

    // table.columns().every(function(){
    //   var table = this;
    //   $('input', this.header()).on('keyup change', function(){
    //     if (table.search() !== this.value){
    //       table.search(this.value).draw();
    //     }
    //   });

      $('#tbl_slr').on('click', 'detail_record', function(){
        var id_prd = $(this).data('id_prd');
        location='<?php echo site_url(); ?>'+id_prd;
      });
      $('#tbl_slr').on('click', 'edit_record', function(){
        var id_prd = $(this).data('id_prd');
        location='<?php echo site_url('dashboard/ubah'); ?>'+id_prd;
      });
      $('#tbl_slr').on('click', 'delete_record', function(){
        var id_prd = $(this).data('id_prd');
        var y = confirm('Yakin hapus unit ini?');
        if (y == true) {location='<?php echo site_url(); ?>'+id_prd; }else{}
      });
    });
</script>