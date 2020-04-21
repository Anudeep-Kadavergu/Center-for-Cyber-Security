<?php
if($_COOKIE['admin']=='null')
{ 
	unset($_COOKIE['admin']);
include_once 'dbconfig.php';
 if(isset($_POST['btn_news']))
{    
    $news=$_POST['news'];
    $link=$_POST['link'];
    $ndate=$_POST['ndate'];
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
        $sql="INSERT INTO tbl_news(file,type,size,ndate,news,link) VALUES('$final_file','$file_type','$new_size','$ndate','$news','$link')";
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
    if(isset($_POST['btn_upeve']))
{    
    $event=$_POST['event'];
    $venue=$_POST['venue'];
    $desc=$_POST['desc'];
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
        $sql="INSERT INTO tbl_upeve(file,type,size,event,venue,des) VALUES('$final_file','$file_type','$new_size','$event','$venue','$desc')";
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
    ?>

    <?php
    if(isset($_POST['btn_newsdel'])){
        $sql="DELETE FROM tbl_news";
        mysqli_query($connection,$sql);
        ?>
        <script>
           alert('successfully deleted');
        window.location.href='admin.php';
        </script>
        <?php
    }
  if(isset($_POST['btn_course']))
{    
    $course=$_POST['course'];
    $link=$_POST['link'];
    $category=$_POST['category'];
    $sql="INSERT INTO tbl_course(course,link,category) VALUES('$course','$link','$category')";
        mysqli_query($connection,$sql);
        ?>
        <script>
        alert('successfully uploaded');
        window.location.href='admin.php';
        </script>
        <?php
    }
    if(isset($_POST['btn_coursedel']))
{    
    $course=$_POST['course'];
    $link=$_POST['link'];
    $category=$_POST['category'];
    $sql="DELETE FROM tbl_course where course='$course' and link='$link' and category='$category'";
        mysqli_query($connection,$sql);
        ?>
        <script>
        alert('successfully deleted');
        window.location.href='admin.php';
        </script>
        <?php
    }?>
    <?php
    if(isset($_POST['btn_faculty']))
{  

/*encryption*/
 function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'Anudeep@001';
    $secret_iv = 'Vardhaman';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

/*encryption*/  
    $priority=$_POST['priority'];
    $name=$_POST['name'];
    $category=$_POST['category'];
    $hno=$_POST['hno'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $pin=$_POST['pin'];
    $state=$_POST['state'];
    $phno=$_POST['phno'];
    $co=$_POST['co'];
    $fid=$_POST['fid'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    $passwd = encrypt_decrypt('encrypt', $passwd);
    $admres=$_POST['admres'];
    $proexp=$_POST['proexp'];
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
    move_uploaded_file($file_loc,$folder.$final_file);
    $sql="INSERT INTO tbl_faculty(priority,name,category,hno,street,city,district,pin,state,phno,co,faculty_id,passwd,admres,proexp,file,email) VALUES('$priority','$name','$category','$hno
    ','$street','$city','$district','$pin','$state','$phno','$co','$fid','$passwd','$admres','$proexp','$final_file','$email')";
        mysqli_query($connection,$sql);
        ?>
        <script>
        alert('successfully uploaded');
        window.location.href='admin.php';
        </script>
        <?php
    }
    
  if(isset($_POST['btn_event']))
{    
    $title2=$_POST['title2'];
    $content=$_POST['content'];
    $sql="INSERT INTO tbl_event(title,content) VALUES('$title2','$content')";
        mysqli_query($connection,$sql);
        ?>
        <script>
        alert('successfully uploaded');
        window.location.href='admin.php';
        </script>
        <?php
    }
    if(isset($_POST['btn_patents']))
{    
    $cbr=$_POST['cbr'];
    $appno=$_POST['appno'];
    $title=$_POST['title'];
    $full=$_POST['full'];
        $sql="INSERT INTO tbl_patents(cbr,appno,title,full) VALUES('$cbr','$appno','$title','$full')";
        mysqli_query($connection,$sql);
        ?>
        <script>
        alert('successfully uploaded');
        window.location.href='admin.php';
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-1.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        form input[type=text],input[type=number],select{
            width: 500px;
            border: 5px black;
  padding: 10px 16px ;
  font-size: 16px;
  font-weight: 500;
  box-shadow: inset 0 -1px  #b3b3b3;
  margin-bottom: 20px;
  outline-color: transparent;
  transition: all .3s ease;
        }
        label{
            color: black;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            outline-color: transparent;
            transition: all .3s ease;
        }
        .panel-heading{
            color: black;
            font-weight: 900;
            font-size: 17px;
            outline-color: transparent;
            transition: all .3s ease;

        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <button onclick="window.location.href='#News'">News</button>
    <button onclick="window.location.href='#Course'">Course</button>
    <button onclick="window.location.href='#Patents'">Patents</button>
    <button onclick="window.location.href='#Event'">Events</button>
    <button onclick="window.location.href='#Documents'">Documents</button>
    <button onclick="window.location.href='#Pg'">Pg</button>
    <button onclick="window.location.href='#Rd'">Rd</button>
    <button onclick="window.location.href='#Faculty'">Faculty</button>
    <button onclick="window.location.href='#Patents'">Patents</button>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-5">
                                   SESSION DETAILS
                                </div>
                            </div>
                        </div>
                
                            <div class="panel-footer">
                                    <?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = 'VCE512'");
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['name'];
                                    echo '<br>';
                                    echo $row['faculty_id'];
                                    ?>
                                <div class="clearfix"></div>
                                <form action="logout.php" method="post">
                                    <button class="btn btn-default" name="admin_logout" value="admin_logout">LogOut</button>
                                </form>
                            </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body"> 
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            
                            </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                </div>
                
            <div class="row">
                <div class="col-lg-7">
                    <div id="News">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            News Upload
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">
                                <form action="admin.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                        <label>Date : </label><br>
                                       <input type="date" name="ndate">
                                        <br><br>
                                        <label >News :</label><br>
                                        <input type="text" name="news"><br><br>
                                        <label>Link :</label><br>
                                        <input type="text" name="link">
                                        <br><br>
                                        <label>Image : </label><br>
                                       <input type="file" name="file">
                                        <br><br>
                                        <input type="submit" name="btn_news">
                                        <input type="submit" name="btn_newsdel" value="Delete">
                                    </div>
                                    
                                  </form>
                                  
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div id="Course">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Course Upload 
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="pull-left">
                            <form action="admin.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                     <label> COURSE :</label><br><input type="text" name="course"><br><br>
    <label>Link :</label> <br><input type="text" name="link"><br><br>
    <label>CATEGORY : </label><br>
    <select name="category">
  <option value="Networking">Networking</option>
  <option value="Security">Security</option>
  <option value="IoT & Data Analytics">IoT & Data Analytics</option>
  <option value="OS & It">OS & It</option>
  <option value="Networking">Networking</option>
  <option value="Security">Security</option>
  <option value="IoT & Data Analytics">IoT & Data Analytics</option>
  <option value="OS & It">OS & It</option>
</select>
       
                                </div>
                                <br><br>
                                <input type="submit" name="btn_course">
                                <input type="submit" name="btn_coursedel" value="Delete">

                            </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="table-responsive">
                                        
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-10 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div id="Patents">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Patents Upload
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="admin.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                      <label> CBR NO  :</label><br><input type="text" name="cbr"><br>
    <label>APP  NO : </label><br><input type="text" name="appno"><br>
    <label> TITLE  :</label><br><input type="text" name="title"><br>
    <label>DESC : </label><br><input type="text" name="full"><br>  
                                    </div>
                                    <br>
                                    <br>
                                    <input type="submit" name="btn_patents">
                                </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div id="Event">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Event Upload 
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="pull-left">
                            <form action="admin.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                     <label> Title :</label><br><input type="text" name="title2"><br><br>
    <label>content :</label> <br><input type="text" name="content"><br><br>
       
                                </div>
                                <br><br>
                                <input type="submit" name="btn_event">

                            </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="table-responsive">
                                        
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-10 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div id="UpEvents">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Event Details
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">
                                <form action="admin.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                        <label >Event Name :</label><br>
                                        <input type="text" name="event"><br><br>
                                        <label >Venue :</label><br>
                                        <input type="text" name="venue"><br><br>
                                        <label >Description :</label><br>
                                        <input type="text" name="desc"><br><br>
                                        <label>File </label><br>
                                       <input type="file" name="file">
                                        <br><br>
                                        
                                    </div>
                                    <input type="submit" name="btn_upeve">
                                  </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div id="Documents">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Documents Upload
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">
                                <form action="upload.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                        <label >Title :</label><br>
                                        <input type="text" name="doc_title"><br><br>
                                        <label>File </label><br>
                                       <input type="file" name="file">
                                        <br><br>
                                        
                                    </div>
                                    <input type="submit" name="btn_doc">
                                  </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div id="Pg">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            PG Projects Upload 
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="pull-left">
                            <form action="upload.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                     <label> Title :</label><br><input type="text" name="title"><br><br>
    <label>Faculty :</label> <br><input type="text" name="faculty"><br><br>
    <label>File </label><br>
                                       <input type="file" name="file">
       
                                </div>
                                <br><br>
                                <input type="submit" name="btn_pg">

                            </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="table-responsive">
                                        
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-10 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                     <div id="Rd">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            R&D projects Upload 
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="pull-left">
                            <form action="upload.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                     <label> Title :</label><br><input type="text" name="title"><br><br>
    <label>Faculty :</label> <br><input type="text" name="faculty"><br><br>
    <label>File :</label> <br>
    <input type="file" name="file">
       
                                </div>
                                <br><br>
                                <input type="submit" name="btn_rd">

                            </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="table-responsive">
                                        
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-10 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div id="Faculty">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Faculty Details Upload
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">
                                <form action="admin.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                        <label >Faculty ID:</label><br>
                                        <input type="text" name="fid"><br><br>
                                        <label>password : </label><br>
                                       <input type="text" name="passwd">
                                        <br><br>
                                        <label >Faculty Email:</label><br>
                                        <input type="email" name="email"><br><br>
                                        <label >PRIORITY :</label><br>
                                        <input type="number" name="priority"><br><br>
                                        <label>NAME : </label><br>
                                       <input type="text" name="name">
                                        <br><br>
                                        <label>CATEGORY : </label><br>
    <select name="category">
  <option value="Center Head">Center Head</option>
  <option value="Professor">Professor</option>
  <option value="Associate Professor">Associate Professor</option>
  <option value="Assistant Professor">Assistant Professor</option>
</select>
                                        
                                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Address 
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="pull-left">
                                    <div class="form-group">
    <label>H.NO :</label> <br><input type="text" name="hno"><br><br>
    <label>STREET :</label> <br><input type="text" name="street"><br><br>
    <label> CITY :</label><br><input type="text" name="city"><br><br>
    <label> DISTRICT :</label><br><input type="text" name="district"><br><br>
    <label> PIN :</label><br><input type="text" name="pin"><br><br>
    <label> STATE :</label><br><input type="text" name="state"><br><br>
    <label> PH NUM :</label><br><input type="number" name="phno"><br><br>
       
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="table-responsive">
                                        
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-10 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

                    <label> Career Objective :</label><br><input type="text" name="co"><br><br>
                    <label>Proexp :</label><br><input type="text" name="proexp"><br><br>
                    <label> Admres :</label><br><input type="text" name="admres"><br><br>
                    <label>File :</label> <br>
    <input type="file" name="file">><br><br>

                                    <input type="submit" name="btn_faculty">
                                  </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <a href="view.php">click me</a>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php
}
else{
	echo '<h1>not authorized</h1>';
}
?>
