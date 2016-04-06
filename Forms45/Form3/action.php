<?php 

include 'core.inc.php';

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("upload\\" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      //Saving the newly uploaded file into the uploads folder		
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload\\" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload\\" . $_FILES["file"]["name"]."<br>";
      
      //Code to rename the newly uploded file
      $file=$_FILES["file"]["name"];

      $old="upload\\$file";
      $new='upload\\'.$_SESSION['user_id'].'.jpg';
      $email=$_SESSION['user_id'];
      echo basename($file);
      rename($old, $new);
      $path=realpath($new);
      //rename code ends here

      //Code to insert the path of the image into the database
      include 'connect.inc.php';
      $query="INSERT INTO `photo` VALUES ('','$path','$email','')";
      if($query_result=mysql_query($query)) {
      	echo "Yoohoo";
      } else {
      	echo "Poofer!";
      }
      //sql injestion ends
    }
  }
} else {
  echo "Invalid file";
}
header("Location: ../../mainpg/welcome/");
 ?>