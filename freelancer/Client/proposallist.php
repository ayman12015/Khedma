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
          <h1>proposal<small>section</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>home</a></li>
            <li class="active">proposal list</li>
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
                  <h3 class="box-title">proposal list</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					   <th>freelancer name</th>
					   <th>job title</th>
					   <th>category</th>
					   <th>budget</th>
					   <th>freelancer budget</th>
					   <th>accepted</th>
					   <th>date_added</th>
					   <th>active</th>
					   <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
				   	
	              <tr>
						
					    <td><a href="">Ayman osman</a></td>
					    <td>developing web site for our company </td>
					    <td><span class="label label-success"> web Developing</span></td>
					    <td>$55</td>
					    <td>$66</td>
						
					  
					    <td><span class="label label-success"> not accepted</span> </td>
                      
					    <td><span class="label label-success"> 22-9-2012</span> </td>
                        
					    <td><span class="label label-success">  22-9-2019</span> </td>
							
						
					    <td>  <a href="" class="btn btn-primary btn-xs" data-toggle="tooltip" title=""><span class="fa fa-eye"></span></a></td>
						
						
					    
					    </tr>
					     <tr>
						
					    <td><a href="">Ayman osman</a></td>
					    <td>developing web site for our company </td>
					    <td><span class="label label-success"> web Developing</span></td>
					    <td>$55</td>
					    <td>$66</td>
						
					  
					    <td><span class="label label-success"> not accepted</span> </td>
                      
					    <td><span class="label label-success"> 22-9-2012</span> </td>
                        
					    <td><span class="label label-success">  22-9-2019</span> </td>
							
						
					    <td>  <a href="" class="btn btn-primary btn-xs" data-toggle="tooltip" title=""><span class="fa fa-eye"></span></a></td>
						
						
					    
					    </tr>
					
                    </tbody>
                    <tfoot>
                      <tr>
					   <th>freelancer name</th>
					   <th>job title</th>
					   <th>category</th>
					   <th>budget</th>
					   <th>freelancer budget</th>
					   <th>accepted</th>
					   <th>date_added</th>
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
	
	$(".btn-info").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['assign_job']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/assign.php",
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
	 if(confirm("<?php echo $lang['unassign_job']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/unassign.php",
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
