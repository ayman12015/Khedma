<?php 
//Check if init.php exists

 require_once '../core/init.php';	

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

    <!-- Include header.php. Contains header content. -->
    <?php include ('template/header.php'); ?>
  
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
          <h1>skills<small>section</small></h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>home</a></li>
            <li class="active">skill list</li>
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
                  <h3 class="box-title">skill list</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					   <th>name</th>
					   <th>date added</th>
					   <th>active</th>
					   <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
				    						
					    <tr>
					    <td>html css</td>
					    <td>9-9-2019</td>
					   
					    <td><span class="label label-success"> active </span> </td>
						
					    <td>
					      
					      <a href="" class="btn btn-success btn-xs" data-toggle="tooltip" title=""><span class="fa fa-edit"></span></a>
					      <a id="' . escape($row->id) . '" class="btn btn-danger btn-xs" data-toggle="tooltip" title="delete"><span class="fa fa-trash"></span></a></td>
					 </tr>
					  <tr>
					    <td>html css</td>
					    <td>9-9-2019</td>
					   
					    <td><span class="label label-success"> active </span> </td>
						
					    <td>
					      
					      <a href="" class="btn btn-success btn-xs" data-toggle="tooltip" title=""><span class="fa fa-edit"></span></a>
					      <a id="' . escape($row->id) . '" class="btn btn-danger btn-xs" data-toggle="tooltip" title="delete"><span class="fa fa-trash"></span></a></td>
					 </tr>
					  <tr>
					    <td>html css</td>
					    <td>9-9-2019</td>
					   
					    <td><span class="label label-success"> active </span> </td>
						
					    <td>
					      
					      <a href="" class="btn btn-success btn-xs" data-toggle="tooltip" title=""><span class="fa fa-edit"></span></a>
					      <a id="' . escape($row->id) . '" class="btn btn-danger btn-xs" data-toggle="tooltip" title="delete"><span class="fa fa-trash"></span></a></td>
					 </tr>
					  <tr>
					    <td>html css</td>
					    <td>9-9-2019</td>
					   
					    <td><span class="label label-success"> active </span> </td>
						
					    <td>
					      
					      <a href="" class="btn btn-success btn-xs" data-toggle="tooltip" title=""><span class="fa fa-edit"></span></a>
					      <a id="' . escape($row->id) . '" class="btn btn-danger btn-xs" data-toggle="tooltip" title="delete"><span class="fa fa-trash"></span></a></td>
					 </tr>
					   
                    </tbody>
                    <tfoot>
                      <tr>
					  <th>name</th>
					   <th>date added</th>
					   <th>active</th>
					   <th>action</th>
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

	
	 <!-- ==============================================
	 Scripts
	 =============================================== -->
	 
    <!-- jQuery 2.1.4 -->
    <script src="../assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.6 JS -->
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
      });
    </script>
    <script type="text/javascript">
	$(function() {
	
	
	$(".btn-danger").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['delete_skill']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/delete/deleteskill.php",
				 data: info,
				 success: function()
					   {
						parent.fadeOut('slow', function() {$(this).remove();});
					   }
				});
			 
	
			  }
		   return false;
	
		});
	
	});
	</script>

	<script type="text/javascript">
	$(function() {
	
	$(".btn-info").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['activate_skill']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/activateskill.php",
				 data: info,
				 success: function()
					   {
						window.location.reload();
					   }
				});
			 
	
			  }
		   return false;
	
		});	
	
	});
	</script>
	
	<script type="text/javascript">
	$(function() {
	
	$(".btn-default").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['deactivate_skill']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/deactivateskill.php",
				 data: info,
				 success: function()
					   {
						window.location.reload();
					   }
				});
			 
	
			  }
		   return false;
	
		});		
	
	});
	</script>	
    
</body>
</html>
