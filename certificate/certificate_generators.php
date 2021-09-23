<?php



function GetStudentData(string $student) :array
{
    $ArrayOfStudent =  explode(",",$student);
    return $ArrayOfStudent;
}

function GetCourseName(string $course) :string
{
    return "course ".$course;
}

function FileCreate(string $file_name){
    return fopen($file_name,"w");
}


function GetContent(string $source) :string
{
   return file_get_contents($source);
}

function PutContent($content,$file,$content_key,$content_value){
    $newcontent =  str_replace($content_key,$content_value,$content);
    fwrite($file,$newcontent);
}


function Generate($content,$coursename,$student){
    foreach($student as $st){
        $newfile =  FileCreate($st.".html");
        PutContent($content, $newfile,['name','course'],[$st,$coursename]);
    }
}


function Bootstrap($file,$student,$course){
    $content =  GetContent($file);
    $student =  GetStudentData($student);
    $coursename = GetCourseName($course);

    Generate($content,$coursename,$student);
}