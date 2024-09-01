<?php 
include "./inc/head.php";
include "./inc/connection.php";
include "./inc/functions.php";

?>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item dropdown pb-1">
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
              <a class="nav-link dropdown-item" href="./add_user.php">
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
          <li class="nav-item dropdown active pb-1">
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
              <a class="nav-link dropdown-item active1" href="./add_special_notific.php">
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
                <h3 class="text-white font-weight-bold">Update notification to any user :</h3>
              <?php else: ?>
                <h3 class="text-white font-weight-bold">Add new notification to any user :</h3>
              <?php endif; ?>
            </div> 
          </div>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_special_notification" value="<?php echo $id_special_notification; ?>"> 
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <h5 class="text-white font-weight-bold">ID User :</h5>
                <input type="text" name="user_id_special_notification" class="form-control" value="<?php echo htmlspecialchars($user_id_special_notification); ?>" placeholder="Enter User ID ...">
                <div class="text-white"><?php echo $errors['user_id_special_notification'] ?></div>
              </div>
            </div>
            <div class="row mt-5 mb-2">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6">
                <h5 class="text-white font-weight-bold">Notification :</h5>
                <textarea name="special_notification" cols="30" rows="8" class="form-control" placeholder="Enter Notification ..."><?php echo htmlspecialchars($special_notification); ?></textarea>
                <div class="text-white"><?php echo $errors['special_notification'] ?></div>
              </div>
            </div>
            <br><br>
            <div class="row justify-content-around">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <?php if($update==true): ?>
                  <button name="update_special_notification" class="btn btn-primary">Update</button>
                <?php else: ?>
                  <button name="save_special_notification" class="btn btn-primary">Save</button>
                <?php endif; ?>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                <button name="cansel_special_notification" class="btn btn-primary">cansel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
<?php 
include "./inc/foot.php"
?>