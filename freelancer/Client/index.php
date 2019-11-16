
<!DOCTYPE html>
<html lang="en-US" class="no-js">
    
    <!-- Include header.php. Contains header content. -->
    <?php include ('template/header.php'); ?> 
    <!-- Panel CSS -->
    <link href="../assets/css/AdminLTE/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    
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
          <h1> DASHBOARD<small>Control Panel</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>home</a></li>
            <li class="active">dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
		    <!-- Include currency.php. Contains header content. -->
		    <?php include ('template/currency.php'); ?> 
        	
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-align-left"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">jobs posted</span>
                  <span class="info-box-number small">
                    44	
			     </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-mint"><i class="fa fa-filter"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">jobs invites</span>
                  <span class="info-box-number">
                   	
                    </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="fa fa-align-right"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">jobs completed</span>
                  <span class="info-box-number">
                    66	
                    </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-mint"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">payments</span>
                  <span class="info-box-number">
                       99</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->  
          
         <div class="row">
          <div class="col-lg-8">
          	<section class="panel panel-default">
             <header class="panel-heading font-bold">jobs awarded</header>
             <div class="panel-body">


                 <div class="table-responsive">
                  <table  class="table table-bordered table-striped">
                    <thead>
                      <tr>
					   <th>title</th>
					   <th>progress</th>
					   <th>date added</th>
                      </tr>
                    </thead>
                    <tbody>
				    
						
					    <tr>
					    <td><a href="">title</a></td>
					
					<td><span class="label label-success"> job completed </span></td>

        
						
						
					  <td>22-9-2009</td>
					    </tr>
					 
                    </tbody>
                    <tfoot>
                      <tr>
					   <th>title</th>
					   <th>progress</th>
					   <th>date added</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div><!-- /.table-responsive -->             	
             	
             </div> 
             <footer class="panel-footer bg-white no-padder">
              <div class="row text-center no-gutter">
               <div class="col-xs-3 b-r b-light">
				<span class="h4 font-bold m-t block">
                99
				</span> 
				<small class="text-muted m-b block">completed jobs</small>
               </div>
               <div class="col-xs-3 b-r b-light">
				<span class="h4 font-bold m-t block">
               99
                </span> <small class="text-muted m-b block">unread messages</small>
               </div>
               <div class="col-xs-3 b-r b-light"> 
               	<span class="h4 font-bold m-t block">
                99
				</span> <small class="text-muted m-b block">new proposals</small>
               </div>
               <div class="col-xs-3">
			    <span class="h4 font-bold m-t block">
               99	
				</span> <small class="text-muted m-b block">jobs payments </small>
               </div>
              </div> 
             </footer>
            </section>
          </div><!-- /.col-lg-8 -->	
          
          <div class="col-lg-4"> 
           <section class="panel panel-default">
            <header class="panel-heading">payments</header>
            <div class="panel-body text-center"> 
           
			
             <h4><small> paid amount : </small>$ 77</h4>
             <small class="text-muted block"> outstanding  payments : $ 66</small>
             <div class="inline">
              <input class="knob knob-front" data-angleOffset="90" data-linecap="round" value="" style=""/>

             </div>
            </div>
            <div class="panel-footer">
             <small> outstanding payments:
              <strong>$  55</strong>
             </small>
            </div> 
            </section>
           </div>
                          
         </div><!-- /.row -->   
         
         <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">monthly recap payments</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>finance : January, 2019 - December, 2019</strong>
                      </p>
                      <div class="chart">
                      	
					                     	
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="400"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->

                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-6 col-xs-6">
                      <div class="description-block border-right">
                        <h5 class="description-header"> $ 66</h5>
                        <span class="description-text">total paid amount </span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-6 col-xs-6">
                      <div class="description-block">
                        <h5 class="description-header">
                        	$ 77
                        </h5>
                        <span class="description-text">outstanding payments</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
         	
         </div>               	


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	 	
	  <?php include 'template/footer.php'; ?>	
	 	
     </div>
     
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	 
    <!-- jQuery 2.1.4 -->
    <script src="../assets/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.6 JS -->
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>

    <script src="../assets/js/jquery.knob.min.js"></script>
   

    <!-- ChartJS 1.0.1 -->
   <!-- ChartJS 1.0.1 -->
   
</body>
</html>