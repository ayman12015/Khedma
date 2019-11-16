

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
	 <header class="header-contact" style="
  background:  linear-gradient(
      rgba(34,34,34,0.7), 
      rgba(34,34,34,0.7)
    ), url('assets/img/services/6.jpg') no-repeat center center fixed;
  background-size: cover;
  background-position: center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  color: #fff;
  height: 65vh;
  width: 100%;
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;">
      <div class="container">
	   <div class="content">
	   
        <div class="row">
	     <h1>
	   
	       		<i class="fa fa-coffee"></i>
	           Contact
           </h1>
		 <p>Get in touch with us.</p>
        </div><!-- /.row -->
	   
	    <div class="row location">
		 <div class="col-lg-4 text-center">
		  <i class="fa fa-map-marker fa-1x"></i>
		  <p>Khartoum, Sudan</p>
		 </div><!-- /.col-lg-4 -->
		 <div class="col-lg-4">
		  <i class="fa fa-phone fa-1x"></i>
		  <p>(249) 929318793</p>
		 </div><!-- /.col-lg-4 -->
		 <div class="col-lg-4">
		  <i class="fa fa-envelope fa-1x"></i>
		  <p>ayman4work44@mail.com</p>
		 </div><!-- /.col-lg-4 -->
	    </div><!-- /.row -->
		
       </div><!-- /.content -->
	  </div><!-- /.container -->
     </header><!-- /header -->
	 
     <!-- ==============================================
     Map Section
     =============================================== -->
	 <div class="map">
	  <div class="container-fluid">
	   <div class="row">
	   	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31910.130369917133!2d36.80390184826668!3d-1.3157805385798884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1053bc7118e7%3A0xb365376f1d28175!2sNairobi+West%2C+Nairobi!5e0!3m2!1sen!2ske!4v1463256840401" width="600" height="450" style="border:0" allowfullscreen></iframe>
	   	</div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	 </div><!-- /.map -->
	 
     <!-- ==============================================
     Contact Section
     =============================================== -->	  	 
	 <section class="contact">
	  <div class="container">
	   <div class="row">
	   	
		 <!-- <div class="col-lg-12">
	      
	       <div class="alert alert-danger fade in">
	        <a href="#" class="close" data-dismiss="alert">&times;</a>
	       
		   </div>
	     
		   <div class="alert alert-success fade in">
		   <a href="#" class="close" data-dismiss="alert">&times;</a>
		  
		   </div>
		  
          </div> -->	   	
	   
	    <div class="text-center">
		 <h3>have more questions</h3>
		 <hr class="mint">
		 <p class="top-p">Please contact us</p>
	    </div>
	   
        <!-- The contactform -->
		<form method="post" id="contactform">
		 <fieldset>
		  <div class="col-lg-6">
           <!-- Name -->
		   <label for="name" accesskey="U"><i class="fa fa-user"></i></label>
		   <input name="name" type="text" id="name" size="30" value="" />
		   
		   <!-- Email -->
		   <label for="email" accesskey="E"><i class="fa fa-envelope-o"></i></label>
		   <input name="email" type="text" id="email" size="30" value="" />
		   
		  </div>
		  <div class="col-lg-6">
		   <!-- Comments / Message -->
		   <label for="comments" accesskey="C"><i class="fa fa-comment"></i></label>
		   <textarea name="message" id="comments"></textarea>

		  </div>
		  <div class="col-lg-12 text-center">
           <input type="hidden" name="token" value="" />
		   <button type="submit" class="kafe-btn kafe-btn-mint full-width">Submit</button>
          </div>
		 </fieldset>
		</form>		
			
	   </div><!-- /.row -->
	  </div><!-- /.container -->
	 </section><!-- /section -->
	 
     <!-- Include footer.php. Contains footer content. -->
 	 <?php include ('includes/template/footer.php'); ?> 
	 
     <a id="scrollup">Scroll</a>
	 
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	 
     <!-- jQuery 2.1.4 -->
     <script src="assets/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
     <!-- Bootstrap 3.3.6 JS -->
     <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
     <!-- Kafe JS -->
     <script src="assets/js/kafe.js" type="text/javascript"></script>

</body>
</html>
