<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Files Uploaded</title>
<link rel="stylesheet" href="css/style11.css" type="text/css" />
</head>
<body>
<div id="header">
<label>Files Uploaded</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="7">Faculty your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>Date of upload</td>
    <td>Subject</td>
    <td>Heading</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads1";
	$result_set=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['daate'] ?></td>
        <td><?php echo $row['subject'] ?></td>
        <td><?php echo $row['head'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
    }
        ?>
    </table>
    

    <table width="80%" border="1">
    <tr>
    <th colspan="5">Admin your uploads...<label><a href="admin.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>Title</td>
    <td>View</td>
    </tr>
    <?php
    $sql="SELECT * FROM tbl_docs";
    $result_set=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_array($result_set))
    {
        ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php 
    } ?>
        
    </table>
    
    
</div>
</body>
</html>