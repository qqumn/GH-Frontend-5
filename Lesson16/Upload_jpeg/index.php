<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload jpeg. Lesson 16</title>
</head>
<body>
	<h2>Форма для загрузки файлов</h2>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="filename"><br> 
	    <input type="submit" value="Загрузить"><br>
	</form>
	<?php 
	if ($_FILES["filename"]["size"] > 1024*3*1024){
		echo "File size is more than 3Mb. We can't upload it.";
		exit;
	}
	if($_FILES['filename']['type'] != "image/jpeg") {
		echo "Sorry, we only allow uploading jpeg images";
		exit;
	}

	$uploaddir = '';
	$uploadfile = $uploaddir.$_FILES["filename"]["name"];

	if (move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile)) {
		echo "File is valid, and was successfully uploaded.\n";
		echo "<img style=\"width: 400px; display: block;\"src=" . $_FILES['filename']['name'] . ">";
	} else {
		echo "File uploading failed.\n";
	}
?>
</body>
</html>