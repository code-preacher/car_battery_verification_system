     <?php 
     ob_start();
     require_once '../library/lib.php';
     require_once '../classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;

     $lib->check_login2();

       if (isset($_GET['id'])) {
       $crud->delete($_GET['id'],'report','view-diagnose.php');
     }


     ?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tables</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php $lib->msg();?></h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Sign1</th>
                                        <th>Sign2</th>
                                        <th>Sign3</th>
                                        <th>Sign4</th>
                                        <th>Sign5</th>
                                        <th>Sign6</th>
                                        <th>Sign7</th>
                                        <th>Sign8</th>
                                        <th>Result</th>
                                        <th>Advice</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                                 $qt=$crud->displayAllWithOrder('report','id','desc');

                                 $c=1;
                                 if ($qt) {

                                     foreach($qt as $r){
                                        ?>
                                        <tr>
                                           <td><?php echo $c++; ?></td>
                                           <td><?php echo $crud->displayNameById('user',$r['user_id']); ?></td>
                                           <td>
                                            <?php
                                            if ($r['f1']=='1') {
                                             echo "Yes";
                                         } else {
                                          echo "No";
                                      }
                                      ?>
                                  </td>
                                  <td>
                                    <?php
                                    if ($r['f2']=='1') {
                                     echo "Yes";
                                 } else {
                                  echo "No";
                              }
                              ?>
                          </td>
                          <td>
                            <?php
                            if ($r['f3']=='1') {
                             echo "Yes";
                         } else {
                          echo "No";
                      }
                      ?>
                  </td>
                  <td>
                    <?php
                    if ($r['f4']=='1') {
                     echo "Yes";
                 } else {
                  echo "No";
              }
              ?>
          </td>
          <td>
            <?php
            if ($r['f5']=='1') {
             echo "Yes";
         } else {
          echo "No";
      }
      ?>
  </td>
  <td>
    <?php
    if ($r['f6']=='1') {
     echo "Yes";
 } else {
  echo "No";
}
?>
</td>
<td>
    <?php
    if ($r['f7']=='1') {
     echo "Yes";
 } else {
  echo "No";
}
?>
</td>
<td>
    <?php
    if ($r['f8']=='1') {
     echo "Yes";
 } else {
  echo "No";
}
?>
</td>
<td><?php echo $r['result']; ?></td>
<td><?php echo $r['advice']; ?></td>
<td>
  <a href="view-diagnose.php?id=<?php echo $r['id']; ?>" onClick="return confirm('Are you sure you want to delete this record?')"><i class="mdi mdi-washing-machine"></i></a></td>

</tr>
<?php
}

} else {
  echo "<tr><td colspan='13'><center>No Report at the moment</center</td></tr>";
}
?>

</tbody>
<tfoot>
    <tr>
                                       <th>S/N</th>
                                        <th>Sign1</th>
                                        <th>Sign2</th>
                                        <th>Sign3</th>
                                        <th>Sign4</th>
                                        <th>Sign5</th>
                                        <th>Sign6</th>
                                        <th>Sign7</th>
                                        <th>Sign8</th>
                                        <th>Result</th>
                                        <th>Advice</th>
                                        <th>Delete</th>
    </tr>
</tfoot>
</table>
</div>

</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php include 'inc/footer.php'; ?>
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
         $('#zero_config').DataTable();
     </script>

 </body>

 </html>