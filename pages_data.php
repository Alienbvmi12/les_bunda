<?php
     $pages = [
        "dashboard" => "pages/index.php",
        "students" => "pages/students.php",
        "schedule" => "pages/schedule.php",
        "spp" => "pages/spp.php",
        "login" => "login.php",
        "profile" => "pages/profile.php"
    ];
    function includePage($page){
        global $pages;
        include $pages[$page];
    }
?>