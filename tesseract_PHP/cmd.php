<?php

//exec('C:\Users\len0vo500\Desktop\Tesseract-OCR\tesseract.exe C:\Users\len0vo500\Desktop\Tesseract-OCR\input.jpg C:\Users\len0vo500\Desktop\Tesseract-OCR\out');

/*if(isset($_POST["submit"]))
{
	//$filebasename=basename($_FILES['upfile']['name']);
	
	
}*/

//$filePath = realpath($_FILES["file"]["tmp_name"]);

//echo $filePath;

?> 

<!doctype html>
<html>
<head>
<title>TESSERACT OCR PROJECT</title>
</head>
<body>

	<form method="POST" action="upload.php" enctype="multipart/form-data" name="upl_frm">
		Select Image              - <input type="file" name="upfile" />
		<br /> 
		<br /> 
		Enter Output textfile name- <input type="text" name="text1" />
		<br />
		<br /> 
		<select name="ext">
			<option>.jpg</option>
			<option>.png</option>
		</select>
		<br />
		<br /> 
		<input name="submit" type="submit" value="run" />
		<?php
			//if(!empty($message)){?>
			<br /> <font colour="#ff0000"><?php //echo $message?></font>
			<?php// } ?>
	</form>
	
	<br />
	<br /> 
	
	<form method="POST" action="urlupload.php" enctype="multipart/form-data" name="upl_frm">
		Paste url                 - <input type="text" name="upfile1" />
		<br /> 
		<br /> 
		Enter Output textfile name- <input type="text" name="text2" />
		<br />
		<br /> 
		<input name="submit" type="submit" value="run" />
		<?php
			//if(!empty($message)){?>
			<br /> <font colour="#ff0000"><?php //echo $message?></font>
			<?php// } ?>
	</form>
</body>
</html>