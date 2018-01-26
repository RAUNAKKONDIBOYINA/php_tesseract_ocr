<?php
include 'database.php';
$filePath = realpath($_FILES["upfile"]["tmp_name"]);

//echo $filePath;

$filebasename=basename($_FILES['upfile']['name']);

//echo $filebasename;

//exec('C:\Users\len0vo500\Desktop\Tesseract-OCR\tesseract.exe C:\Users\len0vo500\Desktop\Tesseract-OCR\input.jpg C:\Users\len0vo500\Desktop\Tesseract-OCR\out');

$cmd='C:\Users\len0vo500\Desktop\Tesseract-OCR\tesseract.exe';

//echo $cmd;

$cmd.=' ';

$cmd.=$filePath;

$cmd.=' ';

$out_name=$_POST['text1'];

$out='C:\Users\len0vo500\Desktop\Tesseract-OCR\\';

$out.=$out_name;

$cmd.=$out;

$ext='.txt';

echo $cmd;

exec($cmd);

$out.=$ext;

$sql = "INSERT INTO IMAGETABLE (path) VALUES ('$out')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>