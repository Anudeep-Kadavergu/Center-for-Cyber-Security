<?php
if(isset($_POST['deta']))
{
	$id=$_POST['facu'];
 include 'dbconfig.php';
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

    <!-- Bootstrap core CSS -->
    <link href="bootstrap_faculty.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="main_faculty.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="hover.zoom.js"></script>
    <script src="hover.zoom.conf.js"></script>


    <style type="text/css">
    	.col-lg-3 img{
    		width:100px;
    		height: 100px;
    	}
    </style>
    
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="center_team.php">FACULTY</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="index">Home</a></li>
            <li><a href="#ww">Work</a></li>
            <li><a href="#work">About</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#achievements">Achievements</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <?php
    $sql="SELECT * FROM tbl_faculty where faculty_id='$id'";
    $result_set=mysqli_query($connection,$sql);
    $row=mysqli_fetch_array($result_set);
    ?>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="uploads/<?php echo $row['file']  ?>" alt="Faculty" style="width: 250px;height: 250px;border:1px black solid;border-radius: 5%">
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

	<div class="container pt" id="work">
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
	</div>

<div id="blog">
	<h3 style="text-align:center;">Publications</h3><hr>
	<!-- +++++ Posts Lists +++++ -->
	<!-- +++++ First Post +++++ -->
	<?php
                                    $resultf = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = '$id'");
                                    $rowf = mysqli_fetch_assoc($resultf);
                                    ?>
    <?php
    $sql="SELECT * FROM tbl_uploads1 where faculty_id='$id'";
    $result_set=mysqli_query($connection,$sql);
    $i=1;
    $sql="select * from tbl_faculty where faculty_id='$id'";
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
					<p><bd><?php echo $rowf['email'];$i=$i+1;?></p>
					<h4><?php echo $row['head'];?></h4>
					<p><b><?php echo $row['subject'];?> </b>. </p>
					<p><a href="uploads/<?php echo $row['file'];?>">Continue Reading...</a></p>
				</div>

			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /grey -->
	<?php
}
else{
	?>
	
	
	<div id="white">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<p><img src="uploads/<?php echo $rowf['file']  ?>" width="50px" height="50px"> <ba><?php echo $name;?></ba></p>
					<p><bd><?php echo $rowf['email']; $i=$i+1;?></bd></p>
					<h4><?php echo $row['head'];?></h4>
					<p><b><?php echo $row['subject'];?></b> </p>
					
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
                                    $result = mysqli_query($connection, "SELECT * from tbl_pg where faculty = '$id'");
                                  
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
                                    $result = mysqli_query($connection, "SELECT * from tbl_ug where faculty = '$id'");
                                  
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
                                    $result = mysqli_query($connection, "SELECT * from tbl_rd where faculty = '$id'");
                                  
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
                                    $result = mysqli_query($connection, "SELECT * from tbl_achievements where faculty = '$id'");
                                  
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
	
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Address</h4>
					<?php
                                    $result = mysqli_query($connection, "SELECT * from tbl_faculty where faculty_id = '$id'");
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
						<a href="#">LinkedIN</a><br/>
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
	echo "not available";
} ?>
  </body>
</html>
