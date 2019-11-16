<?php 
//Check if init.php exists

 require_once '../core/init.php';	


	



?>
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
          <h1>dashboard<small>control panel</small></h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> home</a></li>
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
                    444	
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
                   66	
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
                    55	
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
                  <span class="info-box-text">job paymentse</span>
                  <span class="info-box-number">
                        550</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->  
          
          <!-- Info boxes -->
          <div class="row">
          	
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-mint"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">membership<br />payments</span>
                  <span class="info-box-number">
                       440</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-align-left"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">featured 
                  	                          payments</span>
                  <span class="info-box-number small">
                   66	
			     </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-mint"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">clients</span>
                  <span class="info-box-number">
                   344	
                    </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">freelancers</span>
                  <span class="info-box-number">
                    676	
                    </span>
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
					    <td><a href=""></a></td>
					   
						<td><span class="label label-success"> job completed </span></td>
						
						
						
					    <td>9-9-2019</td>
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
                66	
				</span> 
				<small class="text-muted m-b block">completed jobs</small>
               </div>
               <div class="col-xs-3 b-r b-light">
				<span class="h4 font-bold m-t block">
                788
                </span> <small class="text-muted m-b block">jobs posted</small>
               </div>
               <div class="col-xs-3 b-r b-light"> 
               	<span class="h4 font-bold m-t block">
                780
				</span> <small class="text-muted m-b block">proposals</small>
               </div>
               <div class="col-xs-3">
			    <span class="h4 font-bold m-t block">
                670
				</span> <small class="text-muted m-b block">jobs payments</small>
               </div>
              </div> 
             </footer>
            </section>
          </div><!-- /.col-lg-8 -->	
          
          <div class="col-lg-4"> 
           <section class="panel panel-default">
            <header class="panel-heading">company 
            	                          earnings</header>
            <div class="panel-body text-center"> 
           3433
             <h4><small>job  payments: </small>$ 777</h4>
             <h4><small>company 
             	        earnings
             	        on
             	        job  
             	        payments: </small>$ 5655</h4>
             <h4><small>membership  
             	        payments: </small>$ 77</h4>
             <h4><small>featured 
             	        payments: </small>$ 770</h4>
             <div class="inline">
              <input class="knob knob-front" data-angleOffset="90" data-linecap="round" value="<?php echo $percentage; ?>" style=""/>

             </div>
            </div>
            <div class="panel-footer">
             <small>total company earnings:
              <strong>$ 6755</strong>
             </small>
            </div> 
            </section>
           </div>
                          
         </div><!-- /.row -->   
         
         <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">monthly job payments</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>finance : January, 2018 - December, 2019</strong>
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
                        <h5 class="description-header"> $ 540</h5>
                        <span class="description-text">total paid amount</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-6 col-xs-6">
                      <div class="description-block">
                        <h5 class="description-header">
                        	$ 544
                        </h5>
                        <span class="description-text">total
                        	                           company
                        	                           earnings</span>
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
    <script>
        $(function($) {

            $(".knob").knob({
                change : function (value) {
                    //console.log("change : " + value);
                },
                release : function (value) {
                    //console.log(this.$.attr('value'));
                    console.log("release : " + value);
                },
                cancel : function () {
                    console.log("cancel : ", this);
                },
                format : function (value) {
                    return value + '%';
                },
                draw : function () {

                    // "tron" case
                    if(this.$.data('skin') == 'tron') {

                        this.cursorExt = 0.3;

                        var a = this.arc(this.cv)  // Arc
                            , pa                   // Previous arc
                            , r = 1;

                        this.g.lineWidth = this.lineWidth;

                        if (this.o.displayPrevious) {
                            pa = this.arc(this.v);
                            this.g.beginPath();
                            this.g.strokeStyle = this.pColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                            this.g.stroke();
                        }

                        this.g.beginPath();
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                        this.g.stroke();

                        this.g.lineWidth = 2;
                        this.g.beginPath();
                        this.g.strokeStyle = this.o.fgColor;
                        this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                        this.g.stroke();

                        return false;
                    }
                }
            });

            // Example of infinite knob, iPod click wheel
            var v, up=0,down=0,i=0
                ,$idir = $("div.idir")
                ,$ival = $("div.ival")
                ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
            $("input.infinite").knob(
                                {
                                min : 0
                                , max : 20
                                , stopper : false
                                , change : function () {
                                                if(v > this.cv){
                                                    if(up){
                                                        decr();
                                                        up=0;
                                                    }else{up=1;down=0;}
                                                } else {
                                                    if(v < this.cv){
                                                        if(down){
                                                            incr();
                                                            down=0;
                                                        }else{down=1;up=0;}
                                                    }
                                                }
                                                v = this.cv;
                                            }
                                });
        });
    </script>    

    <!-- ChartJS 1.0.1 -->
    <script src="../assets/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	 $(function () {
  //-----------------------
  //- MONTHLY SALES CHART -
  //-----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas);

  var salesChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    datasets: [
      {
        label: "Electronics",
        fillColor: "rgb(255, 99, 132)",
		lineTension: 0.1,
        strokeColor: "rgb(255, 99, 132)",
        pointColor: "rgb(255, 99, 132)",
        pointStrokeColor: "#c1c7d1",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgb(220,220,220)",
        data : <?=json_encode(array_values($monthvalues));?>
      },
      {
        label: "Digital Goods",
        fillColor: "rgba(60,141,188,0.9)",
        strokeColor: "rgba(60,141,188,0.8)",
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: <?=json_encode(array_values($monthvalue));?>
      }
    ]
  };

  var salesChartOptions = {
    //Boolean - If we should show the scale at all
    showScale: true,
    scaleLabel:
    function(label){return  ' $ ' + label.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");},
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: false,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - Whether the line is curved between points
    bezierCurve: true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension: 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot: true,
    //Number - Radius of each point dot in pixels
    pointDotRadius: 4,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth: 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius: 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke: true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth: 2,
    //Boolean - Whether to fill the dataset with a color
    datasetFill: true,
    //String - A legend template
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
  };

  //Create the line chart
  salesChart.Line(salesChartData, salesChartOptions);		
		
	 });

    </script>

</body>
</html>