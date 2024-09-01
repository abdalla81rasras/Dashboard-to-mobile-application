<?php
session_start();
include "connection.php";

$update=false;

$full_name=$email=$user_name=$phone_number=$date_birth=
$title_latest_news=$description_latest_news=$pic_latest_news=
$pic_crouser_triaining=$title_crouser_training=$date_crouser_training=$time_crouser_training=$description_crouser_training=$price_crouser_training=
$title_event=$date_latest_events=$time_latest_events=
$title_soon=$notification_soon=
$user_id_crouser=$name_courser=$Course_ID=$options=
$user_id_events=$name_events=$events_ID=
$title_job=$experience=$pic_job=
$id_user_feedback=$feedback=
$policy_and_privacy=$notification_all_users=
$user_id_special_notification=$special_notification="";

$errors=array("full_name"=>"" , "email"=>"" , "user_name"=>"" , "phone_number"=>"" , "date_birth"=>"" ,
              "title_latest_news"=>"" , "description_latest_news"=>"" , "pic_latest_news"=>"" ,
              "pic_crouser_triaining"=>"" , "title_crouser_training"=>"" , "date_crouser_training"=>"" , "time_crouser_training"=>"" , "description_crouser_training"=>"" , "price_crouser_training"=>"" ,
              "title_event"=>"" , "date_latest_events"=>"" , "time_latest_events"=>"" , 
              "title_soon"=>"" , "notification_soon"=>"" ,
              "user_id_crouser"=>"" , "name_courser"=>"" , "Course_ID"=>"" , "options"=>"" , 
              "user_id_events"=>"" , "name_events"=>"" , "events_ID"=>"" , 
              "title_job"=>"" , "experience"=>"" , "pic_job"=>"" , 
              "id_user_feedback"=>"" , "feedback"=>"" , 
              "policy_and_privacy"=>"" , "notification_all_users"=>"" ,
              "user_id_special_notification"=>"" , "special_notification"=>""
                                                                              );

?>