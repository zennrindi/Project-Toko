
	<div class="content-wrapper">
		<div class="container">
				<h4><button type="4button" class="btn btn-info" data-toggle="modal" data-target="#tambah"><i class="fa fa-user plus"> Tambah Data Produk</i></button></h4>
				
				<br>
					<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>No <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Nama Produk <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Keterangan <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Kategori <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Harga <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Stok <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Foto <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th colspan="3">AKSI <br> <input type="text" class="form-control input-sm" placeholder="search...">      
            </th>
					</tr>

          <?php
          $no=1; 
          foreach ($produk as $prd) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $prd->nm_prd ?></td>
              <td><?php echo $prd->keterangan ?></td>
              <td><?php echo $prd->ktg ?></td>
              <td><?php echo $prd->harga ?></td>
              <td><?php echo $prd->stok ?></td>
              <td><?php echo $prd->foto ?></td>
              <td><button><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></button></td>
              <td><div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></td>
              <td><button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#update"><a href="<?php echo base_url('dashboard/update') ?>"><i class="fas fa-edit"></i></a></button></td>
            </tr>
          <?php endforeach; ?>
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
          <button type="submit" class="btn btn-success"><a href="<?php echo base_url().'dashboard/data' ?>">TAMBAH</a></button>
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