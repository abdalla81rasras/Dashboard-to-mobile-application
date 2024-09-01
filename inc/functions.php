<?php
include "connection.php";
include "incFun.php";

//users
if(isset($_POST['save_users'])){
	
    if(empty($full_name = $_POST['full_name'])){
        $errors['full_name']="No Name !";
     }else{
        $full_name = $_POST['full_name'];
    }
 
    if(empty($email = $_POST['email'])){
        $errors['email']="No Email !";
     }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email valid !';
        }    
    }

    if(empty($user_name = $_POST['user_name'])){
        $errors['user_name']="No User name !";
     }else{
        $user_name = $_POST['user_name'];
    }
 
    if(empty($phone_number = $_POST['phone_number'])){
        $errors['phone_number']="No Phone Number !";
     }else{
        $phone_number = $_POST['phone_number'];
        if(!preg_match('/^\d{10}$/', $phone_number)){
            $errors['phone_number'] = 'Phone 10 Digit !';
        }
    }

    if(empty($date_birth = $_POST['date_birth'])){
        $errors['date_birth']="No Date Birth !";
     }else{
        $date_birth = $_POST['date_birth'];
    }
 
    if(!array_filter($errors)){
        $full_name = mysqli_real_escape_string($conn , $_POST['full_name']);
        $email = mysqli_real_escape_string($conn , $_POST['email']);
        $user_name = mysqli_real_escape_string($conn , $_POST['user_name']);
        $phone_number = mysqli_real_escape_string($conn , $_POST['phone_number']);
        $date_birth = mysqli_real_escape_string($conn , $_POST['date_birth']);

        $sql="INSERT INTO `users`(`full_name`,`email`,`user_name`,`phone_number`,`date_birth`) VALUES('$full_name','$email','$user_name','$phone_number','$date_birth')";
        
        if(mysqli_query($conn , $sql)){
           header("Location:users.php");
        }else{
         echo 'query error !!' . mysqli_error($conn);
        }
    }
}

if(isset($_GET['delete_users'])){
    $ID_All_Users=$_GET['delete_users'];

    $sql="DELETE FROM `users` WHERE `ID_All_Users`='$ID_All_Users'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:users.php');
}

if(isset($_GET['edit_users'])){
    $ID_All_Users=$_GET['edit_users'];

    $update=true;

    $sql="SELECT * FROM `users` WHERE `ID_All_Users`='$ID_All_Users'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $full_name = $row['full_name'];
        $email = $row['email'];
        $user_name = $row['user_name'];
        $phone_number = $row['phone_number'];
        $date_birth = $row['date_birth'];
    }
}

