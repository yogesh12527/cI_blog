<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- html starts here -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First_Ci_project</title>
    
    <link href="<?php echo site_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <link href="<?php echo site_url('assets/css/custom.css');?>" rel="stylesheet"/>
  </head>
  <body>
    <div class="container-fluid  bg-dark text-dark sticky-top custom-header">
      <div class="container p-0">
        <div class="nav row py-2">
              <div class="col-md-4 col-12  custom-logo">
                <a href="post">
                <img src="/ci_blog/upload/logo.png" alt="logo here" class="img-fluid"  style="width:250px;">
                </a>
              </div>
              <div class="col-12 col-md-8 d-flex align-items-center custom-menu justify-content-end" >
                  <ul class="list-group list-group-horizontal list-unstyled custom-nav">
                    <?php
                    if(isset($_SESSION['new_user_name'])){
                      if($_SESSION['new_user_name'] != ""){
                        echo"<li><i class='fa fa-home' aria-hidden='true'></i><a href='post'> Home</a></li>";
                        echo"<li><i class='fa fa-user-circle' aria-hidden='true'></i><a href='user_profile'> Profile</a></li>";
                        echo"<li><i class='fa fa-bell' aria-hidden='true'></i><a href='#'> Notification</a></li>";
                        echo"<li><i class='fa fa-cog' aria-hidden='true'></i><a href='#'> Settings</a></li>";
                        echo"<li><i class='fa fa-sign-out' aria-hidden='true'></i><a href='login/logout'> Logout</a></li>";
                      

                        
                      }
                    }

                  
                    ?>
                  </ul>
              </div>
          </div>
      </div>  
    </div>