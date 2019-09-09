<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <?php $this->view('include/head');?>
    <!-- font -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- vendor -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/prism/prism.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/datatable/datatables.min.css">
    <!-- app -->
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>

<body data-col="2-columns" class=" 2-columns ">
    <div class="wrapper">
        <?php $this->view('include/navbar');?>
        <?php $this->view('include/header');?>
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <section id="dom">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title-wrap bar-success">
                                                <h4 class="card-title">Daftar Karyawan</h4>
                                            </div>
                                        </div>
                                        <div class="card-body collapse show">
                                            <div class="card-block card-dashboard">
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#iconForm">
                                                    Tambah Karyawan
                                                </button>
                                                <div class="modal fade text-left" id="iconForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="myModalLabel34">Modal Title</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form>
                                                                <div class="modal-body">
                                                                    <label>Email: </label>
                                                                    <div class="form-group position-relative has-icon-left">
                                                                        <input type="text" placeholder="Email Address" class="form-control">
                                                                        <div class="form-control-position">
                                                                            <i class="fa fa-envelope font-medium-5 line-height-1 text-muted icon-align"></i>
                                                                        </div>
                                                                    </div>

                                                                    <label>Password: </label>
                                                                    <div class="form-group position-relative has-icon-left">
                                                                        <input type="password" placeholder="Password" class="form-control">
                                                                        <div class="form-control-position">
                                                                            <i class="fa fa-lock font-large-1 line-height-1 text-muted icon-align"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                    <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Bagian</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                                <ul id="pagination" class="pagination-sm"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <?php $this->view('include/footer');?>
        </div>
    </div>
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
        <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
            <h4 class="mb-0 text-bold-400">Theme Customizer</h4>
            <p>Customize &amp; Preview in Real Time</p>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Background Image</h6>
            <div class="cz-bg-image row">
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/01.jpg" width="50" height="100" alt="Bg image1" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/02.jpg" width="50" height="100" alt="Bg image2" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/03.jpg" width="50" height="100" alt="Bg image3" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/04.jpg" width="50" height="100" alt="Bg image4" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/05.jpg" width="50" height="100" alt="Bg image5" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/06.jpg" width="50" height="100" alt="Bg image6" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/07.jpg" width="50" height="100" alt="Bg image7" class="rounded box-shadow-2"></div>
                <div class="col mb-3"><img src="../app-assets/img/sidebar-bg/08.jpg" width="50" height="100" alt="Bg image8" class="rounded box-shadow-2"></div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch"><span class="text-bold-400">Show / Hide Sidebar Bg Image</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="sidebar-bg-img" type="checkbox" checked="" class="custom-control-input cz-bg-image-display">
                            <label for="sidebar-bg-img" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
            <div class="cz-bg-color">
                <div class="row p-1">
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="aqua-marine" class="gradient-aqua-marine d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="sublime-vivid" class="gradient-sublime-vivid d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="crystal-clear" class="gradient-crystal-clear d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="timber" class="gradient-timber d-block rounded box-shadow-2"></span></div>
                </div>
                <div class="row p-1">
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="black" class="bg-black d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="white" class="bg-white d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="primary" class="bg-primary d-block rounded box-shadow-2"></span></div>
                    <div class="col mb-3"><span style="width:50px; height:100px;" data-bg-color="danger" class="bg-danger d-block rounded box-shadow-2"></span></div>
                </div>
            </div>
            <hr>
            <div class="togglebutton">
                <div class="switch"><span class="text-bold-400">Compact Menu</span>
                    <div class="float-right">
                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                            <label for="cz-compact-menu" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <label for="cz-sidebar-width" class="text-bold-400">Sidebar Width</label>
                <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                    <option value="small">Small</option>
                    <option value="medium" selected="">Medium</option>
                    <option value="large">Large</option>
                </select>
            </div>
        </div>
    </div>
    <!-- BEGIN VENDOR JS-->
    <script src="assets/vendors/core/jquery-3.3.1.min.js"></script>
    <script src="assets/vendors/core/popper.min.js"></script>
    <script src="assets/vendors/core/bootstrap.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/vendors/prism/prism.min.js"></script>
    <script src="assets/vendors/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="assets/vendors/screenfull/screenfull.min.js"></script>
    <script src="assets/vendors/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="assets/vendors/datatable/datatables.min.js"></script>
    <script src="assets/vendors/datatable/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/datatable/buttons.flash.min.js"></script>
    <script src="assets/vendors/datatable/jszip.min.js"></script>
    <script src="assets/vendors/datatable/pdfmake.min.js"></script>
    <script src="assets/vendors/datatable/vfs_fonts.js"></script>
    <script src="assets/vendors/datatable/buttons.html5.min.js"></script>
    <script src="assets/vendors/datatable/buttons.print.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="assets/js/app-sidebar.js"></script>
    <script src="assets/js/notification-sidebar.js"></script>
    <script src="assets/js/customizer.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="assets/js/data-tables/datatable-advanced.js"></script>
    <script src="assets/js/components-modal.min.js"></script>
    <script>
    $( document ).ready(function() {

var url = "<?= BASEURL; ?>";
var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

/* tampilkan data */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url+'/karyawan/daftarkaryawan',
        data: {page:page}
    }).done(function(data){
    	total_page = Math.ceil(data.total/10);
    	current_page = page;

    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	        	page = pageL;
                if(is_ajax_fire != 0){
	        	  getPageData();
                }
	        }
	    });

    	manageRow(data.data);
        is_ajax_fire = 1;

    });

}

