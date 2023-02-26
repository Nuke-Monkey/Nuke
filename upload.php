<?php
  $FileName=$_FILES['fuResume']['name'];
  $TmpName=FILES['fuResume']['tmp_name'];
  
  move_uploaded_file($TmpName,$FileName);
  
  echo("File Upload Succefful");
?>
