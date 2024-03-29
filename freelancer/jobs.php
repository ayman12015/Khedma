<?php

  require_once 'core/frontinit.php';	


?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> 
<!--<![endif]-->
	
    <!-- Include header.php. Contains header content. -->
    <?php include ('includes/template/header.php'); ?> 

<body class="greybg">
	
     <!-- Include navigation.php. Contains navigation content. -->
 	 <?php include ('includes/template/navigation.php'); ?> 	 
	 
     <!-- ==============================================
	 Header
	 =============================================== -->	 
     <header class="header-jobs" style="

  background: linear-gradient(
      rgba(34,34,34,0.7), 
      rgba(34,34,34,0.7)
    ), url('<?php echo $jobs_header_img; ?>') no-repeat center center fixed;
  background-size: cover;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  color: #fff;
  height: 45vh;
  width: 100%;
  ">
      <div class="container">
	   <div class="content">
	    <div class="row">

		 <?php
		 //Start new Admin object
		 $admin = new Admin();
		 //Start new Client object
		 $client = new Client();
		 //Start new Freelancer object
		 $freelancer = new Freelancer(); 
		 
		 if ($admin->isLoggedIn()) { ?>
		<?php } elseif($freelancer->isLoggedIn()) { ?>
		<?php } elseif($client->isLoggedIn()) { ?>
		 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		  <a href="Client/addjob.php" class="kafe-btn kafe-btn-mint full-width revealOnScroll" data-animation="bounceIn" data-timeout="400">
		  	<i class="fa fa-tags"></i> <?php echo $lang['post']; ?> <?php echo $lang['a']; ?> <?php echo $lang['job']; ?>, <?php echo $lang['it\'s']; ?> <?php echo $lang['free']; ?> !
		  </a>
		 </div><!-- /.col-lg-3 -->
		<?php } else { ?>
		 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		  <a href="login.php" class="kafe-btn kafe-btn-mint full-width revealOnScroll" data-animation="bounceIn" data-timeout="400">
		  	<i class="fa fa-tags"></i> <?php echo $lang['post']; ?> <?php echo $lang['a']; ?> <?php echo $lang['job']; ?>, <?php echo $lang['it\'s']; ?> <?php echo $lang['free']; ?> !
		  </a>
		 </div><!-- /.col-lg-3 -->
		 <?php } ?>	
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
     <!-- ==============================================
	 Jobs Section
	 =============================================== -->
     <section class="jobslist">
	  <div class="container-fluid">
	   <div class="row">
	   
	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		
		 <div class="list">
		  <div class="list-group">
		  
           <span class="list-group-item active cat-top">
	       	<?php if($use_icon === '1'): ?>
	       		<em class="fa fa-fw <?php echo $site_icon; ?> text-white"></em>
	       	<?php endif; ?> 
            &nbsp;&nbsp;&nbsp;<?php echo $lang['categories']; ?>
            <span class="badge">

			  <?php
	          $query = DB::getInstance()->get("category", "*", ["ORDER" => "item_order ASC"]);
			 if($query->count()) {
			 	
			    $x = 1;
				foreach($query->results() as $row) {
				
		       $q1 = DB::getInstance()->get("job", "*", ["AND"=>["catid" => $row->catid]]);  
			   $count[] = $q1->count();
				
					
				 $x++;		
				
			   }
			}else {
			 echo $List = '<p>'.$lang['no_content_found'].'</p>';
			}
			
			echo array_sum($count);
	       ?>+</span>
		   </span>

			  <?php
	          $query = DB::getInstance()->get("category", "*", ["ORDER" => "item_order ASC"]);
			 if($query->count()) {
			 	
			    $x = 1;
				foreach($query->results() as $row) {
			    $List = '';
				
		       $q1 = DB::getInstance()->get("job", "*", ["AND"=>["catid" => $row->catid]]);  
			   $count = $q1->count();
				
			    echo $List .= '
			           <a href="searchcat.php?searchterm='. escape($row->name) .'" class="list-group-item cat-list">
			            <em class="fa fa-fw '. $row->icon .' text-muted"></em>&nbsp;&nbsp;&nbsp;'. escape($row->name) .'
			            <span class="badge text-red-bg">'. escape($count) .'</span>
					   </a>
						 ';
					
	             unset($List);	 
				 $x++;		
				
			   }
			}else {
			 echo $List = '<p>'.$lang['no_content_found'].'</p>';
			}
	       ?>		   
		   
          </div><!-- /.list-group -->
		 </div><!-- /.list --> 
		
		 		
		</div><!-- /.col-lg-4 -->
	    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 white">	
		
		 <form action="search.php" method="get" class="list-search revealOnScroll" data-animation="fadeInDown" data-timeout="200">
		  <button><i class="fa fa-search"></i></button>
		  <input type="text" class="form-control" name="searchterm" placeholder="<?php echo $lang['job']; ?> <?php echo $lang['title']; ?>, <?php echo $lang['keywords']; ?> <?php echo $lang['or']; ?> <?php echo $lang['company']; ?> <?php echo $lang['name']; ?>" value=""/>   
		  <div class="clearfix"></div>
		 </form>
		 
