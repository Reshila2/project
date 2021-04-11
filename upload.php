
<?php 
$conn=mysqli_connect('localhost','root','','lab8');

if($conn){
  echo "connected";
  if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $tname=$_FILES["files"]["tmp_name"];
    $sql="INSERT INTO `fileup`(`title`,`image`) VALUES ('$title','$pname')";
    if(mysqli_query($conn,$sql)){
      echo "good";
    }
    else{
      echo "bad";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="" method="post" enctype="multipart/form-data">
    <label for="">Titile</label>
    <input type="text" name="title"/>
    <label for="File Upload" name="File"></label>
    <input type="File" name="file">
    <input type="submit" name="uploadfile" value="upload"/>
    <!-- <input type="file" name="uploadfile"/> -->
  </form>
</body>
</html>