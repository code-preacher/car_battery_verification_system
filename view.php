
<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

$d=$crud->displayOneSpecific('battery','id',$_GET['id']);
if ($d == false) {
 header("location:verify.php");
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="user/assets/images/favicon.png">
    <title>AUTOMOBILE BATTERY VERIFICATION SYSTEM</title>
    <!-- Custom CSS -->
    <link href="user/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="user/assets/extra-libs/multicheck/multicheck.css">
    <link href="user/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="user/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="user/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    
    <link href="user/dist/css/style.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><h1 style="color: #FFFFFF;">SEARCH RESULT FOR : <?=$d['serial_number']?></h1></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        

                </ul>

        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
      

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="add-diagnose.php" method="POST">
                                       <div class="row p-t-20">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Voltage: </label>
                                                <input type="text" class="form-control" value="<?=$d['voltage']?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Type: </label>
                                                <input type="text" class="form-control" value="<?=$d['type']?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <!--/span-->

                                        

                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Year: </label>
                                                <input type="text" class="form-control" value="<?=$d['year']?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Make: </label>
                                                <input type="text" class="form-control" value="<?=$d['make']?>" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Engine to Use: </label>
                                                <input type="text" class="form-control" value="<?=$d['engine']?>" disabled="disabled">
                                            </div>
                                        </div>
                                            

                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Serial Number: </label>
                                                <input type="text" class="form-control" value="<?=$d['serial_number']?>" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Manufacturer: </label>
                                                <input type="text" class="form-control" value="<?=$crud->displayNameByUserId('user',$d['user_id']); ?>" disabled="disabled">
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Other Data: </label>
                                                <input type="text" class="form-control" value="<?=$d['other_data']?>" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Image: </label>
                                                <img src="battery_images/<?=$d['image']?>">
                                            </div>
                                        </div>


                                        <a href="verify.php"> << GO BACK</a>
            <!--/span-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved  &copy;   <script> 
                            var r=new Date();
                            document.write(r.getFullYear());
                     </script> &nbsp; - All Rights Reserved.. Designed and Developed by .....</a>.
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="user/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="user/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="user/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="user/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="user/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="user/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="user/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="user/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="user/assets/libs/flot/excanvas.js"></script>
<script src="user/assets/libs/flot/jquery.flot.js"></script>
<script src="user/assets/libs/flot/jquery.flot.pie.js"></script>
<script src="user/assets/libs/flot/jquery.flot.time.js"></script>
<script src="user/assets/libs/flot/jquery.flot.stack.js"></script>
<script src="user/assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="user/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="user/dist/js/pages/chart/chart-page-init.js"></script>

<script src="user/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="user/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="user/assets/extra-libs/DataTables/datatables.min.js"></script>

        <script src="user/assets/libs/moment/min/moment.min.js"></script>
    <script src="user/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="user/dist/js/pages/calendar/cal-init.js"></script>

    

    <script src="user/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="user/dist/js/pages/mask/mask.init.js"></script>
    <script src="user/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="user/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="user/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="user/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="user/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="user/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="user/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="user/assets/libs/quill/dist/quill.min.js"></script>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>