  <?php
session_start();
if ( $_SESSION['email']==true) {
  
}else
header('location:admin_login.php');
$page='home';
 include('include/header.php');

  ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

  

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">RBNB NEWS PORTAL Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
             
                
              </button>
            </div>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         

  <?php

  include('include/footer.php');


    ?>
