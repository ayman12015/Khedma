
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../assets/img/services/9.jpg" width=33 class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Ayman osman</p>
              <!-- Status -->
              <a href="profile.php?a=profile"><i class="fa fa-circle text-success"></i> online</a>
            </div>
          </div>


          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">sidenav_header_1</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="">
            	<a href="dashboard.php"><i class='fa fa-dashboard'></i> <span>dashboard</span></a>
            </li>
            <li class=">
              <a href="#"><i class='fa fa-users'></i> <span>freelancers</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="freelancerlist.php">freelancer list</a></li>
                <li><a href="addfreelancer.php">add freelancer</a></li>
              </ul>
            </li>            
            <li class="">
              <a href="#"><i class='fa fa-user-md'></i> <span>clients</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="clientlist.php">client list</a></li>
                <li><a href="addclient.php">add client</a></li>
              </ul>
            </li>        
            <li class="header">sidenav_header_2</li>       
            <li class="">
            	<a href="joblist.php"><i class='fa fa-align-left'></i> <span>jobs list</span></a>
            </li>         
            <li class="">
            	<a href="jobinvite.php"><i class='fa fa-filter'></i> <span>jobs invites</span></a>
            </li>  
            <li class="">
            	<a href="proposallist.php"><i class='fa fa-files-o'></i> <span>proposals</span></a>
            </li>  
            <li class="">
            	<a href="jobassigned.php"><i class='fa fa-address-card'></i> <span>jobs assigned</span></a>
            </li>           
            <li class="">
              <a href="#"><i class='fa fa-align-left'></i> <span>categories</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="categorylist.php">category list</a></li>
                <li><a href="addcategory.php">add category</a></li>
                <li><a href="changecategory.php">change category position</a></li>
              </ul>
            </li>            
            <li class="">
              <a href="#"><i class='fa fa-cogs'></i> <span>skills</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="skilllist.php">skill list</a></li>
                <li><a href="addskill.php">add skill</a></li>
              </ul>
            </li>      
            <li class="">
            	<a href="reportlist.php"><i class='fa fa-align-left'></i> <span>message reports</span></a>
            </li>      
            <li class="header">payments</li> 
            <li class="">
            	<a href="paymentlist.php"><i class='fa fa-list'></i> <span>payments list</span></a>
            </li>
            <li class="">
            	<a href="pay.php"><i class='fa fa-list'></i> <span>pay freelancers</span></a>
            </li>
            <li class="header">settings</li>          
            <li class="">
             <a href="settings.php?a=site"><i class='fa fa-cogs'></i> <span>site settings</span></a>
            </li>      
            <li class="header"><?php echo $lang['frontend']; ?> <?php echo $lang['settings']; ?></li>          
            <li class="treeview<?php 
               echo $active = ($basename == 'home') ? ' active' : '';  echo $active = ($editname == 'home.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="home.php?a=details"><i class='fa fa-info-circle'></i> <span><?php echo $lang['home']; ?> <?php echo $lang['page']; ?></span></a>
            </li>   
            <li class="treeview<?php 
               echo $active = ($basename == 'jobs') ? ' active' : '';  echo $active = ($editname == 'jobs.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="jobs.php?a=headerimg"><i class='fa fa-clipboard'></i> <span><?php echo $lang['jobs']; ?> <?php echo $lang['page']; ?></span></a>
            </li>      
            <li class="treeview<?php 
               echo $active = ($basename == 'services') ? ' active' : '';  echo $active = ($editname == 'services.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="services.php?a=headerimg"><i class='fa fa-clipboard'></i> <span><?php echo $lang['services']; ?> <?php echo $lang['page']; ?></span></a>
            </li>         
            <li class="treeview<?php 
               echo $active = ($basename == 'about') ? ' active' : '';  echo $active = ($editname == 'about.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="about.php?a=details"><i class='fa fa-clipboard'></i> <span><?php echo $lang['about']; ?> <?php echo $lang['page']; ?></span></a>
            </li>         
            <li class="treeview<?php 
               echo $active = ($basename == 'how') ? ' active' : '';  echo $active = ($editname == 'how.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="how.php?a=details"><i class='fa fa-clipboard'></i> <span><?php echo $lang['how']; ?> <?php echo $lang['it']; ?> <?php echo $lang['works']; ?> <?php echo $lang['page']; ?></span></a>
            </li>    
            <li class="treeview<?php 
               echo $active = ($basename == 'pricing') ? ' active' : '';  echo $active = ($editname == 'pricing.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="pricing.php?a=details"><i class='fa fa-clipboard'></i> <span><?php echo $lang['pricing']; ?> <?php echo $lang['page']; ?></span></a>
            </li>          
            <li class="treeview<?php 
               echo $active = ($basename == 'faq') ? ' active' : '';  echo $active = ($editname == 'faq.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="faq.php?a=details"><i class='fa fa-clipboard'></i> <span><?php echo $lang['faq']; ?> <?php echo $lang['page']; ?></span></a>
            </li>    
            <li class="treeview<?php 
               echo $active = ($basename == 'contact') ? ' active' : '';  echo $active = ($editname == 'contact.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="contact.php?a=details"><i class='fa fa-clipboard'></i> <span><?php echo $lang['contact']; ?> <?php echo $lang['page']; ?></span></a>
            </li> 
            <li class="treeview<?php 
               echo $active = ($basename == 'footer') ? ' active' : '';  echo $active = ($editname == 'footer.php?a='. Input::get('a').'') ? ' active' : '';   ?>">
             <a href="footer.php?a=details"><i class='fa fa-clipboard'></i> <span><?php echo $lang['footer']; ?> <?php echo $lang['page']; ?></span></a>
            </li> 
          
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>