<?php



if(isset($_POST['username'])){
    $username = $_POST['username']; 
    // echo "<pre>";
    // print_r($_POST);
    // echo "<hr>";
    $file_array = explode(".",$_FILES['img']['name']);
    $ex = end($file_array);
    move_uploaded_file($_FILES['img']['tmp_name'],"img/".$username.".".$ex);
}


?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="img" multiple>
    <input type="submit" value="login">
</form>