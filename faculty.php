<?php
include 'dbconfig.php';
if(isset($_COOKIE['user'])) {  
         $value=$_COOKIE['user'];
         $sql="select * from tbl_login where value='$value'";
               $result= mysqli_query($connection,$sql);
                 if(mysqli_num_rows($result)==1){  
$sql="select * from tbl_login where value='$value'";
               $result= mysqli_query($connection,$sql);
               $row = mysqli_fetch_assoc($result);
$admin=$row['user'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <title>Faculty Details</title>
    <link rel="icon" type="image/jpg" href="icons/i11.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap_faculty.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/main_faculty.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/hover.zoom.js"></script>
    <script src="js/hover.zoom.conf.js"></script>
    <script type="text/javascript">
    	window.onunload="a1()";
    	function a1() {
    		window.href="";
    	}
    </script>

    <style type="text/css">
    	.col-lg-3 img{
    		width:100px;
    		height: 100px;
    	}
    	#navi{
    		display: none;
    	}
    </style>
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" id="menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index">FACULTY</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="index">Home</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#publish">Publish</a></li>
            <li><a href="logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = '$admin'");
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
					<img src="uploads/<?php echo $row['file']  ?>" alt="Faculty">
					<h1> <?php echo $row['name'];?></h1>
					<h3>Professional Experience:</h3><hr><br><p>
						<?php
$data=$row['proexp'];
$splittedstring=explode(";",$data);
foreach ($splittedstring as $key => $value) { ?>


•	 <?php echo "$value<br>";
}
?>

.</p>
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->


	<!-- +++++ Projects Section +++++ -->
	<div id="work">
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Administrative Responsibilities Handled:</h3>
				<hr>
				<p>

<?php
$data=$row['admres'];
$splittedstring=explode(";",$data);
foreach ($splittedstring as $key => $value) { ?>


•	 <?php echo "$value<br>";
}
?></p>
 <p><a href="http://www.vardhaman.org">VardhamanVCE.org</a>.</p>
			</div>
		</div>
		
			
	</div><!-- /container -->
</div>
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap.min.js"></script>




<!-- +++++ Posts Lists +++++ -->
	<!-- +++++ First Post +++++ -->
	<div id="blog">
		<h3 style="text-align: center;">Publications</h3><hr>
		<?php
                                    $resultf = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = '$admin'");
                                    $rowf = mysqli_fetch_assoc($resultf);
                                    ?>

    <?php
    $sql="SELECT * FROM tbl_uploads1 where faculty_id='$admin'";
    $result_set=mysqli_query($connection,$sql);
    $i=1;
    $sql="select * from tbl_faculty where faculty_id='$admin'";
    	$result=mysqli_query($connection,$sql);
    	$row=mysqli_fetch_array($result);
    	$name=$row['name'];
    while($row=mysqli_fetch_array($result_set)){
       

	
	if($i%2==1){ ?>
	<div id="grey">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<p><img src="uploads/<?php echo $rowf['file']  ?>" width="50px" height="50px"> <ba><?php echo $name;?></ba></p>
					<p><bd><?php echo $row['daate'];$i=$i+1;?></p>
					<h4><?php echo $row['head'];?></h4>
					<p><b><?php echo $row['subject'];?> </b>  </p>
					<p><a href="uploads/<?php echo $row['file'];?>">Continue Reading...</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /grey -->
	<?php
}
else{
	?>
	
	
	<div id="white" style="display: block;">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<p><img src="uploads/<?php echo $rowf['file']  ?>" width="50px" height="50px"> <ba><?php echo $name;?></ba></p>
					<p><bd><?php echo $row['daate']; $i=$i+1;?></bd></p>
					<h4><?php echo $row['head'];?></h4>
					<p><b><?php echo $row['subject'];?> </b> </p>
					<p><a href="uploads/<?php echo $row['file'];?>">Continue Reading...</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->
	<?php
}
}
?>
</div>
	
	
	
	
	
	
	<!-- +++++ Projects Section +++++ -->
	<div id="projects">
	<div class="container pt">
		<div class="row mt centered">
		<h3>PG Projects</h3>
				<hr>		
				<?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_pg where faculty = '$admin'");
                                  
                                    ?>
			<div class="col-lg-4" style="width: 100%;text-align: left;">
				<?php
				$i=1;
				    while($row=mysqli_fetch_array($result)){ ?>
				<a href="uploads/<?php echo $row['file']; ?>"><p style="margin-left: 100px;text-align: left;"><?php echo $i++.".".$row['title']; ?></p></a><br>
			<?php } ?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	<div class="container pt">
		<div class="row mt centered">
		<h3>UG Projects</h3>
				<hr>	
				<?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_ug where faculty = '$admin'");
                                  
                                    ?>
			<div class="col-lg-4" style="width: 100%;text-align: left;">
				<?php
				$i=1;
				    while($row=mysqli_fetch_array($result)){ ?>
				<a href="uploads/<?php echo $row['file']; ?>"><p style="margin-left: 100px;text-align: left;"><?php echo $i++.".".$row['title']; ?></p></a><br>
				<?php } ?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	<div class="container pt">
		<div class="row mt centered">
		<h3>R&D Projects</h3>
				<hr>	
				<?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_rd where faculty = '$admin'");
                                  
                                    ?>
			<div class="col-lg-4" style="width: 100%;text-align: left;">
				<?php
				$i=1;
				    while($row=mysqli_fetch_array($result)){ ?>
				<a href="uploads/<?php echo $row['file']; ?>"><p style="margin-left: 100px;text-align: left;"><?php echo $i++.".".$row['title']; ?></p></a><br>
				<?php } ?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	</div><!--projects-->

	<!-- +++++ Achievement Section +++++ -->
	<div id="achievements">
	<div class="container pt">
		<div class="row mt centered">
		<h3>Achievements</h3><hr>	
<?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_achievements where faculty = '$admin'");
                                  
                                    ?>
			<div class="col-lg-4" style="width: 100%;text-align: left;">
				<?php
				$i=1;
				    while($row=mysqli_fetch_array($result)){ ?>
				<a href="uploads/<?php echo $row['file']; ?>"><p style="margin-left: 100px;text-align: left;"><?php echo $i++.".".$row['title']; ?></p></a><br>
				<?php } ?>
			</div>
		</div><!-- /row -->
	</div>
</div>

	<div id="publish">
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>PUBLISH HERE</h3>
				<hr>
				<p>These publications will enable atleast some part of society to enrich their skills and knowledge on a content provided</p>
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<form action="upload" method="post" enctype="multipart/form-data">
					<div class="form-group">
				    <input type="text" class="form-control" id="NameInputEmail1" placeholder="Enter ID" name="fid" value="<?php echo $admin; ?>" >
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="Date" class="form-control" id="NameInputEmail1" placeholder="Date" name="date">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="subjectEmail1" placeholder="Heading" name="heading">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject" name="subject" >
				    <br>
				  </div>
				  
				  <div class="form-group"><?php $result = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = '$admin'"); $row=mysqli_fetch_array($result); ?>
				    <input type="email" class="form-control" id="subjectEmail1" placeholder="Enter Email" name="email" value="<?php echo $row['email']; ?>">
				    <br>
				  </div>
				  <div class="form-group">
				  <input type="file" name="file"  class="btn btn-success">
				    <br>
				</div>
				  <button type="submit" class="btn btn-success" name="btn-upload">SUBMIT</button>
				  <a href="view"><button type="button" class="btn btn-success" name="fac">VIEW UPLOADS</button></a>
				  
				  </form>
				  
				   			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</div>


				  
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Address</h4>
					<?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = '$admin'");
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
					<p>
						<?php echo $row['hno']?>,
					<?php echo $row['street']?>,
					<?php echo $row['city']?>
					
,<br/>
						+91 <?php echo $row['phno']?><br/>
						<?php echo $row['district']?>-<?php echo $row['pin']?>,
					<?php echo $row['state']?>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>My Links</h4>
					<p>
						<a href="#">My Website</a><br/>
						<a href="#">linkedIN</a><br/>
						<a href="#">Facebook</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>Career Objective</h4>
					<p><?php echo $row['co']?></p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <?php
}
else{
	echo "login first";
	?>
	<a href="login">click here</a>
	<?php
}
}
else{
	echo "login first";
	?>
	<a href="login">click here</a>
	<?php
}
?>
  </body>
</html>