if(isset($_POST['update_users'])){
    $ID_All_Users=$_POST['ID_All_Users'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $phone_number = $_POST['phone_number'];
    $date_birth = $_POST['date_birth'];
 
    $sql="UPDATE `users` SET `full_name`='$full_name' ,`email`='$email' , `user_name`='$user_name' ,`phone_number`='$phone_number' , `date_birth`='$date_birth'  WHERE `ID_All_Users`= '$ID_All_Users'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:users.php');
}

//Latest News
if(isset($_POST['save_latest_news'])){
	
    if(empty($title_latest_news = $_POST['title_latest_news'])){
        $errors['title_latest_news']="No Title !";
     }else{
        $title_latest_news = $_POST['title_latest_news'];
    }
 
    if(empty($description_latest_news = $_POST['description_latest_news'])){
        $errors['description_latest_news']="No Description !";
     }else{
        $description_latest_news = $_POST['description_latest_news'];
    }
 
    if(empty($pic_latest_news= $_FILES['pic_latest_news']['name'])){
         $errors['pic_latest_news']="No Selected Image !";
      }else{
         $pic_latest_news=$_FILES['pic_latest_news']['name'];
         $pic_latest_newsTamp =$_FILES["pic_latest_news"]["tmp_name"];
         $folderpic_latest_news ="Uploded/".$pic_latest_news ;
         move_uploaded_file($pic_latest_newsTamp , $folderpic_latest_news);
    }
 
    if(!array_filter($errors)){
        $title_latest_news = mysqli_real_escape_string($conn , $_POST['title_latest_news']);
        $description_latest_news = mysqli_real_escape_string($conn , $_POST['description_latest_news']);
        $pic_latest_news = mysqli_real_escape_string($conn , $_FILES['pic_latest_news']['name']);
 
        $sql="INSERT INTO `latest news`(`title_latest_news`,`description_latest_news`,`pic_latest_news`) VALUES('$title_latest_news','$description_latest_news','$pic_latest_news')";
        if(mysqli_query($conn , $sql)){
           header("Location:latest_news.php");
        }else{
         echo 'query error !!' . mysqli_error($conn);
        }
    }
}

if(isset($_GET['delete_latest_news'])){
    $id_latest_news=$_GET['delete_latest_news'];
 
    $sql="DELETE FROM `latest news` WHERE `id_latest_news`='$id_latest_news'";
 
    if(mysqli_query($conn, $sql)){
 
    } else {
        echo 'query error: '. mysqli_error($conn);
    }
     
    header('Location:latest_news.php');
}
 
if(isset($_GET['edit_latest_news'])){
    $id_latest_news=$_GET['edit_latest_news'];
 
    $update=true;
 
    $sql="SELECT * FROM `latest news` WHERE `id_latest_news`='$id_latest_news'";
 
    $query=mysqli_query($conn,$sql);
 
    while ($row=mysqli_fetch_assoc($query)) {   
        $title_latest_news = $row['title_latest_news'];
        $description_latest_news = $row['description_latest_news'];
        $pic_latest_news = $row['pic_latest_news'];
    }
}
 
if(isset($_POST['update_latest_news'])){
    $id_latest_news=$_POST['id_latest_news'];
    $title_latest_news = $_POST['title_latest_news'];
    $description_latest_news = $_POST['description_latest_news'];

    $pic_latest_news=$_FILES['pic_latest_news']['name'];
    $pic_latest_newsTamp =$_FILES["pic_latest_news"]["tmp_name"];
    $folderpic_latest_news ="Uploded/".$pic_latest_news ;
    move_uploaded_file($pic_latest_newsTamp , $folderpic_latest_news);
  
    $sql="UPDATE `latest news` SET `title_latest_news`='$title_latest_news' ,`description_latest_news`='$description_latest_news',`pic_latest_news`='$pic_latest_news'  WHERE `id_latest_news`= '$id_latest_news'";
  
    if(mysqli_query($conn, $sql)){

    } else {
       echo 'query error: '. mysqli_error($conn);
    }
  
    header('Location:latest_news.php');
}

//Trianing crouser
if(isset($_POST['save_crouser_training'])){
	 
    if(empty($pic_crouser_triaining  = $_FILES['pic_crouser_triaining']['name'])){
         $errors['pic_crouser_triaining']="No Selected Image !";
      }else{
         $pic_crouser_triaining=$_FILES['pic_crouser_triaining']['name'];
         $pic_crouser_triainingTamp=$_FILES["pic_crouser_triaining"]["tmp_name"];
         $folderpic_crouser_triaining="Uploded/" . $pic_crouser_triaining;
         move_uploaded_file($pic_crouser_triainingTamp , $folderpic_crouser_triaining);
    }

    if(empty($title_crouser_training = $_POST['title_crouser_training'])){
        $errors['title_crouser_training']="No Title Crouser Training !";
     }else{
        $title_crouser_training = $_POST['title_crouser_training'];
    }
 
    if(empty($date_crouser_training = $_POST['date_crouser_training'])){
        $errors['date_crouser_training']="NO Date ";
     }else{
        $date_crouser_training  = $_POST['date_crouser_training'];
    }

    if(empty($time_crouser_training = $_POST['time_crouser_training'])){
        $errors['time_crouser_training']="And Time !";
     }else{
        $time_crouser_training = $_POST['time_crouser_training'];
    }
 
    if(empty($description_crouser_training = $_POST['description_crouser_training'])){
        $errors['description_crouser_training']="No Description !";
     }else{
        $description_crouser_training  = $_POST['description_crouser_training'];
    }

    if(empty($price_crouser_training = $_POST['price_crouser_training'])){
        $errors['price_crouser_training']="No price Crouser Training !";
     }else{
        $price_crouser_training  = $_POST['price_crouser_training'];
    }

    if(!array_filter($errors)){
        $pic_crouser_triaining = mysqli_real_escape_string($conn , $_FILES['pic_crouser_triaining']['name']);       
        $title_crouser_training = mysqli_real_escape_string($conn , $_POST['title_crouser_training']);
        $date_crouser_training = mysqli_real_escape_string($conn , $_POST['date_crouser_training']);
        $time_crouser_training = mysqli_real_escape_string($conn , $_POST['time_crouser_training']);
        $description_crouser_training = mysqli_real_escape_string($conn , $_POST['description_crouser_training']);
        $price_crouser_training = mysqli_real_escape_string($conn , $_POST['price_crouser_training']);

        $sql="INSERT INTO `crouser training`(`pic_crouser_triaining`,`title_crouser_training`,`date_crouser_training`,`time_crouser_training`,`description_crouser_training`,`price_crouser_training`) VALUES('$pic_crouser_triaining','$title_crouser_training','$date_crouser_training','$time_crouser_training','$description_crouser_training','$price_crouser_training')";
        if(mysqli_query($conn , $sql)){
           header("Location:training_courses.php");
        }else{
         echo 'query error !!' . mysqli_error($conn);
        }
    }
}
 
if(isset($_GET['delete_crouser_training'])){
     $id_crouser_training=$_GET['delete_crouser_training'];
 
     $sql="DELETE FROM `crouser training` WHERE `id_crouser_training`='$id_crouser_training'";
 
     if(mysqli_query($conn, $sql)){
 
     } else {
         echo 'query error: '. mysqli_error($conn);
     }
     
     header('Location:training_courses.php');
}
 
if(isset($_GET['edit_crouser_training'])){
     $id_crouser_training=$_GET['edit_crouser_training'];
 
     $update=true;
 
     $sql="SELECT * FROM `crouser training` WHERE `id_crouser_training`='$id_crouser_training'";
 
     $query=mysqli_query($conn,$sql);
 
     while ($row=mysqli_fetch_assoc($query)) {   
        $pic_crouser_triaining = $row['pic_crouser_triaining'];
        $title_crouser_training = $row['title_crouser_training'];
        $date_crouser_training = $row['date_crouser_training'];
        $time_crouser_training = $row['time_crouser_training'];
        $description_crouser_training = $row['description_crouser_training'];
        $price_crouser_training = $row['price_crouser_training'];
     }
}
 
if(isset($_POST['update_crouser_training'])){
    $id_crouser_training=$_POST['id_crouser_training'];

    $pic_crouser_triaining = $_FILES['pic_crouser_triaining']['name'];
    $pic_crouser_triainingTamp=$_FILES["pic_crouser_triaining"]["tmp_name"];
    $folderpic_crouser_triaining="Uploded/" . $pic_crouser_triaining ;
    move_uploaded_file($pic_crouser_triainingTamp , $folderpic_crouser_triaining);
 
    $title_crouser_training = $_POST['title_crouser_training'];
    $date_crouser_training = $_POST['date_crouser_training'];
    $time_crouser_training = $_POST['time_crouser_training'];
    $description_crouser_training = $_POST['description_crouser_training'];
    $price_crouser_training = $_POST['price_crouser_training'];
 
    $sql="UPDATE `crouser training` SET `pic_crouser_triaining`='$pic_crouser_triaining' ,`title_crouser_training`='$title_crouser_training' , `date_crouser_training`='$date_crouser_training' ,`time_crouser_training`='$time_crouser_training' , `description_crouser_training`='$description_crouser_training' ,`price_crouser_training`='$price_crouser_training'  WHERE `id_crouser_training`= '$id_crouser_training'";
  
    if(mysqli_query($conn, $sql)){
 
    } else {
       echo 'query error: '. mysqli_error($conn);
    }
  
    header('Location:training_courses.php');
}

//Latest events
if(isset($_POST['save_latest_events'])){
	
    if(empty($title_event = $_POST['title_event'])){
        $errors['title_event']="No Title Event !";
     }else{
        $title_event = $_POST['title_event'];
    }
 
    if(empty($date_latest_events = $_POST['date_latest_events'])){
        $errors['date_latest_events']="No Date ";
     }else{
        $date_latest_events  = $_POST['date_latest_events'];
    }

    if(empty($time_latest_events = $_POST['time_latest_events'])){
        $errors['time_latest_events']="And Time !";
     }else{
        $time_latest_events  = $_POST['time_latest_events'];
    }
 
    if(!array_filter($errors)){
        $title_event = mysqli_real_escape_string($conn , $_POST['title_event']);
        $date_latest_events = mysqli_real_escape_string($conn , $_POST['date_latest_events']);
        $time_latest_events = mysqli_real_escape_string($conn , $_POST['time_latest_events']);

        $sql="INSERT INTO `latest events`(`title_event`,`date_latest_events`,`time_latest_events`) VALUES('$title_event','$date_latest_events','$time_latest_events')";
        if(mysqli_query($conn , $sql)){
           header("Location:latest_events.php");
        }else{
         echo 'query error !!' . mysqli_error($conn);
        }
    }
}
 
if(isset($_GET['delete_latest_events'])){
    $id_latest_events=$_GET['delete_latest_events'];
 
    $sql="DELETE FROM `latest events` WHERE `id_latest_events`='$id_latest_events'";
 
    if(mysqli_query($conn, $sql)){
 
    } else {
        echo 'query error: '. mysqli_error($conn);
    }
     
    header('Location:latest_events.php');
}
 
if(isset($_GET['edit_latest_events'])){
    $id_latest_events=$_GET['edit_latest_events'];
 
    $update=true;
 
    $sql="SELECT * FROM `latest events` WHERE `id_latest_events`='$id_latest_events'";
 
    $query=mysqli_query($conn,$sql);
 
    while ($row=mysqli_fetch_assoc($query)) {   
        $title_event = $row['title_event'];
        $date_latest_events = $row['date_latest_events'];
        $time_latest_events = $row['time_latest_events'];
    }
}
 
if(isset($_POST['update_latest_events'])){
    $id_latest_events=$_POST['id_latest_events'];
    $title_event = $_POST['title_event'];
    $date_latest_events = $_POST['date_latest_events'];
    $time_latest_events = $_POST['time_latest_events'];
   
    $sql="UPDATE `latest events` SET `title_event`='$title_event' ,`date_latest_events`='$date_latest_events' ,`time_latest_events`='$time_latest_events' WHERE `id_latest_events`= '$id_latest_events'";
  
    if(mysqli_query($conn, $sql)){
 
    } else {
       echo 'query error: '. mysqli_error($conn);
    }
  
    header('Location:latest_events.php');
}
 
//Soon
if(isset($_POST['save_soon'])){
	
    if(empty($title_soon = $_POST['title_soon'])){
        $errors['title_soon']="No Title Soon !";
     }else{
        $title_soon = $_POST['title_soon'];
    }
 
    if(empty($notification_soon = $_POST['notification_soon'])){
        $errors['notification_soon']="No Notification Soon !";
     }else{
        $notification_soon  = $_POST['notification_soon'];
    }
 
    if(!array_filter($errors)){
        $title_soon = mysqli_real_escape_string($conn , $_POST['title_soon']);
        $notification_soon = mysqli_real_escape_string($conn , $_POST['notification_soon']);
 
        $sql="INSERT INTO `soon`(`title_soon`,`notification_soon`) VALUES('$title_soon','$notification_soon')";

        if(mysqli_query($conn , $sql)){
           header("Location:soon.php");
        }else{
         echo 'query error !!' . mysqli_error($conn);
        }
    }
}
 
if(isset($_GET['delete_soon'])){
    $ID_Soon=$_GET['delete_soon'];
 
    $sql="DELETE FROM `soon` WHERE `ID_Soon`='$ID_Soon'";
 
    if(mysqli_query($conn, $sql)){
 
    } else {
        echo 'query error: '. mysqli_error($conn);
    }
     
    header('Location:soon.php');
}
 
if(isset($_GET['edit_soon'])){
    $ID_Soon=$_GET['edit_soon'];
 
    $update=true;
 
    $sql="SELECT * FROM `soon` WHERE `ID_Soon`='$ID_Soon'";
 
    $query=mysqli_query($conn,$sql);
 
    while ($row=mysqli_fetch_assoc($query)) {   
        $title_soon = $row['title_soon'];
        $notification_soon = $row['notification_soon'];
    }
}
 
if(isset($_POST['update_soon'])){
    $ID_Soon=$_POST['ID_Soon'];
    $title_soon = $_POST['title_soon'];
    $notification_soon = $_POST['notification_soon'];
  
    $sql="UPDATE `soon` SET `title_soon`='$title_soon' ,`notification_soon`='$notification_soon'  WHERE `ID_Soon`= '$ID_Soon'";
  
    if(mysqli_query($conn, $sql)){
 
    } else {
       echo 'query error: '. mysqli_error($conn);
    }
  
    header('Location:soon.php');
}

//Crouser
if(isset($_POST['save_curses'])){
	
    if(empty($user_id_crouser = $_POST['user_id_crouser'])){
        $errors['user_id_crouser']="No User Id To Crouser !";
     }else{
        $user_id_crouser = $_POST['user_id_crouser'];
    }
 
    if(empty($name_courser = $_POST['name_courser'])){
        $errors['name_courser']="No Name Courser !";
     }else{
        $name_courser = $_POST['name_courser'];
    }
 
    if(empty($Course_ID = $_POST['Course_ID'])){
        $errors['Course_ID']="No ID Course !";
     }else{
        $Course_ID = $_POST['Course_ID'];
    }
   
    $yourArray=array('options'=>array( "Online","Registered","Paid","Canseled")); 
    if (isset($yourArray['options'])) {
        $options = $yourArray['options'];
    } else {
        $options = 'default value';
    }

    if(empty($_POST['options'])){
        $errors['options']="No Option !";
     }else{
        $options = $_POST['options'];
    }

    if(!array_filter($errors)){
        $user_id_crouser = mysqli_real_escape_string($conn , $_POST['user_id_crouser']);
        $name_courser = mysqli_real_escape_string($conn , $_POST['name_courser']);
        $Course_ID = mysqli_real_escape_string($conn , $_POST['Course_ID']);
        $options = mysqli_real_escape_string($conn , $_POST['options']);

        $sql="INSERT INTO `curses`(`user_id_crouser`,`name_courser`,`Course_ID`,`options`) VALUES('$user_id_crouser','$name_courser','$Course_ID','$options')";
        if(mysqli_query($conn , $sql)){
           header("Location:courses.php");
        }else{
         echo 'query error !!' . mysqli_error($conn);
        }
    }
}
 
if(isset($_GET['delete_courses'])){
    $user_id=$_GET['delete_courses'];
 
    $sql="DELETE FROM `curses` WHERE `user_id`='$user_id'";
 
    if(mysqli_query($conn, $sql)){
 
    } else {
        echo 'query error: '. mysqli_error($conn);
    }
     
    header('Location:courses.php');
}

if(isset($_GET['edit_courses'])){
    $user_id=$_GET['edit_courses'];
 
    $update=true;
 
    $sql="SELECT * FROM `curses` WHERE `user_id`='$user_id'";
 
    $query=mysqli_query($conn,$sql);
 
    while ($row=mysqli_fetch_assoc($query)) {   
        $user_id_crouser = $row['user_id_crouser'];
        $name_courser = $row['name_courser'];
        $Course_ID = $row['Course_ID'];
        $options = $row['options'];
    }
}
 
if(isset($_POST['update_curses'])){
    $user_id=$_POST['user_id'];
    $user_id_crouser = $_POST['user_id_crouser'];
    $name_courser = $_POST['name_courser'];
    $Course_ID = $_POST['Course_ID'];
    $options = $_POST['options'];
   
    $sql="UPDATE `curses` SET `user_id_crouser`='$user_id_crouser' ,`name_courser`='$name_courser' , `Course_ID`='$Course_ID' ,`options`='$options'  WHERE `user_id`= '$user_id'";
  
    if(mysqli_query($conn, $sql)){
 
    } else {
       echo 'query error: '. mysqli_error($conn);
    }
  
    header('Location:courses.php');
}

//Events
if(isset($_POST['save_events'])){
	
    if(empty($user_id_events = $_POST['user_id_events'])){
        $errors['user_id_events']="No ID User Events !";
     }else{
        $user_id_events = $_POST['user_id_events'];
    }
 
    if(empty($name_events = $_POST['name_events'])){
        $errors['name_events']="No Name Events !";
     }else{
        $name_events  = $_POST['name_events'];
    }

    if(empty($events_ID = $_POST['events_ID'])){
        $errors['events_ID']="No Events ID !";
     }else{
        $events_ID  = $_POST['events_ID'];
    }

    if(!array_filter($errors)){
        $user_id_events = mysqli_real_escape_string($conn , $_POST['user_id_events']);
        $name_events = mysqli_real_escape_string($conn , $_POST['name_events']);
        $events_ID = mysqli_real_escape_string($conn , $_POST['events_ID']);

 
        $sql="INSERT INTO `events`(`user_id_events`,`name_events`,`events_ID`) VALUES('$user_id_events','$name_events','$events_ID')";

        if(mysqli_query($conn , $sql)){
           header("Location:events.php");
        }else{
         echo 'query error !!' . mysqli_error($conn);
        }
    }
}
 
if(isset($_GET['delete_events'])){
    $ID_All_events=$_GET['delete_events'];
 
    $sql="DELETE FROM `events` WHERE `ID_All_events`='$ID_All_events'";
 
    if(mysqli_query($conn, $sql)){
 
     } else {
        echo 'query error: '. mysqli_error($conn);
    }
     
    header('Location:events.php');
}

if(isset($_GET['edit_events'])){
    $ID_All_events=$_GET['edit_events'];

    $update=true;

    $sql="SELECT * FROM `events` WHERE `ID_All_events`='$ID_All_events'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $user_id_events = $row['user_id_events'];
        $name_events = $row['name_events'];
        $events_ID = $row['events_ID'];
    }
}

