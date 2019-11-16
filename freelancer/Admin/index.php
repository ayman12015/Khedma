<?php
//Check if init.php exists


 require_once '../core/init.php';	


?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> 
<!--<![endif]-->
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <title>KHEDMA ULtimate Freelance Marketplace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="shortcut icon" href="img/favicons/favicon.ico">
		<link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
		
	    <!-- ==============================================
		CSS
		=============================================== -->
        <!-- Bootstrap 3.3.6-->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <!-- Font-awesome 4.5.0-->
		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <!-- Bootstrap Validator-->
		<link rel="stylesheet" href="../assets/css/bootstrapValidator.min.css">
        <!-- Style-->
        <link href="../assets/css/login.css" rel="stylesheet" type="text/css" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="../assets/js/modernizr-custom.js"></script>
		
		<!--[if lt IE 9]>
		 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->		
		
</head>

<body>

	<!-- Paste this code after body tag -->
    <div class="loader">
	<div class="se-pre-con"></div>
    </div>

     <!-- ==============================================
     Navigation Section
     =============================================== -->
	<header id="header" headroom="" role="banner" tolerance="5" offset="700" class="navbar navbar-fixed-top navbar--white ng-isolate-scope headroom headroom--top">
	  <nav role="navigation">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle header-nav__button" data-toggle="collapse" data-target=".navbar-main">
	        <span class="icon-bar header-nav__button-line"></span>
	        <span class="icon-bar header-nav__button-line"></span>
	        <span class="icon-bar header-nav__button-line"></span>
	      </button>
	      <div class="header-nav__logo">
	        <a class="header-nav__logo-link navbar-brand" href="../index.php">
	   
	       		<i class="fa fa-coffee"></i>
	       	 KHEDMA</a>
	      </div>
	    </div>
	    <div class="collapse navbar-collapse navbar-main navbar-right">
	      <ul class="nav navbar-nav header-nav__navigation">
	        <li class="header-nav__navigation-item
	        ">
	          <a href="../index.php" class="header-nav__navigation-link">
	            home
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="../jobs.php" class="header-nav__navigation-link ">
	            jobs
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="../services.php" class="header-nav__navigation-link ">
	            services
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="../about.php" class="header-nav__navigation-link ">
	            about
	          </a>
	        </li>
	        <li class="header-nav__navigation-item">
	          <a href="../how.php" class="header-nav__navigation-link ">
	            how it works
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="../faq.php" class="header-nav__navigation-link ">
	            faq
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="../contact.php" class="header-nav__navigation-link ">
	            contact
	          </a>
	        </li>
	        
		
		 
	
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
            	<?php // echo $profileimg; ?>
                  <img src="assets/img/services/6.jpg" class="user-image" alt="User Image"/>
                
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">
                  	Ayman Osman
                  </span>
                </a>
                <ul class="dropdown-menu">
						<li class="m_2"><a href="Admin/dashboard.php"><i class="fa fa-dashboard"></i>dashboard</a></li>
						<li class="m_2"><a href="Admin/profile.php?a=profile"><i class="fa fa-user"></i>view profile</a></li>
						<li class="m_2"><a href="Admin/logout.php"><i class="fa fa-lock"></i> logout</a></li>	
        		</ul>
              </li>
		
              
		
			 		        
	        <li class="header-nav__navigation-item ">
	          <a class="header-nav__navigation-link" href="../login.php">login</a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a class="header-nav__navigation-link header-nav__navigation-link--outline" href="../register.php">signup for free</a>
	        </li>
		        		 	

              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  	<?php echo $lang['languages']; ?>
                </a>
                <ul class="dropdown-menu">
					<li class="m_2"><a href="<?php echo $test; ?>?lang=english">English</a></li>
					<li class="m_2"><a href="">Arabic</a></li>
					
              </li>


              	        
	      </ul>
	    </div>
	  </nav>
	</header>      
	 
     <!-- ==============================================
	 Header
	 =============================================== -->	 
	 <header class="header-login" style="
    background: linear-gradient(
      rgba(34,34,34,0.7), 
      rgba(34,34,34,0.7)
    ), url('assets/img/services/6.jpg') no-repeat center center fixed;
   background-size: cover;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  color: #fff;
  height: 55vh;
  width: 100%;
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center; ">
      <div class="container">
	   <div class="content">
	    <div class="row">
	     <h1 class="revealOnScroll" data-animation="fadeInDown">
	       	
	       		<i class="fa fa-coffee"></i>
	       KHEDMA</h1>
		 <div id="typed-strings">
		  <span>Ultimate Freelance Marketplace</span>
		 </div>
		 <p id="typed"></p>
        </div><!-- /.row -->
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
     <!-- ==============================================
     Banner Login Section
     =============================================== -->
	 <section class="banner-login">
	  <div class="container">
	  		  	
	   <div class="row">
	   
	    <main class="main main-signup col-lg-12">
	     <div class="col-lg-6 col-lg-offset-3 text-center">
	     	
        
        
				
	     	
		  <div class="form-sign">
		   <form method="post">
		    <div class="form-head">
			 <h3>Admin login</h3>
			</div><!-- /.form-head -->
            <div class="form-body">
			
			 <div class="form-row">
			  <div class="form-controls">
			   <input name="email" placeholder="Email" class="field" type="text">
			  </div><!-- /.form-controls -->
			 </div><!-- /.form-row -->

			 <div class="form-row">
			  <div class="form-controls">
			   <input name="password" placeholder="password" class="field" type="password">
			  </div><!-- /.form-controls -->
			 </div><!-- /.form-row -->
			 
		    </div><!-- /.form-body -->

			<div class="form-foot">
			 <div class="form-actions">					
              <input type="hidden" name="token" value="" />
			  <input value="login" class="form-btn" type="submit">

			  <a class="header-nav__navigation-link" href="dashboard.php">login</a>
			 </div><!-- /.form-actions -->
			</div><!-- /.form-foot -->
		   </form>
		   
		  </div><!-- /.form-sign -->
	     </div><!-- /.col-lg-6 -->
        </main>
		
	   </div><!-- /.row -->
	  </div><!-- /.container -->
     </section><!-- /section -->
	 	 
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	 
     <!-- jQuery 2.1.4 -->
     <script src="../assets/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
     <!-- Bootstrap 3.3.6 JS -->
     <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
     <!-- Typed JS -->
     <script src="../assets/js/typed.min.js" type="text/javascript"></script>
     <!-- Kafe JS -->
     <script src="../assets/js/kafe.js" type="text/javascript"></script> 

</body>
</html>