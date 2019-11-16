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
        <title>KHEDMA Ultimate Freelaner</title>
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
        <!-- Style-->
        <link href="assets/css/login.css" rel="stylesheet" type="text/css" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="assets/js/modernizr-custom.js"></script>
		
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
	        <a class="header-nav__logo-link navbar-brand" href="index.php">
	       	
	       		<i class="fa fa-coffee"></i>
	       		KHEDMA
	       	  
	       	  </a>
	      </div>
	    </div>
	    <div class="collapse navbar-collapse navbar-main navbar-right">
	      <ul class="nav navbar-nav header-nav__navigation">
	        <li class="header-nav__navigation-item">
	          <a href="index.php" class="header-nav__navigation-link">
	           home
	          </a>
	        </li>
	        <li class="header-nav__navigation-item">
	          <a href="jobs.php" class="header-nav__navigation-link ">
	            jobs
	          </a>
	        </li>
	        <li class="header-nav__navigation-item">
	          <a href="services.php" class="header-nav__navigation-link ">
	            services
	          </a>
	        </li>
	        <li class="header-nav__navigation-item">
	          <a href="about.php" class="header-nav__navigation-link ">
	           about
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="how.php" class="header-nav__navigation-link ">
	            how it works
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="faq.php" class="header-nav__navigation-link ">
	            faq
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="contact.php" class="header-nav__navigation-link ">
	            contact
	          </a>
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
    ), url('assets/img/services/re.jpg') no-repeat center center fixed;
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
		  <span>Ultimate Freelance Marketplace></span>
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
			 <h3>register</h3>
			</div><!-- /.form-head -->
			
            <div class="form-body">

            <!-- List group -->
            <ul class="list-group">
             <li class="list-group-item">
              <div class="material-switch pull-center">
	           <span class="pull-left">freelancer</span>
                <input id="someSwitchOptionDefault" name="user_type" type="checkbox"/>
                <label for="someSwitchOptionDefault" class="label-success"></label>
	           <span class="pull-right">client</span>
              </div>
             </li>
            </ul> 
			
             <div class="form-row">
			  <div class="form-controls">
			   <input type="text" name="name" class="field" value=""  placeholder="full_name">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->			
			
             <div class="form-row">
			  <div class="form-controls">
			   <input type="text" name="email" class="field" value=""  placeholder="email">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->

		     <div class="form-row">
		      <div class="form-controls">
			   <input type="text" name="username" class="field" value="" placeholder="username">
			  </div><!-- /.form-controls -->
		     </div><!-- /.form-row -->
			 
             <div class="form-row">
			  <div class="form-controls">
			   <input type="password" name="password" class="field" placeholder="password">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->

			 <div class="form-row">
			  <div class="form-controls">
			   <input type="password" name="confirmPassword" class="field" placeholder="confirm_password">
			  </div><!-- /.form-controls -->
             </div><!-- /.form-row -->
		   
			 </div><!-- /.form-body -->
	
			 <div class="form-foot">
			  <div class="form-actions">
               <input type="hidden" name="token" value="" />
			   <input value="register" class="form-btn" type="submit">
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
     <script src="assets/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
     <!-- Bootstrap 3.3.6 JS -->
     <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
     <!-- Typed JS -->
     <script src="assets/js/typed.min.js" type="text/javascript"></script>
     <!-- Kafe JS -->
     <script src="assets/js/kafe.js" type="text/javascript"></script>

</body>
</html>
