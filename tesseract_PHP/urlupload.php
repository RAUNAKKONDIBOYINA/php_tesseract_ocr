<?php

include 'database.php';

$url=$_POST['upfile1'];
$out_name=$_POST['text2'];

$image = file_get_contents($url);

$out='C:\Users\len0vo500\Desktop\Tesseract-OCR\\';

$out.=$out_name;
$out2=$out;

$ext='.jpg';
$out.=$ext;


file_put_contents($out, $image);


$cmd='C:\Users\len0vo500\Desktop\Tesseract-OCR\tesseract.exe';

$cmd.=' ';

$cmd.=$out;

$cmd.=' ';

$cmd.=$out2;

echo $cmd;

exec($cmd);

$ext2='.txt';


$out2.=$ext2;

$sql = "INSERT INTO IMAGETABLE (url,path) VALUES ('$url','$out2')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>