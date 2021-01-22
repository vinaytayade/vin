<?php
    if(isset($_POST['submit']))
    {
    $pname = $_POST['pname'];
    $cname = $_POST['cname'];
    $moblie = $_POST['mod'];
   
    $email =  $_POST['email'];
    $city = $_POST['select_city'];
    
   $to = "vinayk.vk868@gmail.com,vinaykumar.vk3367@gmail.com";
   

    
    $subject = "INVITATION";
    $txt .= " NAME:$pname";
    $txt .= "Address::$cname";
    $txt .= "Mob:$moblie";
    
    $txt .= "email:$email";
    $txt .= "City:$city";

    //school:$school
    mail($to,$subject,$txt);
    }
    ?>