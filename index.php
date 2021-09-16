<?php

// old
// $content =  file_get_contents("test.html");



// $student = explode(",",$_POST['username']);

// foreach($student as $value){
//     $filename = $value.".html";
    
//     $newfile =  fopen($filename,"w");

//     $newcontent =  str_replace("name",$value,$content);
//     fwrite($newfile,$newcontent);
// }



include "certificate_generators.php";


// get content

Bootstrap("test.html",$_POST['username'],$_POST['course']);