/* tampilkan  data */
function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url+'/karyawan/daftarkaryawan',
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}


/* tambahkan data baru pada table */
function manageRow(data) {
	var	rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.nama+'</td>';
	  	rows = rows + '<td>'+value.nama+'</td>';
	  	rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-user" class="btn btn-primary btn-sm edit-user"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button> ';
        rows = rows + '<button class="btn btn-danger btn-sm remove-user"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus</button>';
        rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});

	$("tbody").html(rows);
}

/* tambah user */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-user").find("form").attr("action");
    var user_name = $("#create-user").find("input[name='user_name']").val();
    var user_email = $("#create-user").find("input[name='user_email']").val();
    var user_address = $("#create-user").find("input[name='user_address']").val();

    if(user_name != '' && user_email != '' && user_address != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
            data:{user_name:user_name, user_email:user_email, user_address:user_address}
        }).done(function(data){
            $("#create-user").find("input[name='user_name']").val('');
            $("#create-user").find("input[name='user_email']").val('');
            $("#create-user").find("input[name='user_address']").val('');
            getPageData();
            $(".modal").modal('hide');
        });
    }else{
        alert('Ada data yang kosong')
    }


});

/* hapus user */
$("body").on("click",".remove-user",function(){
    var user_id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: url + 'api/delete.php',
        data:{user_id:user_id}
    }).done(function(data){
        c_obj.remove();
        getPageData();
        alert('Data berhasil dihapus')
    });

});


/* Edit user */
$("body").on("click",".edit-user",function(){

    var user_id = $(this).parent("td").data('id');
    var user_name = $(this).parent("td").prev("td").prev("td").prev("td").text();
    var user_email = $(this).parent("td").prev("td").prev("td").text();
    var user_address = $(this).parent("td").prev("td").text();
    $("#edit-user").find("input[name='user_name']").val(user_name);
    $("#edit-user").find("input[name='user_email']").val(user_email);
    $("#edit-user").find("input[name='user_address']").val(user_address);
    $("#edit-user").find("input[name='user_id']").val(user_id);

});


/* Update user */
$(".crud-edit").click(function(e){

    e.preventDefault();
    var form_action = $("#edit-user").find("form").attr("action");
    var user_name = $("#edit-user").find("input[name='user_name']").val();
    var user_email = $("#edit-user").find("input[name='user_email']").val();
    var user_address = $("#edit-user").find("input[name='user_address']").val();
    var user_id = $("#edit-user").find("input[name='user_id']").val();

    if(user_name != '' && user_email != '' && user_address != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
            data:{user_name:user_name, user_email:user_email, user_address:user_address,user_id:user_id}
        }).done(function(data){
            getPageData();
            $(".modal").modal('hide');
            alert('Data berhasil diedit')
        });
    }else{
        alert('Ada data yang kosong')
    }

});
});
    </script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>