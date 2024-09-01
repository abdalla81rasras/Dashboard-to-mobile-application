<?php
include "./inc/head.php";
include "./inc/connection.php";
include "./inc/functions.php";

?>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item dropdown active pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Users
                <span class="material-icons float-right">
                 expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./users.php">
                <p>View Users</p>
              </a>
              <a class="nav-link dropdown-item active1" href="./add_user.php">
                <p>Add User</p>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Latest News
                <span class="material-icons float-right">
                 expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./latest_news.php">
                <p>View Latest News</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_latest_news.php">
                <p>Add Latest News</p>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Training Courses
                <span class="material-icons float-right">
                  expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./training_courses.php">
                <p>View Training Courses</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_training_courses.php">
                <p>Add Training Courses</p>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Latest Events
                <span class="material-icons float-right">
                  expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./latest_events.php">
                <p>View Event</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_latest_events.php">
                <p>Add Event</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="nav-link dropdown-item" href="./soon.php">
                <p>View Soon</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_soon.php">
                <p>Add Soon</p>
              </a>
            </div>
          </li>    
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Courses and Events
                <span class="material-icons float-right">
                  expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./courses.php">
                <p>View Courses</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_courses.php">
                <p>Add Course</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="nav-link dropdown-item" href="./events.php">
                <p>View Events</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_events.php">
                <p>Add Events</p>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Jobs
                <span class="material-icons float-right">
                 expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./jobs.php">
                <p>View Jobs</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_jobs.php">
                <p>Add Jobs</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="nav-link dropdown-item" href="./CV_received.php">
                <p>CVs</p>
              </a>              
            </div>
          </li>
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Feedback
                <span class="material-icons float-right">
                  expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./feedback.php">
                <p>View Feedback</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_feedback.php">
                <p>Add Feedback</p>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Policy And Privacy
                <span class="material-icons float-right">
                  expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./policy_and_privacy.php">
                <p>View Policy And Privacy</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_policy_and_privacy.php">
                <p>Add Policy And Privacy</p>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown pb-1">
            <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p>Notifications
                <span class="material-icons float-right">
                  expand_more
                </span>   
              </p>           
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-0" aria-labelledby="navbarDropdownMenuLink">
              <a class="nav-link dropdown-item" href="./notific_allUsers.php">
                <p>View All Users</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_notific_allUsers.php">
                <p>Add All Users</p>
              </a>
              <div class="dropdown-divider"></div>
              <a class="nav-link dropdown-item" href="./special_notific.php">
                <p>View Special Notification</p>
              </a>
              <a class="nav-link dropdown-item" href="./add_special_notific.php">
                <p>Add Special Notification</p>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content mt-4">
        <div class="container-fluid">
          <div class="row pb-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
              <?php if($update==true): ?>
                <h3 class="text-white font-weight-bold">Update User :</h3>
              <?php else: ?>
                <h3 class="text-white font-weight-bold">Add New User :</h3>
              <?php endif; ?>
            </div> 
          </div>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="ID_All_Users" value="<?php echo $ID_All_Users; ?>">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <h5 class="text-white font-weight-bold">Full Name :</h5>
                <input type="text" name="full_name" class="form-control" value="<?php echo htmlspecialchars( $full_name); ?>" placeholder="Enter Name ..." >
                <div class="text-white"><?php echo $errors['full_name'] ?></div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4 ml-5">
                <h5 class="text-white font-weight-bold">Email :</h5>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter Email ...">
                <div class="text-white"><?php echo $errors['email'] ?></div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <h5 class="text-white font-weight-bold">Username :</h5>
                <input type="text" name="user_name" class="form-control" value="<?php echo htmlspecialchars($user_name); ?>" placeholder="Enter User Name ...">
                <div class="text-white"><?php echo $errors['user_name'] ?></div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4 ml-5">
                <h5 class="text-white font-weight-bold">Phone Number :</h5>
                <input type="text" name="phone_number" class="form-control" value="<?php echo htmlspecialchars($phone_number); ?>" placeholder="Enter Phone Number ...">
                <div class="text-white"><?php echo $errors['phone_number'] ?></div>
              </div>
            </div>
            <div class="row mt-5 mb-2">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <h5 class="text-white font-weight-bold">Date of Birth :</h5>
                <input type="date" name="date_birth" class="text-primary" value="<?php echo htmlspecialchars($date_birth); ?>" >
                <div class="text-white"><?php echo $errors['date_birth'] ?></div>
              </div>
            </div> <br><br>
            <div class="row justify-content-around">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <?php if($update==true): ?>
                  <button name="update_users" class="btn btn-primary">Update</button>
                <?php else: ?>
                  <button name="save_users" class="btn btn-primary">Save</button>
                <?php endif; ?>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <button name="cansel_users" class="btn btn-primary">cansel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
<?php 
include "./inc/foot.php"
?>