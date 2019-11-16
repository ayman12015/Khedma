<?php 

 require_once '../core/init.php';	

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

    <!-- Include header.php. Contains header content. -->
    <?php include ('template/header.php'); ?>
    <!-- Jquery UI CSS -->
    <link href="../assets/css/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />


	 <!-- ==============================================
	 Scripts
	 =============================================== -->
	 
    <!-- jQuery 2.1.4 -->
    <script src="../assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.6 JS -->
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- Jquery UI 1.10.3 -->
	<script src="../assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <!-- page script -->
    <script type="text/javascript">
   
        
    </script>    
  
<body class="skin-green sidebar-mini">
     
     <!-- ==============================================
     Wrapper Section
     =============================================== -->
	 <div class="wrapper">
	 	
        <!-- Include navigation.php. Contains navigation content. -->
	 	<?php include ('template/navigation.php'); ?> 
        <!-- Include sidenav.php. Contains sidebar content. -->
	 	<?php include ('template/sidenav.php'); ?> 
	 	
	  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>category<small>ection</small></h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>home</a></li>
            <li class="active">category list</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">	 	
		    <!-- Include currency.php. Contains header content. -->
		    <?php include ('template/currency.php'); ?>  
		 <div class="row">	
		 	<div class="col-md-12">
		 		
		 		<div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">drag and drop category</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped">
                    <thead>
           <tr>
					   <td></td>
					   <th>name</th>
					   <th>date_adde</th>
					   <th>active</th>
					   <th>itemorder</th>
                      </tr>
                    </thead>
                    <tbody id="sortable">
				 <tr id="">
          <td></td>
						<td class="drag-handle"><i class="fa fa-reorder"></i></td>
					  <td>Web Development</td>
					  <td>22-9-2019</td>
					  <td><span class="label label-success">active</span> </td>
						<td>5</td>
					</tr>

					
                    </tbody>
                    <tfoot>
                      <tr>
					   <td></td>
					    <th>name</th>
             <th>date_adde</th>
             <th>active</th>
             <th>itemorder</th>
                      </tr>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->  	
			  
	         
		 </div><!-- /.col-lg-12 -->	 
	    </div><!-- /.row -->		  		  
	   </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	 	
      <!-- Include footer.php. Contains footer content. -->	
	  <?php include 'template/footer.php'; ?>	
	 	
     </div><!-- /.wrapper -->   

	
</body>
</html>