<?php
		  $limit = 5;
          $query = DB::getInstance()->get("job", "*", ["ORDER" => "date_added DESC", 
                                                        "AND" => [
                                                                  "featured" => 1, 
                                                                  "active" => 1, 
                                                                  "delete_remove" => 0
                                                                 ]]);
		  if($query->count()) {
		 	
		    $jobList = '';
		    $x = 1;	
			
			
			foreach($query->results() as $row) {
		    $jobList = '';
				
		    $q1 = DB::getInstance()->get("client", "*", ["clientid" => $row->clientid]);
			if ($q1->count()) {
				 foreach ($q1->results() as $r1) {
				  $name1 = $r1->name;	
				  $username1 = $r1->username;	
				  $imagelocation = $r1->imagelocation;	
			     }
			}	
			
			//Getting Proposals
			$q2 = DB::getInstance()->get("proposal", "*", ["jobid" => $row->jobid]);
			 if ($q2->count() === 0) {
			  $job_proposals = 0;	
			 } else {
			  $job_proposals = $q2->count();
			 }			
									
			$blurb = truncateHtml($row->description, 400);		
				
			 //Start new Admin object
			 $admin = new Admin();
			 //Start new Client object
			 $client = new Client();
			 //Start new Freelancer object
			 $freelancer = new Freelancer(); 
			 
			 if ($admin->isLoggedIn()) { 
	         } elseif($client->isLoggedIn()) {
	         } elseif($freelancer->isLoggedIn()) {
	          $sen .='	 
					 <a href="Freelancer/addproposal.php?id='. escape($row->jobid) .'" class="kafe-btn kafe-btn-mint-small">
					  <i class="fa fa-align-left"></i> ' . $lang['send'] . ' ' . $lang['proposal'] . '
					 </a>
			 ';
			} else {
	          $sen .='	 
					 <a href="login.php" class="kafe-btn kafe-btn-mint-small">
					  <i class="fa fa-align-left"></i> ' . $lang['send'] . ' ' . $lang['proposal'] . '
					 </a>
			 ';
			 }			
			  
		    echo $jobList .= '
				 <div class="job">	
				  
				  <div class="row top-sec">
				   <div class="col-lg-12">
					<div class="col-lg-2 col-xs-12">
					 <a href="client.php?a=overview&id='. escape($row->clientid) .'">
					  <img class="img-responsive" src="Client/'. escape($imagelocation) .'" alt="">
					 </a>
					</div><!-- /.col-lg-2 -->
					<div class="col-lg-10 col-xs-12"> 
					 <h4><a href="jobpost.php?title='. escape($row->slug) .'">'. escape($row->title) .'</a><label class="label bg-danger m-left"> ' . $lang['featured'] . ' </label></h4>
					 <h5><a href="client.php?a=overview&id='. escape($row->clientid) .'">'. escape($name1) .'</a> <small>@'. escape($username1) .'</small></h5>
					</div><!-- /.col-lg-10 -->
					
				   </div><!-- /.col-lg-12 -->
				  </div><!-- /.row -->
				  
				  <div class="row mid-sec">			 
				   <div class="col-lg-12">			 
				   <div class="col-lg-12">
					<hr class="small-hr">
					'. $blurb .'
				   </div><!-- /.col-lg-12 -->
				   </div><!-- /.col-lg-12 -->
				  </div><!-- /.row -->
				  
				  <div class="row bottom-sec">
				   <div class="col-lg-12">
					
					<div class="col-lg-12">
					 <hr class="small-hr">
					</div> 
					
					<div class="col-lg-2">
					 <h5>' . $lang['posted'] . ' </h5>
					 <p>'. ago(strtotime($row->date_added)) .'</p>
					</div>
					<div class="col-lg-2">
					 <h5>' . $lang['location'] . '</h5>
					 <p><i class="fa fa-map-marker"></i> '. escape($row->country) .'</p>
					</div>
					<div class="col-lg-2">
					 <h5> ' . $lang['budget'] . '</h5>
					 <p>$'. escape($row->budget) .'</p>
					</div>
					<div class="col-lg-2">
					 <h5>' . $lang['applicants'] . '</h5>
					 <p>'. escape($job_proposals) .'</p>
					</div>
					<div class="col-lg-4">
					 '.$sen.'
					</div>
					
				   </div><!-- /.col-lg-12 -->
				  </div><!-- /.row -->
				 
				 </div><!-- /.job -->
					 ';
				
             unset($jobList); 
             unset($sen);		
			 $x++;		 
		   }
		}

