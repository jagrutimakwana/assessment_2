<?php
include_once('header.php');
?>

   


    <!-- Counsellor Start -->
    

    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">PHARMACY MANAGEMENT SYSTEM</h4><br/>
                
             </div>

        </div>
             
             <div class="panel-heading">
                          <b> Admin </b>
                        </div><br>
     <!-- CONTENT-WRAPPER SECTION END-->
        <div class="container" class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="row">
                <div class="col-md-12" class="navbar-nav py-0">
                   <ul type="square">
                       <li class="nav-item active <?php active('medicine.php')?>">
                            <a href="managerregister" class="nav-item nav-link active">Admin Register</a>
							</li>
                       <li class="nav-item active <?php active('adminlogin.php')?>">
                            <a href="adminlogin" class="nav-item nav-link active">Admin Login</a>
							</li>
					   <li class="nav-item active <?php active('viewallmanager.php')?>">
                            <a href="viewallmanager" class="nav-item nav-link active">Admin View All Manager</a>
							</li>
					   <li class="nav-item active <?php active('viewallmedicine.php')?>">
                            <a href="viewallmedicine" class="nav-item nav-link active">Admin View All Medicine</a>
							</li>
                       
                   </ul>
					
                </div>
            </div>
        </div>

        
    
        
   
   
  </div>
</div>



            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>