if(isset($_POST['update_events'])){
    $ID_All_events=$_POST['ID_All_events'];
    $user_id_events = $_POST['user_id_events'];
    $name_events = $_POST['name_events'];
    $events_ID = $_POST['events_ID'];
 
    $sql="UPDATE `events` SET `user_id_events`='$user_id_events' ,`name_events`='$name_events',`events_ID`='$events_ID'  WHERE `ID_All_events`= '$ID_All_events'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:events.php');
}

//jobs
if(isset($_POST['save_jobs'])){
	
   if(empty($title_job = $_POST['title_job'])){
       $errors['title_job']="No Title Job !";
    }else{
       $title_job = $_POST['title_job'];
   }

   if(empty($experience = $_POST['experience'])){
       $errors['experience']="No Experience !";
    }else{
       $experience = $_POST['experience'];
   }

   if(empty($pic_job = $_FILES['pic_job']['name'])){
        $errors['pic_job']="No Selected Picture !";
     }else{
        $pic_job =$_FILES['pic_job']['name'];
        $pic_jobTamp=$_FILES["pic_job"]["tmp_name"];
        $folderpic_job ="Uploded/".$pic_job ;
        move_uploaded_file($pic_jobTamp , $folderpic_job);
   }

   if(!array_filter($errors)){
       $title_job = mysqli_real_escape_string($conn , $_POST['title_job']);
       $experience = mysqli_real_escape_string($conn , $_POST['experience']);
       $pic_job = mysqli_real_escape_string($conn , $_FILES['pic_job']['name']);

       $sql="INSERT INTO `jobs`(`title_job`,`experience`,`pic_job`) VALUES('$title_job','$experience','$pic_job')";

       if(mysqli_query($conn , $sql)){
          header("Location:jobs.php");
       }else{
        echo 'query error !!' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_jobs'])){
    $id_jobs=$_GET['delete_jobs'];

    $sql="DELETE FROM `jobs` WHERE `id_jobs`='$id_jobs'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:jobs.php');
}

if(isset($_GET['edit_jobs'])){
    $id_jobs=$_GET['edit_jobs'];

    $update=true;

    $sql="SELECT * FROM `jobs` WHERE `id_jobs`='$id_jobs'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $title_job = $row['title_job'];
        $experience = $row['experience'];
        $pic_job = $row['pic_job'];
    }
}

if(isset($_POST['update_jobs'])){
    $id_jobs=$_POST['id_jobs'];
    $title_job = $_POST['title_job'];
    $experience = $_POST['experience'];

    $pic_job =$_FILES['pic_job']['name'];
    $pic_jobTamp=$_FILES["pic_job"]["tmp_name"];
    $folderpic_job ="Uploded/" . $pic_job ;
    move_uploaded_file($pic_jobTamp , $folderpic_job);

    $sql="UPDATE `jobs` SET `title_job`='$title_job' ,`experience`='$experience' ,`pic_job`='$pic_job' WHERE `id_jobs`= '$id_jobs'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:jobs.php');
}

//CVs
if(isset($_GET['delete_cvs'])){
    $id_cvs=$_GET['delete_cvs'];

    $sql="DELETE FROM `cvs` WHERE `id_cvs`='$id_cvs'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:CV_received.php');
}

//feedback
if(isset($_POST['save_feedback'])){
	
   if(empty($id_user_feedback = $_POST['id_user_feedback'])){
       $errors['id_user_feedback']="No ID User Feedback !";
    }else{
       $id_user_feedback = $_POST['id_user_feedback'];
   }

   if(empty($feedback = $_POST['feedback'])){
       $errors['feedback']="No Feedback !";
    }else{
       $feedback  = $_POST['feedback'];
   }

   if(!array_filter($errors)){
       $id_user_feedback = mysqli_real_escape_string($conn , $_POST['id_user_feedback']);
       $feedback = mysqli_real_escape_string($conn , $_POST['feedback']);

       $sql="INSERT INTO `feedback`(`id_user_feedback`,`feedback`) VALUES('$id_user_feedback','$feedback')";
       if(mysqli_query($conn , $sql)){
          header("Location:feedback.php");
       }else{
        echo 'query error !!' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_feedback'])){
    $ID_feedback=$_GET['delete_feedback'];

    $sql="DELETE FROM `feedback` WHERE `ID_feedback`='$ID_feedback'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:feedback.php');
}

if(isset($_GET['edit_feedback'])){
    $ID_feedback=$_GET['edit_feedback'];

    $update=true;

    $sql="SELECT * FROM `feedback` WHERE `ID_feedback`='$ID_feedback'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $id_user_feedback = $row['id_user_feedback'];
        $feedback = $row['feedback'];
    }
}

if(isset($_POST['update_feedback'])){
    $ID_feedback=$_POST['ID_feedback'];
    $id_user_feedback = $_POST['id_user_feedback'];
    $feedback = $_POST['feedback'];
 
    $sql="UPDATE `feedback` SET `id_user_feedback`='$id_user_feedback' ,`feedback`='$feedback'  WHERE `ID_feedback`= '$ID_feedback'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:feedback.php');
}

//Policy and privacy
if(isset($_POST['save_policy_and_privacy'])){
	
   if(empty($policy_and_privacy = $_POST['policy_and_privacy'])){
       $errors['policy_and_privacy']="No Texts !";
    }else{
       $policy_and_privacy = $_POST['policy_and_privacy'];
   }

   if(!array_filter($errors)){
       $policy_and_privacy = mysqli_real_escape_string($conn , $_POST['policy_and_privacy']);

       $sql="INSERT INTO `policy and privacy`(`policy_and_privacy`) VALUES('$policy_and_privacy')";
       if(mysqli_query($conn , $sql)){
          header("Location:policy_and_privacy.php");
       }else{
        echo 'query error !!' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_policy_and_privacy'])){
    $id_policy_and_privacy=$_GET['delete_policy_and_privacy'];

    $sql="DELETE FROM `policy and privacy` WHERE `id_policy_and_privacy`='$id_policy_and_privacy'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:policy_and_privacy.php');
}

if(isset($_GET['edit_policy_and_privacy'])){
    $id_policy_and_privacy=$_GET['edit_policy_and_privacy'];

    $update=true;

    $sql="SELECT * FROM `policy and privacy` WHERE `id_policy_and_privacy`='$id_policy_and_privacy'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $policy_and_privacy = $row['policy_and_privacy'];
    }
}

if(isset($_POST['update_policy_and_privacy'])){
    $id_policy_and_privacy=$_POST['id_policy_and_privacy'];
    $policy_and_privacy = $_POST['policy_and_privacy'];

 
    $sql="UPDATE `policy and privacy` SET `policy_and_privacy`='$policy_and_privacy'  WHERE `id_policy_and_privacy`= '$id_policy_and_privacy'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:policy_and_privacy.php');
}

//Notifications All Users
if(isset($_POST['save_notification_all_users'])){
	
   if(empty($notification_all_users = $_POST['notification_all_users'])){
       $errors['notification_all_users']="No Notification !";
    }else{
       $notification_all_users = $_POST['notification_all_users'];
   }

   if(!array_filter($errors)){
       $notification_all_users = mysqli_real_escape_string($conn , $_POST['notification_all_users']);

       $sql="INSERT INTO `notification all users`(`notification_all_users`) VALUES('$notification_all_users')";

       if(mysqli_query($conn , $sql)){
          header("Location:notific_allUsers.php");
       }else{
        echo 'query error !!' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_notification_all_users'])){
    $id_notification_all_users=$_GET['delete_notification_all_users'];

    $sql="DELETE FROM `notification all users` WHERE `id_notification_all_users`='$id_notification_all_users'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:notific_allUsers.php');
}

if(isset($_GET['edit_notification_all_users'])){
    $id_notification_all_users=$_GET['edit_notification_all_users'];

    $update=true;

    $sql="SELECT * FROM `notification all users` WHERE `id_notification_all_users`='$id_notification_all_users'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $notification_all_users = $row['notification_all_users'];
    }
}

if(isset($_POST['update_notification_all_users'])){
    $id_notification_all_users=$_POST['id_notification_all_users'];
    $notification_all_users = $_POST['notification_all_users'];
 
    $sql="UPDATE `notification all users` SET `notification_all_users`='$notification_all_users' WHERE `id_notification_all_users`= '$id_notification_all_users'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:notific_allUsers.php');
}

//Special Notifications
if(isset($_POST['save_special_notification'])){
	
   if(empty($user_id_special_notification = $_POST['user_id_special_notification'])){
       $errors['user_id_special_notification']="No User ID !";
    }else{
       $user_id_special_notification = $_POST['user_id_special_notification'];
   }

   if(empty($special_notification = $_POST['special_notification'])){
       $errors['special_notification']="No Notification !";
    }else{
       $special_notification  = $_POST['special_notification'];
   }

   if(!array_filter($errors)){
       $user_id_special_notification = mysqli_real_escape_string($conn , $_POST['user_id_special_notification']);
       $special_notification = mysqli_real_escape_string($conn , $_POST['special_notification']);

       $sql="INSERT INTO `special notification`(`user_id_special_notification`,`special_notification`) VALUES('$user_id_special_notification','$special_notification')";

       if(mysqli_query($conn , $sql)){
          header("Location:special_notific.php");
       }else{
        echo 'query error !!' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_special_notification'])){
    $id_special_notification=$_GET['delete_special_notification'];

    $sql="DELETE FROM `special notification` WHERE `id_special_notification`='$id_special_notification'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:special_notific.php');
}

if(isset($_GET['edit_special_notification'])){
    $id_special_notification=$_GET['edit_special_notification'];

    $update=true;

    $sql="SELECT * FROM `special notification` WHERE `id_special_notification`='$id_special_notification'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $user_id_special_notification = $row['user_id_special_notification'];
        $special_notification = $row['special_notification'];
    }
}

if(isset($_POST['update_special_notification'])){
    $id_special_notification=$_POST['id_special_notification'];
    $user_id_special_notification = $_POST['user_id_special_notification'];
    $special_notification = $_POST['special_notification'];

    $sql="UPDATE `special notification` SET `user_id_special_notification`='$user_id_special_notification' ,`special_notification`='$special_notification'  WHERE `id_special_notification`= '$id_special_notification'";
 
    if(mysqli_query($conn, $sql)){

    } else {
      echo 'query error: '. mysqli_error($conn);
    }
 
   header('Location:special_notific.php');
}

?>