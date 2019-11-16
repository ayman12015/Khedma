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
          <h1>report<small>section</small></h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>home</a></li>
            <li class="active">report list</li>
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
                  <h3 class="box-title">message reported</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					   <th>reporter</th>
					   <th>message</th>
					   <th>date added</th>
					   <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
				    
					<img src="../assets/img/services/6.jpg" class="img-responsive img-thumbnail" width="50" height="40"/>
				    <a href="" target="_blank">Ayman osman</a>
						
												
				<tr>
					   <td>ayman Osman</td>
					   <td>Hi Client,

        This is the initial draft to start with . 
        I trust you know better on how to integrate and make it interactive . 
         Business 

        Dashboard - Adjust accordingly whatever you think should be with dashboard  
      Inbox
Business contacts/clients
Business ideas (with option to vote,like/unlike and comment ) 
Categories -Change to  Community 

Member 
Community Videos
Events 
Forum 
Photo
Quotes
Work - Personal to the user
To Do List 
Goals List 
Daily updates
Research Notes 
Documentation 
Ideas 
Top ideator 
Recent activity 
Featured categories 
* community to include option to share on social media*
Lets chat if you have any question . 
Thank you </td>
					   <td>22-9-2019</td>
						
					    <td>
					      <a id="" class="btn btn-info btn-xs" data-toggle="tooltip" title="delete this report"><span class="fa fa-trash"></span></a>
					      <a id="" class="btn btn-danger btn-report btn-xs" data-toggle="tooltip" title="delete the message"><span class="fa fa-trash"></span></a>
					      
					      </td>
					   </tr>
						
						
                    </tbody>
                    <tfoot>
                      <tr>
					    <th>reporter</th>
					   <th>message</th>
					   <th>date added</th>
					   <th>action</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div><!-- /.table-responsive -->
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
        $("#example1").dataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
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
	 if(confirm("<?php echo $lang['delete_report']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/delete/deletereport.php",
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
	
	
	$(".btn-report").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['delete_report_message']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/delete/deletereportmessage.php",
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

</body>
</html>
