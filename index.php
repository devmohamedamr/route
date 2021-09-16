<?php



// getlasstelement

// function GetLastElement($array){
//    $size =  count($array);
//     return $array[$size-1];
// }
// echo GetLastElement($number);

// max
$number = [10,30,5,70,1000,1,100,545];
// function GetMax($array){
//     if(!empty($array)){
//         $first = $array[0]; 
//         foreach($array as $value){
//             if($first < $value){
//                 $first = $value;
//             }   
//         }
//         return $first;
//     }else{
//         return 'array is empty';
//     }
// }
// echo GetMax($number);

// function GetMin($array){
//     if(!empty($array)){
//         $first = $array[0]; 
//         foreach($array as $value){
//             if($first > $value){
//                 $first = $value;
//             }   
//         }
//         return $first;
//     }else{
//         return 'array is empty';
//     }
// }
// echo GetMin($number);


// post

$content =  file_get_contents("test.html");



$student = explode(",",$_POST['username']);

foreach($student as $value){
    $filename = $value.".html";
    
    $newfile =  fopen($filename,"w");

    $newcontent =  str_replace("name",$value,$content);
    fwrite($newfile,$newcontent);
}
