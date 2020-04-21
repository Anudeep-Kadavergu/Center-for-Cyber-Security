<?php
include 'dbconfig.php';
if(isset($_POST['btn_login']))
{
    $id=$_POST['fname'];
    if(isset($_POST['btn_faculty']))
{    
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
    $admres=$_POST['admres'];
    $proexp=$_POST['proexp'];
    $fb=$_POST['fb'];
    $dribble=$_POST['dribble'];
    $linkedin=$_POST['linkedin']
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
        $sql="UPDATE tbl_faculty SET image='$final_file',priority='$priority',name='$name',category='$category',hno='$hno,street='$street',city='$city',district='$district',pin='$pin',state='$state',phno='$phno',admres='$admres',proexp='$proexp',co='$co',fb='$fb',dribble='$dribble',linkedin='$linkedin' WHERE faculty_id='$id'";
        mysqli_query($connection,$sql);
        ?>
        <script>
        alert('successfully uploaded');
        window.location.href='';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
        alert('error while uploading file');
        window.location.href='';
        </script>
        <?php
    }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Faculty upload</title>
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
            font-color: black;
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
                                    $result = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = '$id'");
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
                    
                <div id="Faculty">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Faculty Details Upload
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="pull-left">
                                <form action="faculty_upload.php" method="post" enctype = "multipart/form-data">
                                    <div class="form-group">
                                        <label >Faculty ID:</label><br>
                                        <input type="text" name="fid" value='<?php echo $id ?>'><br><br>
                                        <label >PRIORITY :</label><br>
                                        <input type="number" name="priority" placeholder="fill number as given below"><br><br>
                                        <p> 1--> Center Head<br>2--> Professor<br>3--> Assosiate Professor<br>4--> Assistant Professor<br><br></p>
                                        <label>Image </label><br>
                                       <input type="file" name="file">
                                        <br><br>
                                        <label>NAME : </label><br>
                                       <input type="text" name="name">
                                        <br><br>
                                        <label>CATEGORY : </label><br>
    <select name="category">
  <option value="Center Head">Center Head</option>
  <option value="Professor">Professor</option>
  <option value="Associate Professor">Associate Professor</option>
  <option value="Assistant ProfessorOS & It">Assistant Professor</option>
</select>
<label >PROFESSIONAL EXPERIENCE :</label><br>
                                        <input type="number" name="proexp" placeholder="seperate experience with   ;"><br><br>
<label >ADMINISTRATIVE RESPONSIBILITIES :</label><br>
                                        <input type="number" name="admres" placeholder="seperate responsibilities with   ;"><br><br>
                                        
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
?>