?>		 
		  
		  <?php		
		  

		    $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
		    $limit = $job_limit;
		    $startpoint = ($page * $limit) - $limit;	  
			  
            $q1 = DB::getInstance()->get("job", "*");
		    $total = $q1->count();
		  
		  
          $query = DB::getInstance()->get("job", "*", ["ORDER" => "date_added DESC", "LIMIT" => [$startpoint, $limit],
													   "OR" => [
															"AND #first" => [
																"invite" => 0,
																"public" => 1,
																"accepted" => 0,
																"active" => 1,
																"delete_remove" => 0
															],
															"AND #second" => [
																"invite" => 1,
																"public" => 1,
																"accepted" => 0,
																"active" => 1,
																"delete_remove" => 0
															]
														]]);
		  if($query->count()) {
		 	
		    $jobList = '';
		    $x = 1;	
			
			
			foreach($query->results() as $row) {
		    $jobList = '';
				
		    $q1 = DB::getInstance()->get("client", "*", ["clientid" => $row->clientid]);
			if ($q1->count()) {
				 foreach ($q1->results() as $r1) {
				  $name1 = $r1->name;	
				  $username1 = $r1->username;	
				  $imagelocation = $r1->imagelocation;	
			     }
			}	
			
			//Getting Proposals
			$q2 = DB::getInstance()->get("proposal", "*", ["jobid" => $row->jobid]);
			 if ($q2->count() === 0) {
			  $job_proposals = 0;	
			 } else {
			  $job_proposals = $q2->count();
			 }			
									
			$blurb = truncateHtml($row->description, 400);		
				
			 //Start new Admin object
			 $admin = new Admin();
			 //Start new Client object
			 $client = new Client();
			 //Start new Freelancer object
			 $freelancer = new Freelancer(); 
			 
			 if ($admin->isLoggedIn()) { 
	         } elseif($client->isLoggedIn()) {
	         } elseif($freelancer->isLoggedIn()) {
	          $sen .='	 
					 <a href="Freelancer/addproposal.php?id='. escape($row->jobid) .'" class="kafe-btn kafe-btn-mint-small">
					  <i class="fa fa-align-left"></i> ' . $lang['send'] . ' ' . $lang['proposal'] . '
					 </a>
			 ';
			} else {
	          $sen .='	 
					 <a href="login.php" class="kafe-btn kafe-btn-mint-small">
					  <i class="fa fa-align-left"></i> ' . $lang['send'] . ' ' . $lang['proposal'] . '
					 </a>
			 ';
			 }			
			  
		    echo $jobList .= '
				 <div class="job">	
				  
				  <div class="row top-sec">
				   <div class="col-lg-12">
					<div class="col-lg-2 col-xs-12">
					 <a href="client.php?a=overview&id='. escape($row->clientid) .'">
					  <img class="img-responsive" src="Client/'. escape($imagelocation) .'" alt="">
					 </a>
					</div><!-- /.col-lg-2 -->
					<div class="col-lg-10 col-xs-12"> 
					 <h4><a href="jobpost.php?title='. escape($row->slug) .'">'. escape($row->title) .'</a> </h4>
					 <h5><a href="client.php?a=overview&id='. escape($row->clientid) .'">'. escape($name1) .'</a> <small>@'. escape($username1) .'</small></h5>
					</div><!-- /.col-lg-10 -->
					
				   </div><!-- /.col-lg-12 -->
				  </div><!-- /.row -->
				  
				  <div class="row mid-sec">			 
				   <div class="col-lg-12">			 
				   <div class="col-lg-12">
					<hr class="small-hr">
					'. $blurb .'
				   </div><!-- /.col-lg-12 -->
				   </div><!-- /.col-lg-12 -->
				  </div><!-- /.row -->
				  
				  <div class="row bottom-sec">
				   <div class="col-lg-12">
					
					<div class="col-lg-12">
					 <hr class="small-hr">
					</div> 
					
					<div class="col-lg-2">
					 <h5>' . $lang['posted'] . ' </h5>
					 <p>'. ago(strtotime($row->date_added)) .'</p>
					</div>
					<div class="col-lg-2">
					 <h5>' . $lang['location'] . '</h5>
					 <p><i class="fa fa-map-marker"></i> '. escape($row->country) .'</p>
					</div>
					<div class="col-lg-2">
					 <h5> ' . $lang['budget'] . '</h5>
					 <p>$'. escape($row->budget) .'</p>
					</div>
					<div class="col-lg-2">
					 <h5>' . $lang['applicants'] . '</h5>
					 <p>'. escape($job_proposals) .'</p>
					</div>
					<div class="col-lg-4">
					 '.$sen.'
					</div>
					
				   </div><!-- /.col-lg-12 -->
				  </div><!-- /.row -->
				 
				 </div><!-- /.job -->
					 ';
				
             unset($jobList); 
             unset($sen);		
			 $x++;		 
		   }
		}else {
		 echo $jobList = '<p>'.$lang['no_content_found'].'</p>';
		}

		//print
		echo Pagination($total,$limit,$page);
        ?>

		 
	    </div><!-- /.col-lg-8 -->
	   </div><!-- /.row -->
	  </div><!-- /.container-fluid -->
     </section><!-- /section -->  	 
	  
      <!-- Include footer.php. Contains footer content. -->	
	  <?php include 'includes/template/footer.php'; ?>	
	 
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	 
     <!-- jQuery 2.1.4 -->
     <script src="assets/js/jQuery-2.1.4.min.js"></script>
     <!-- Bootstrap 3.3.6 JS -->
     <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
     <!-- Waypoints JS -->
     <script src="assets/js/waypoints.min.js" type="text/javascript"></script>
     <!-- Kafe JS -->
     <script src="assets/js/kafe.js" type="text/javascript"></script>

</body>
</html>
