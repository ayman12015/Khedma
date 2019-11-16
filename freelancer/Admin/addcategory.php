<?php 
//Check if init.php exists

 require_once '../core/init.php';	


?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
    <!-- Include header.php. Contains header content. -->
    <?php include ('template/header.php'); ?> 
    <!-- Fontawesome Icon Picker CSS -->
    <link href="../assets/css/fontawesome-iconpicker.min.css" rel="stylesheet" type="text/css" />

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
          <h1>category<small>section</small></h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>home</a></li>
            <li class="active">add category</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">	 
		    <!-- Include currency.php. Contains header content. -->
		    <?php include ('template/currency.php'); ?>  	
		 <div class="row">	
		 	
		 <div class="col-lg-12">	
         
	
          </div>
           
		 <div class="col-lg-12">
		 
		 <!-- Input addon -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">add category</h3>
                </div>
                <div class="box-body">
                 <form role="form" method="post" id="addform"> 
                 	
                 <div class="form-group">
                  <label>choose icon</label>
                   <div class="input-group">
                    <input data-placement="bottomRight" name="icon" class="form-control icp icp-auto" value="fa-archive" type="text" />
                    <span class="input-group-addon"></span>
                    </div>
                  </div>
                  
                  <div class="form-group">	
				    <label>category name</label>
                   <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-info"></i></span>
                    <input type="text" name="name" class="form-control" placeholder="name" value=""/>
                   </div>
                  </div>
                  
                  <div class="form-group">	
				    <label>sub categories</label>
                      <textarea type="text" name="sub_category" class="form-control" rows="5"></textarea>
                  </div>
                           
                  <div class="box-footer">
                    <input type="hidden" name="token" value="" />
                    <button type="submit" name="submit"  class="btn btn-success full-width">submit</button>
                  </div>
                 </form> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
		 
		</div><!-- /.col -->
		
        
			 
	    </div><!-- /.row -->		  		  
	   </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	 
      <!-- Include footer.php. Contains footer content. -->	
	  <?php include 'template/footer.php'; ?>	
	 	
     </div><!-- /.wrapper -->   

	
	<!-- ==============================================
	 Scripts
	 =============================================== -->
	 
    <!-- jQuery 2.1.4 -->
    <script src="../assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.6 JS -->
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- FontAwesome Icon Picker -->
    <script src="../assets/js/fontawesome-iconpicker.min.js" type="text/javascript"></script>
	<script type="text/javascript">
    $('.icp-auto').iconpicker();	
	</script>    
</body>
</html>
