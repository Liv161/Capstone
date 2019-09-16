<!--<!DOCTYPE html>
<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>

<form action="fileupload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
</form>
<!--</body>
</html>-->
<?php
//if(isset($_POST['Submit1']))
//{ 
//$filepath = "Uploads/" . $_FILES["file"]["name"];
//
//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=300 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
?>
<?php
include './phpCode.php';
?>
<!DOCTYPE html>
<html>
<body>
<!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
<form action="" method="post" enctype="multipart/form-data" >
<!--input tag for file types should have a "type" attribute with value "file"-->
<input type="file" name="uploadfile" />
<input type="submit" name="submit" value="upload" />

</form>

</body>
</html>