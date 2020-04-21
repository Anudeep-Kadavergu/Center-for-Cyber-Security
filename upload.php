<?php
include_once 'dbconfig.php';
$connection = mysqli_connect("localhost", "root", "", "project");
if(isset($_POST['btn-upload']))
{    
	$date=$_POST['date'];
	$subject=$_POST['subject'];
	$head=$_POST['heading'];
	$mail=$_POST['email'];
	$fid=$_POST['fid'];
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_uploads1(file,type,size,daate,subject,head,mail,faculty_id) VALUES('$final_file','$file_type','$new_size','$date','$subject','$head','$mail','$fid')";
		mysqli_query($connection,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='faculty.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='faculty.php?fail';
        </script>
		<?php
	}
}

if(isset($_POST['btn_doc']))
{    
	$title=$_POST['doc_title'];
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_docs(file,type,size,title) VALUES('$final_file','$file_type','$new_size','$title')";
		mysqli_query($connection,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='admin.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='admin.php?fail';
        </script>
		<?php
	}
}

if(isset($_POST['btn_pg']))
{    
	$title=$_POST['title'];
	$faculty=$_POST['faculty'];
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_pg(file,type,size,title,faculty) VALUES('$final_file','$file_type','$new_size','$title','$faculty')";
		mysqli_query($connection,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='admin.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='admin.php?fail';
        </script>
		<?php
	}
}

if(isset($_POST['btn_rd']))
{    
	$title=$_POST['title'];
    $faculty=$_POST['faculty'];
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_rd(file,type,size,title,faculty) VALUES('$final_file','$file_type','$new_size','$title','$faculty')";
		mysqli_query($connection,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='admin.php';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='admin.php?fail';
        </script>
		<?php
	}
}

if(isset($_POST['submit_home']))
{    
    $email=$_POST['home_email'];
    $sql="INSERT INTO tbl_subscribe(email) VALUES('$email')";
        mysqli_query($connection,$sql);
        ?>
		<script>
        window.location.href='home.php';
        </script>
		<?php
        
    }

    
?>