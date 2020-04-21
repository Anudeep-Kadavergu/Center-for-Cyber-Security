<?php
include_once 'dbconfig.php';
if(isset($_POST['cmnt'])){
  $cmn=$_POST['cmnts'];
  $sql="INSERT INTO tbl_comments(comment) VALUES('$cmn')";
  mysqli_query($connection,$sql);
  ?>
  <script type="text/javascript">
  	location.href="center.php";
  </script>
  <?php

}
?>