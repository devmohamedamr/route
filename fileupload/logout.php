<?php

 setcookie("login","",time() - (3600 * 24) , "/");


header("LOCATION: login.php");
