<?php
include "assign_list.php";
$target_dir = "baitap/$target/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 99999999999999999999) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Allow certain file formats
if($pdfFileType != "pdf") {
  echo "Xin loi ban chi duoc phep upload file pdf.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Xin loi, file chua duoc upload thanh cong";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "File ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " da duoc upload thanh cong.";
  } else {
    echo "Xin loi, da co van de khi upload file cua ban.";
  }
}
?>