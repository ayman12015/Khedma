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
          <h1>membership<small>section</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> home</a></li>
            <li class="active">membership></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">	 	
		    <!-- Include currency.php. Contains header content. -->
		    <?php include ('template/currency.php'); ?>  
		 <div class="row">	

	 
		 	
	 <section class="w">
	  <div class="container">

       <div class="row">
		  		       	
       </div>
	  	
	   <div class="row">
	     <h3 class="text-center">freelancers</h3>
	     <hr class="mint">
	   </div>	
       <br></br>
       
		 
		            <div class="col-lg-6">
		             <div class="price-full">	
		              <h6>Ayman osman</h6>
		              <div class="price">
		                <sup>$</sup>44
                        <span>per month</span>
		              </div>
		              <hr>
		              <p>number of bids  :- <strong>66</strong></p>
		              <p>rollover of bids  :- <strong>88</strong></p>
		              <p>can be able to buy additional bids:- <strong>yes</strong></p>
		              <p>can be able to see other bids :- <strong>yes</strong></p>
		              <p>can be able to add team member :- <strong>yes</strong></p>
		              <br>
		              
		             </div> 
		            </div>
					       
 
	   <div class="row">
	     <h3 class="text-center">agencies</h3>
	     <hr class="mint">
	   </div>	
       <br></br>
       </a>
			
	  </div> <!-- /.container -->
     </section><!-- End section-->
  
	

	 <section class="w">
	  <div class="container">
	  	<div class="row pricing">
		 
		            <div class="col-lg-6">
		             <div class="price-full">	
		              <h6>Osman</h6>
		              <div class="price">
		                <sup>$</sup>66
                        <span>per month</span>
		              </div>
		              <hr>
		               <h6>Ayman osman</h6>
		              <div class="price">
		                <sup>$</sup>44
                        <span>per month</span>
		              </div>
		              <hr>
		              <p>number of bids  :- <strong>66</strong></p>
		              <p>rollover of bids  :- <strong>88</strong></p>
		              <p>can be able to buy additional bids:- <strong>yes</strong></p>
		              <p>can be able to see other bids :- <strong>yes</strong></p>
		              <p>can be able to add team member :- <strong>yes</strong></p>
		              <br>
		             </div> 
		            </div>
					 
			    
		 <div class="col-lg-6"> 
			<form action="" method="POST">
			  <script>
			    
			  </script>
			</form>		
			<br/>
		  <a href="" class="btn btn-success btn-block">pay with Paypal</a> 	
		 </div>	
       </div><!-- /.row -->
         
	  </div> <!-- /.container -->
     </section><!-- End section-->	    		 				 
		 

		 	 
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
	
	
	$(".btn-danger").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['delete_job']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/delete/deletejob.php",
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
	 if(confirm("<?php echo $lang['activate_job']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/activatejob.php",
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
	 if(confirm("<?php echo $lang['deactivate_job']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/deactivatejob.php",
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
	
	$(".btn-kafe").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['make_public']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/makepublic.php",
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
	
	$(".btn-warning").click(function(){
	
	//Save the link in a variable called element
	var element = $(this);
	
	//Find the id of the link that was clicked
	var id = element.attr("id");
	
	//Built a url to send
	var info = 'id=' + id;
	 if(confirm("<?php echo $lang['hide_public']; ?>"))
			  {
			var parent = $(this).parent().parent();
				$.ajax({
				 type: "GET",
				 url: "template/actions/hidepublic.php",
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
