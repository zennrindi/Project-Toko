
<!DOCTYPE html>
<html>
<head>
	<title>Halaman  Data Seller</title>
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TOKO ZENN</div>
      </a>
<!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          

          <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
                <button class="btn btn-primary btn btn-sm ml-3" type="submit">DATA SELLER</button>
            </li>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Profilku</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('dashboard/login'); ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
      
	<div class="content-wrapper">
		<div class="container">
				

				<br>
					<table class="table table-striped table-bordered" id="tbl_slr">
					<thead>
					<tr>
						<th>No </th>
						<th>Nama Seller <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Username <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Password <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Alamat <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>No Telepon <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Jenis Kelamin <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Email <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>No. Rek <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
						<th>Foto <br> <input type="text" class="form-control input-sm" placeholder="search.."></th>
					</tr>
					</thead>
					<tbody id="show_data">
            
          </tbody>
        </table>
        
<script>
  var save_method;
  var table;

  $(document).ready(function() {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
      return{
        "iStart"        : oSettings._iDisplayStart,
        "iEnd"          : oSettings.fnDisplayEnd(),
        "iLength"       : oSettings._iDisplayLength,
        "iTotal"        : oSettings.fnRecordsTotal(),
        "iFilteredTotal": oSettings.fnRecordsDisplay(),
        "iPage"         : Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
        "iTotalPages"   : Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
      }
    };

    table = $('#table_unit').DataTable({
      "processing" : true,
      "serverSide" : true,
      "searching" : true,
      "pagingType" : 'full_numbers',
      "dom" :'Bfrtip',
      "buttons" : [
      {"extend" : 'excel', "className" : 'btn btn-success btn-flat'},
      {"extend" : 'pdf', "className" : 'btn btn-danger btn-flat' },
      {"extend" : 'pageLength', "className" : 'btn btn-default btn-flat'}
    ],
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

    table.columns().every(function(){
      var table = this;
      $('input', this.header()).on('keyup change', function(){
        if (table.search() !== this.value){
          table.search(this.value).draw();
        }
      });

      $('#tbl_slr').on('click', 'detail_record', function(){
        var id_admin = $(this).data('id_admin');
        location='<?php echo site_url(); ?>'+id_admin;
      });
      $('#tbl_slr').on('click', 'edit_record', function(){
        var id_admin = $(this).data('id_admin');
        location='<?php echo site_url(); ?>'+id_admin;
      });
      $('#tbl_slr').on('click', 'delete_record', function(){
        var id_admin = $(this).data('id_admin');
        var y = confirm('Yakin hapus unit ini?');
        if (y == true) {location='<?php echo site_url(); ?>'+id_admin; }else{}
      });
    });
</script>