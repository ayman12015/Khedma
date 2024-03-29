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
          <h1>dashboard<small>freelancer</small></h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> home</a></li>
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
                <span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Today</span>
                  <span class="info-box-number small">
					<script type="text/javascript" language="JavaScript">
					var calendarDate = getCalendarDate();
					document.write(calendarDate);
					</script>
					
					<form name="clock" disabled="disabled">
					<input type="submit" class="trans" name="face" value="">
					</form>		
					
       
						
			     </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="fa fa-align-left"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">jobs available</span>
                  <span class="info-box-number small">33
                    
			     </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-mint"><i class="fa fa-filter"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">jobs invites</span>
                  <span class="info-box-number">33
                    	
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
                  <span class="info-box-text">membership</span>
                  <span class="info-box-number">33
                       </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->     	

          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive"><i class="fa fa-align-right"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">jobs completed</span>
                  <span class="info-box-number">33
                   
                    </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-mint"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">payments paid</span>
                  <span class="info-box-number">
                       $556 </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-mint"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">payments received</span>
                  <span class="info-box-number">
                  $555	
                    </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

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
					              <td><a href="">Desgin logo for alnakheel company</a></td>
						            <td><span class="label label-success"> on progress</span></td>
						
					              <td>22-9-2018</td>
					              </tr>
                        <tr>
                        <td><a href="">Desgin logo for alnakheel company</a></td>
                        <td><span class="label label-success"> on progress</span></td>
            
                        <td>22-9-2018</td>
                        </tr>
                        <tr>
                        <td><a href="">Desgin logo for alnakheel company</a></td>
                        <td><span class="label label-success"> on progress</span></td>
            
                        <td>22-9-2018</td>
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
            55    
				</span> 
				<small class="text-muted m-b block">completed jobs</small>
               </div>
               <div class="col-xs-3 b-r b-light">
				<span class="h4 font-bold m-t block">
                55
                </span> 
                <small class="text-muted m-b block">unread messages</small>
               </div>
               <div class="col-xs-3 b-r b-light"> 
               	<span class="h4 font-bold m-t block">
                55
				</span>
         <small class="text-muted m-b block">your proposals</small>
               </div>
               <div class="col-xs-3">
			    <span class="h4 font-bold m-t block">
               $55 	
				</span> <small class="text-muted m-b block">payments </small>
               </div>
              </div> 
             </footer>
            </section>
          </div><!-- /.col-lg-8 -->	
          
          <div class="col-lg-4"> 
           <section class="panel panel-default">
            <header class="panel-heading">payments</header>
            <div class="panel-body text-center"> 
         
             <h4><small> payments received : </small>$ 55</h4>
             <small class="text-muted block"> outstanding payments : $ 55 </small>
             <div class="inline">
              <input class="knob knob-front" data-angleOffset="90" data-linecap="round" value="<?php echo $percentage; ?>" style=""/>

             </div>
            </div>
            <div class="panel-footer">
             <small>outstanding payments:
              <strong>$ 55</strong>
             </small>
            </div> 
            </section>
           </div>
                          
         </div><!-- /.row -->             
 
         <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">monthly payments received </h3>
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
                        <h5 class="description-header"> $ 55</h5>
                        <span class="description-text">total payments received</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-6 col-xs-6">
                      <div class="description-block">
                        <h5 class="description-header">
                        	$ 55
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

	 <script type="text/javascript" language="JavaScript">
	<!-- Copyright 2002 Bontrager Connection, LLC
	
	function getCalendarDate()
	{
	   var months = new Array(13);
	   months[0]  = "January";
	   months[1]  = "February";
	   months[2]  = "March";
	   months[3]  = "April";
	   months[4]  = "May";
	   months[5]  = "June";
	   months[6]  = "July";
	   months[7]  = "August";
	   months[8]  = "September";
	   months[9]  = "October";
	   months[10] = "November";
	   months[11] = "December";
	   var now         = new Date();
	   var monthnumber = now.getMonth();
	   var monthname   = months[monthnumber];
	   var monthday    = now.getDate();
	   var year        = now.getYear();
	   if(year < 2000) { year = year + 1900; }
	   var dateString = monthname +
	                    ' ' +
	                    monthday +
	                    ', ' +
	                    year;
	   return dateString;
	} // function getCalendarDate()
	//-->
	</script>	
	<script language="javascript" type="text/javascript">
	/* Visit http://www.yaldex.com/ for full source code
	and get more free JavaScript, CSS and DHTML scripts! */
	<!-- Begin
	var timerID = null;
	var timerRunning = false;
	function stopclock (){
	if(timerRunning)
	clearTimeout(timerID);
	timerRunning = false;
	}
	function showtime () {
	var now = new Date();
	var hours = now.getHours();
	var minutes = now.getMinutes();
	var seconds = now.getSeconds()
	var timeValue = "" + ((hours >12) ? hours -12 :hours)
	if (timeValue == "0") timeValue = 12;
	timeValue += ((minutes < 10) ? ":0" : ":") + minutes
	timeValue += ((seconds < 10) ? ":0" : ":") + seconds
	timeValue += (hours >= 12) ? " P.M." : " A.M."
	document.clock.face.value = timeValue;
	timerID = setTimeout("showtime()",1000);
	timerRunning = true;
	}
	function startclock() {
	stopclock();
	showtime();
	}
	window.onload=startclock;
	// End -->
	</script>     

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