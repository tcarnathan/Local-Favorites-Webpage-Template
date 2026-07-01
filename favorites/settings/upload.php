<?php
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$pagename = $_POST['pagename'];
$id = $_POST['id'];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

	echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed..');document.location = 'setup.php?id=".$id."&pagename=".$pagename."';</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

  echo "<script>alert('Sorry, your file was not uploaded..');document.location = 'setup.php?id=".$id."&pagename=".$pagename."';</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   
	
	echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded..');document.location = 'setup.php?id=".$id."&pagename=".$pagename."';</script>";

  } else {
    
	echo "<script>alert('There was an error uploading the file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " to the server..');document.location = 'setup.php?id=".$id."&pagename=".$pagename."';</script>";
  }
}
?>