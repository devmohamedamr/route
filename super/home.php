<?php
session_start();
if(empty($_SESSION['user'])){
    header("LOCATION: login.html");
}



echo "welcome";
