<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload1'])) {
      $name = $_POST['name1']; 
      $name2 = $_POST['name2']; 
      $desc1 = $_POST['dec1']; 
       $desc2 = $_POST['dec2']; 
       $desc3 = $_POST['dec3']; 
       $desc4 = $_POST['dec4'];
     echo "$desc4";
     
//file 1
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
      
//file 2
$filename1 = $_FILES["uploadfile1"]["name"];
$tempname1 = $_FILES["uploadfile1"]["tmp_name"];
$folder1 = "./image/" . $filename1;
//file 3
$filename2 = $_FILES["uploadfile2"]["name"];
$tempname2 = $_FILES["uploadfile2"]["tmp_name"];
$folder2 = "./image/" . $filename2;
//file4
$filename3 = $_FILES["uploadfile3"]["name"];
$tempname3 = $_FILES["uploadfile3"]["tmp_name"];
$folder3 = "./image/" . $filename3;
//file5
$filename4 = $_FILES["uploadfile4"]["name"];
$tempname4 = $_FILES["uploadfile4"]["tmp_name"];
$folder4 = "./image/" . $filename4;
//file6
$filename5 = $_FILES["uploadfile5"]["name"];
$tempname5 = $_FILES["uploadfile5"]["tmp_name"];
$folder5 = "./image/" . $filename5;


	$db = mysqli_connect("localhost", "root", "", "imageuploaddb");

	// Get all the submitted data from the form
	// $sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// // Execute queryv
	// // mysqli_query($db, $sql);
      // $insert = $db->query("INSERT into uploads (imges1,imges2,imges3,imges4,imges5,imges6) VALUES ('".$fileNames1."','".$fileNames2."','".$fileNames3."','".$fileNames4."','".$fileNames5."','".$fileNames6."')");
       $insert = $db->query("INSERT into image (title,title2,filename,filename2,filename3,filename4,filename5,filename6,desc2,desc3,desc4,desc5) VALUES ('".$name."','".$name2."','".$filename."','".$filename1."','".$filename2."','".$filename3."','".$filename4."','".$filename5."','".$desc1."','.$desc2.','".$desc3."','".$desc4."')");
          

	// Now let's move the uploaded image into the folder: image
	if ((move_uploaded_file($tempname, $folder))&&(move_uploaded_file($tempname1, $folder1))&&(move_uploaded_file($tempname2, $folder2))&&(move_uploaded_file($tempname3, $folder3))&&(move_uploaded_file($tempname4, $folder4))&&(move_uploaded_file($tempname5, $folder5))) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body  style="background-color:black ;">

<div id="content" style="margin: 100px 100px; width:50wh;">
<div style="margin: 5px;">
      <h1 style="color:#fff ;">image upload</h1>
</div>
       <form method="POST" action="" enctype="multipart/form-data" class="w-50 ">
            <div class="form-group" style="margin: 5px;" >
                <input type="text" class="form-control p-2 my-2 " placeholder="title1" id="name1" name = "name1"  >
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="decsription1"  name="dec1" rows="3"></textarea>
               
                <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle p-2 my-2 " data-bs-toggle="dropdown" aria-expanded="false">
 select images
  </button>
  <ul class="dropdown-menu">
    <li style="width:80rem ;"><input type="file" class="form-control p-2 my-2 w" name="uploadfile"  ></li>
    <li  style="width:80rem ;"> <input type="file" class="form-control p-2 my-2 w" name="uploadfile1"  ></li>
    <li  style="width:80rem ;"> <input type="file" class="form-control p-2 my-2 w" name="uploadfile2"  ></li>
    <li  style="width:80rem ;"><input type="file" class="form-control p-2 my-2 w" name="uploadfile3"  > </li>
    <li  style="width:80rem ;">   <input type="file" class="form-control p-2 my-2 w" name="uploadfile4"  > </li>
    <li  style="width:80rem ;"> <input type="file" class="form-control p-2 my-2 w" name="uploadfile5"  > </li>
  </ul>
                </div>
               
               
               
               
                
                
                
                
             
               
                <input type="text" class="form-control p-2 my-2 w" placeholder="title2" name = "name2"  >
                <textarea class="form-control p-2 my-2" id="exampleFormControlTextarea1"placeholder="decsription2" rows="3" name="dec2"></textarea>
                <textarea class="form-control p-2 my-2" id="exampleFormControlTextarea1"placeholder="decsription3" rows="3" name="dec3"></textarea>
                <textarea class="form-control p-2 my-2" id="exampleFormControlTextarea1" placeholder="decsription4" rows="3" name="dec4"></textarea>
              
            <div class="form-group">
            <input type="submit" class="btn btn-success" name="upload1" >
  
        </div>
        </form>
    </div>   

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>


<html>
   <body>