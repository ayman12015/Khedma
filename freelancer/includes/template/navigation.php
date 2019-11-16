<? 
$basename = basename($_SERVER["REQUEST_URI"], ".php");
$editname = basename($_SERVER["REQUEST_URI"]);
$test = $_SERVER["REQUEST_URI"];
?>
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
	      
	       	KHEDMA</a>
	      </div>
	    </div>
	    <div class="collapse navbar-collapse navbar-main navbar-right">
	      <ul class="nav navbar-nav header-nav__navigation">
	        <li class="header-nav__navigation-item
	         ">
	          <a href="index.php" class="header-nav__navigation-link">
	            home
	          </a>
	        </li>
	        <li class="header-nav__navigation-item">
	          <a href="jobs.php" class="header-nav__navigation-link ">
	           jobs
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="services.php" class="header-nav__navigation-link ">
	           services
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="about.php" class="header-nav__navigation-link ">
	              about
	          </a>
	        </li>
	        <li class="header-nav__navigation-item ">
	          <a href="how.php" class="header-nav__navigation-link ">
	           how it works
	          </a>
	        </li>

	        <li class="header-nav__navigation-item">
	          <a class="header-nav__navigation-link" href="login.php">login</a>
	        </li>
	        <li class="header-nav__navigation-item">
	          <a class="header-nav__navigation-link header-nav__navigation-link--outline" href="register.php">signup for free</a>
	        </li>
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  	languages
                </a>
                <ul class="dropdown-menu">
					<li class="m_2"><a href="<?php echo $test; ?>?lang=english">English</a></li>
					<li class="m_2"><a href="">Arabic</a></li>
					
              </li>


              	        
	      </ul>
	    </div>
	  </nav>
	</header>     