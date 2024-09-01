<?php
header("Content-Type: application/json");
include "../inc/connection.php";

//users
$query_users="SELECT * FROM `users`";
$result_users=mysqli_query($conn , $query_users);
$rows_users=mysqli_num_rows($result_users);
$output_uesrs=array();
    
if($rows_users > 0){
    $users=array();

    while($user_data=mysqli_fetch_assoc($result_users)){
        $users[]=$user_data;
    }

    if(count($users) > 0){
        $output_uesrs['users']=$users;
    }
}

//Latests news
$query_Latests_news="SELECT * FROM `latest news`";
$result_latest_news=mysqli_query($conn , $query_Latests_news);
$rows_Latests_news=mysqli_num_rows($result_latest_news);
$output_Latests_news=array();

if($rows_Latests_news > 0){
    $latest_news=array();

    while($latest_news_data=mysqli_fetch_assoc($result_latest_news)){
        $latest_news[]=$latest_news_data;
    }

    if(count($latest_news) > 0){
    $output_Latests_news['latest news']=$latest_news;
    }
}

//Crouser Training
$query_Crouser_Training="SELECT * FROM `crouser training`";
$result_Crouser_Training=mysqli_query($conn , $query_Crouser_Training);
$rows_query_Crouser_Training=mysqli_num_rows($result_Crouser_Training);
$output_Crouser_Training=array();

if($rows_query_Crouser_Training > 0){
    $Crouser_Training=array();

    while($Crouser_Training_data=mysqli_fetch_assoc($result_Crouser_Training)){
        $Crouser_Training[]=$Crouser_Training_data;
    }

    if(count($Crouser_Training) > 0){
        $output_Crouser_Training['crouser training']=$Crouser_Training;
    }
}

//Latest Events
$query_Latest_Events="SELECT * FROM `latest events`";
$result_Latest_Events=mysqli_query($conn , $query_Latest_Events);
$rows_Latest_Events=mysqli_num_rows($result_Latest_Events);
$output_Latest_Events=array();

if($rows_Latest_Events > 0){
    $Latest_Events=array();

    while($Latest_Events_data=mysqli_fetch_assoc($result_Latest_Events)){
        $Latest_Events[]=$Latest_Events_data;
    }

    if(count($Latest_Events) > 0 ){
        $output_Latest_Events['latest events']=$Latest_Events;
    }
}

//Soon
$query_soon="SELECT * FROM `soon`";
$result_soon=mysqli_query($conn , $query_soon);
$rows_soon=mysqli_num_rows($result_soon);
$output_soon=array();

if($rows_soon > 0){
    $soon=array();

    while($soon_data=mysqli_fetch_assoc($result_soon)){
        $soon[]=$soon_data;
    }

    if(count($soon) > 0){
        $output_soon['soon']=$soon;
    }
}

//Curses
$query_Curses="SELECT * FROM `curses`";
$result_Curses=mysqli_query($conn , $query_Curses);
$rows_Curses=mysqli_num_rows($result_Curses);
$output_Curses=array();

if($rows_Curses > 0){
    $Curses=array();

    while($Curses_data=mysqli_fetch_assoc($result_Curses)){
        $Curses[]=$Curses_data;
    }

    if(count($Curses) > 0){
        $output_Curses['curses']=$Curses;
    }
}

//Events
$query_Events="SELECT * FROM `events`";
$result_events=mysqli_query($conn , $query_Events);
$rows_events=mysqli_num_rows($result_events);
$output_events=array();

if($rows_events > 0){
    $events=array();

    while($events_data=mysqli_fetch_assoc($result_events)){
        $events[]=$events_data;
    }

    if(count($events) > 0){
        $output_events['events']=$events;
    }
}

//jobs
$query_jobs="SELECT * FROM `jobs`";
$result_jobs=mysqli_query($conn , $query_jobs);
$rows_jobs=mysqli_num_rows($result_jobs);
$output_jobs=array();

if($rows_jobs > 0){
    $jobs=array();

    while($jobs_data=mysqli_fetch_assoc($result_jobs)){
        $jobs[]=$jobs_data;
    }

    if(count($jobs) > 0){
        $output_jobs['jobs']=$jobs;
    }
}

//cover lotter
$query_cvs="SELECT * FROM `cvs`";
$result_cvs=mysqli_query($conn , $query_cvs);
$rows_cvs=mysqli_num_rows($result_cvs);
$outuput_cvs=array();

if($rows_cvs > 0){
    $cvs=array();

    while($cvs_data =mysqli_fetch_assoc($result_cvs)){
        $cvs[]=$cvs_data;
    }

    if(count($cvs) > 0){
        $output_cvs['cvs']=$cvs;
    }
}

//feedback
$query_feedback="SELECT * FROM `feedback`";
$result_feedback=mysqli_query($conn , $query_feedback);
$rows_feedback=mysqli_num_rows($result_feedback);
$output_feedback=array();

if($rows_feedback > 0){
    $feedback=array();

    while($feedback_data=mysqli_fetch_assoc($result_feedback)){
        $feedback[]=$feedback_data;
    }

    if(count($feedback) > 0){
        $output_feedback['feedback']=$feedback;
    }
}

//policy and privacy
$query_policy_and_privacy = "SELECT * FROM `policy and privacy`";
$result_policy_and_privacy = mysqli_query($conn , $query_policy_and_privacy);
$rows_policy_and_privacy = mysqli_num_rows($result_policy_and_privacy);
$output_policy_and_privacy=array();

if($rows_policy_and_privacy > 0){
    $policy_and_privacy=array();

    while($policy_and_privacy_data=mysqli_fetch_assoc($result_policy_and_privacy)){
        $policy_and_privacy[]=$policy_and_privacy_data;
    }

    if(count($policy_and_privacy) > 0){
        $output_policy_and_privacy['policy and privacy']=$policy_and_privacy;
    }
}

//Notifications All Users
$query_notification_all_users="SELECT * FROM `notification all users`";
$result_notification_all_users= mysqli_query($conn , $query_notification_all_users);
$rows_notification_all_users=mysqli_num_rows($result_notification_all_users);
$output_notification_all_users=array();

if($rows_notification_all_users > 0){
    $notification_all_users=array();

    while($notification_all_users_data=mysqli_fetch_assoc($result_notification_all_users)){
        $notification_all_users[]=$notification_all_users_data;
    }

    if(count($notification_all_users) > 0){
        $output_notification_all_users['notification all users']=$notification_all_users;
    }
}

//special notification
$query_special_notification="SELECT * FROM `special notification`";
$result_special_notification= mysqli_query($conn , $query_special_notification);
$rows_special_notification=mysqli_num_rows($result_special_notification);
$output_special_notification=array();

if($rows_special_notification > 0){
    $special_notification=array();

    while($special_notification_data=mysqli_fetch_assoc($result_special_notification)){
        $special_notification[]=$special_notification_data;
    }

    if(count($special_notification) > 0){
        $output_special_notification['special notification']=$special_notification;
    }
}

$out_all = $output_uesrs +
           $output_Latests_news + 
           $output_Crouser_Training +
           $output_Latest_Events + 
           $output_soon +
           $output_Curses +
           $output_events +
           $output_jobs +
           $output_cvs +
           $output_feedback +
           $output_policy_and_privacy +
           $output_notification_all_users +
           $output_special_notification;

echo json_encode($out_all);
?>