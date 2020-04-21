<?php
include_once 'dbconfig.php';
error_reporting(0);
if(!isset($_COOKIE['user'])){
    $cookie_name = "user";
    $cookie_value ="n0" ;
    setcookie($cookie_name, $cookie_value);
    header( "refresh:0.001;" ); 
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<title>Vardhman Center for Cyber Security</title>
<link rel="icon" type="image/jpg" href="icons/i11.png">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/slider.js" type="text/javascript"></script>
<!--<script src="js/dynamic.js" type="text/javascript"></script>-->
<link rel="stylesheet" href="assets/demo.css">
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>
<body >
<div class="area" style="height:100%;width: 150px;"><nav class="main-menu" style="height:100%">
            <ul>
                <li class="has-subnav ">
                    <a href="index">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                             Home
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="center_team">
                        <i class="fa fa-group fa-2x"></i>
                        <span class="nav-text">
                            Center Team
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="publications">
                       <i class="fa fa-copy fa-2x"></i>
                        <span class="nav-text">
                            Center publications
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="patents">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Center patents
                        </span>
                    </a>
                   
                </li>
                <li class="has-subnav">
                    <a href="courses">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                            Center courses
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="certifications">
                        <i class="fa fa-address-card-o fa-2x"></i>
                        <span class="nav-text">
                           Certifications
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                   <a href="mous">
                       <i class="fa fa-handshake-o fa-2x"></i>
                        <span class="nav-text">
                            MoU's
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                   <a href="achivements">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Achievements
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="documents">
                       <i class="fa fa-file-text-o fa-2x"></i>
                        <span class="nav-text">
                            Documents
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout" >
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
    </div>
    <br>
<?php
$value=$_COOKIE['user'];
$sql="select * from tbl_login where value='$value'";
 $result= mysqli_query($connection,$sql);
         if((isset($_COOKIE['user']))&&(mysqli_num_rows($result)==1)) {  
        ?>           
        <header class="header-user-dropdown">

	<div class="header-limiter">
		<h1 style="margin-left: 130px;margin-top: -20px"><img style="width: 150px;height: 70px;" src="l2.png" alt="css templates"/></h1>

		<nav>
			<a href="index" class="selected">HOME</a>
			<a href="about">ABOUT</a>
			<a href="center">CENTER</a>
			<a href="center_team">TEAM</a>
			<a href="projects">PROJECTS</a>
			<a href="gallery">GALLERY</a>
 <?php
            $sql="select user from tbl_login where value='$value'";
            $result=mysqli_query($connection,$sql);
        $row=mysqli_fetch_array($result);
        $user=$row['user'];
         $sql="select file from tbl_faculty where faculty_id='$user'";
            $result=mysqli_query($connection,$sql);
        $row=mysqli_fetch_array($result);
        ?>


		<a href="faculty" style="padding: 0 12px"><div class="header-user-menu">
			<img src="uploads/<?php echo $row['file']  ?>" alt="i" style="width: 50px;height: 30px;border-radius: 50%"/>

			<ul style="margin-top: 5px;">
				<li><a href="logout" class="highlight">Logout</a></li>
			</ul>
        </div>
    </a>

            <!--<div class="mobile-container">
            <a href="dynamic.js" class="menu-drop"><i class="fa fa-bars fa-2x"></i></a>
            <a href="dynamic.js" class="menu-close"><i class="fa fa-close fa-2x"></i></a>

       </div>-->
		</nav>

	</div>

</header>
    <?php  }

    else{

        ?><header class="header-basic-light">

	<div class="header-limiter">

		<h1 style="margin-left: 11%;margin-top: -30px"><img style="width: 250px;height: 120px;" src="images/l6.jpg" alt="css templates"/></h1>

		<nav>
            <div id="header">
			<a href="index" class="selected">HOME</a>
			<a href="about">ABOUT</a>
			<a href="center">CENTER</a>
			<a href="center_team">TEAM</a>
			<a href="projects">PROJECTS</a>
			<a href="gallery">GALLERY</a>
			<a href="login">LOGIN</a>
        </div>
        <!--<div class="mobile-container">
            <a href="#" id="menu-drop"><i class="fa fa-bars fa-2x"></i></a>
            <a href="#" id="menu-close"><i class="fa fa-close fa-2x"></i></a>

       </div>-->
		</nav>
	</div>

</header><?php

    } ?>


    <!--<div class="mobile-content">
        <br><br>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="center">Center</a></li>
                    <li><a href="center_team">Team</a></li>
                    <li><a href="projects">Projects</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="publications">Publications</a></li>
                    <li><a href="patents">Patents</a></li>
                    <li><a href="courses">Courses</a></li>
                    <li><a href="certifications">Certifications</a></li>
                    <li><a href="mous">Mous</a></li>
                    <li><a href="achievements">Achievements</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="index">Profile</a></li>
                    <li><a href="logout">logout</a></li>
                </ul>
                <br>


            </div>-->
    
    <br>

<div id="feature_wrapper">

<!-- Slider 1 -->
<div class="slider" id="slider1">
    <!-- Slides -->
    <div style="background-image:url(images/getty1.jpg);"></div>
    <div style="background-image:url(images/getty2.jpg);"></div>
    <div style="background-image:url(images/cisco.jpg);"></div>
    <div style="background-image:url(images/grid.jpg);"></div>
    <div style="background-image:url(images/cc2.jpeg);"></div>
    
    <!-- The Arrows -->
    <i class="left" class="arrows" style="z-index:2; position:absolute;margin-left: 80px;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
    <!-- Title Bar -->
    <span class="titleBar">
   <blink><h3 style="margin-left: 60px;font-size: 25px;font-family: 'Comic Sans MS';font-weight: 500px;color: white;">Vardhaman Center for Cyber Security</h3></blink>
    </span>
</div>

<br>


</div> <!-- end of feature warpper -->
<div class="content_wrapper_mobile">

<div id="content_wrapper">
	
    <div id="content" class="content-mobile-home">
    	
        <h2>Welcome to <span>Vardhaman Center for Cyber Security</span></h2>
        
      <p>As a CORE, the Center aims to foster a core group of experts who can help disseminate knowledge about the ever-expanding frontiers of Cyber Security</p>
      <p>The mission of our center is to create technologies that efficiently extract useful information from any data without sacrificing privacy or security. We are currently working on security and privacy issues raised by data mining, privacy issues in social networks, security issues in databases, privacy issues in health care, and use of data mining for fraud detection and Nation’s security.
</p>
  
  <h2>Our <span>Objectives</span></h2>
  <p>&#9673 Explore new opportunities in interdisciplinary research<br>
&#9673 Engage women and minority communities in cyber security program <br>
&#9673 Build a strong cyber security workforce for government, industry and academia<br>
&#9673 Develop new working software prototypes, architectures, patents, papers and &nbsp &nbsp projects.<br>
&#9673 Technical excellence is our main objective. Grants are a way to achieve this excellence.</p>
       <!-- <div class="readmore"><a href="#">read more</a></div>-->
        
        <div class="cleaner_h40"></div>
        
        
        <div class="col_w265 float_l">
            <h3>Women Empowerement</h3>
            <div class="two_col_image">
                <a href="#"><img src="images/home/banner1.jpg" alt="image" width="249" height="105" /></a>            </div>
          <p>Former First Lady Michelle Obama greets students during a Room to Read event with First Lady Bun Rany of Cambodia in support of the Let Girls Learn initiative, at Hun Sen Prasat Bakong High School in Siem Reap, Cambodia, March 21, 2015.
Women's empowerment is the process in which women elaborate and recreate what it is that they can be, do, and accomplish in a circumstance that they previously were denied. Alternatively, it is the process for women to redefine gender roles that allows for them to acquire the ability to choose between known alternatives whom have otherwise been restricted from such an ability.</p>
            <div class="readmore"><a href="https://en.wikipedia.org/wiki/Women%27s_empowerment">read more</a></div>
        </div>
        
        <div class="col_w265 float_r">
            <h3>Ethical Hacking </h3>
            <div class="two_col_image">
                <a href="#"><img src="images/e1.jpg" alt="image" width="249" height="105" /></a> </div>
          <p>Our aim is to address the students’ apprehensions and anxieties regarding their career prospects in Ethical Hacking. It is a “One-Stop Workshop” for all manner of career related queries. We have lined up the country’s best names in the fields of education and skill-building to help the students along in their transition from students to professionals, and answer any career-related questions or doubts they may have, to their utmost satisfaction..</p>
            <div class="readmore"><a href="https://en.wikipedia.org/wiki/White_hat_(computer_security)">read more</a></div>
        </div>
    
    </div> <!-- end of content -->
    
    <div id="sidebar">
    	    	
        <h2>Latest <span>News</span></h2>
        <div id="scc">
    <?php
    $sql="SELECT * FROM tbl_news";
    $result_set=mysqli_query($connection,$sql);
    $i=1;
    while($row=mysqli_fetch_array($result_set)){
        ?>
        <div class="newsbox">
        	<div class="news_image"><span></span><img src="uploads/<?php echo $row['file'] ?>" alt="image" /></div>
            <p><?php echo $i.".".$row['news'];$i=$i+1; ?><br>(<?php echo $row['ndate'] ?> )</p>
            <div class="cleaner"></div><div class="readmore"><a href="<?php echo $row['link'] ?>"  target="_blank">read more</a></div>
        </div>
        <?php
    }
    ?>
    </div>
        <br>
        <div id="testimonial_newsletter">
            <div id="testimonial"> 
                <?php
    $sql="SELECT * FROM tbl_event";
    $result_set=mysqli_query($connection,$sql);
    $row=mysqli_fetch_array($result_set) ?>
                <h2>Upcoming Events</h2>
                <p><img class="open" src="images/home/open.png" alt="opening tag" /><b> <?php echo $row['title'] ?> </b> <?php echo $row['content'] ?> <img class="close" src="images/home/close.png" alt="closing tag" /></p>
                <cite class="float_r"><a href="#">Read More</a></cite>            </div>
            
            <div id="newsletter">
            	<h2>Newsletter</h2>
                <form action="upload" method="post">
                
                	<input type="email" id="newsletter_email" name="home_email"/>
                    <input type="submit" name="submit_home" value="Register" id="newsletter_subscribe" />
                </form>
            </div>
    	</div>
        
    </div> <!-- end of slider -->
    
    <div class="cleaner_h30"></div>
    
    <div id="latest_projects">
    
	<div id="latest_project_text">
            <h2>Latest Projects</h2>
            <p>Project engineering includes all parts of the design of manufacturing or processing facilities, either new or modifications to and expansions of existing facilities. A "project" consists of a coordinated series of activities or tasks performed by engineers, designers, drafters and others from one or more engineering disciplines or departments. </p>
        </div>
        <div id="asa">
            <?php 
            $sql="SELECT * FROM tbl_projects";
            $result_set=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_array($result_set)){
      ?>
        <div class="project_image_box margin_r15">
            <div class="project_image"><span></span>
            	<img src="images/home/DSC_1307.jpg" alt="image 1" />
            </div>
            <h5><a href="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></h5>
	  </div>
      <?php
  }
  ?>
        
	
	</div>

    </div>

	
	<div  class="cleaner"></div>
</div> 
<!-- end of content wrapper -->
</div>
<!-- +++++ Footer Section +++++ -->
    
    <!--footer -->

        <footer class="footer-distributed">
            <div class="footer-margin">

            <div class="footer-left">

                <!--<h3>Company<span>logo</span></h3>-->
                <img src="l2.png" style="width:220px;height: 100px;">

                <p class="footer-links">
                    ·
                    <a href="index">Home</a>
                    ·
                    <a href="about">About</a>
                    ·
                    <a href="publications">Publications</a>
                    ·
                    <a href="galley">Gallery</a>
                    ·
                    <a href="center_team">Team</a>
                    ·
                    <a href="contact">Contact</a>
                </p>

                <p class="footer-company-name">Vardhaman College of Engineering &copy; 2018</p>
                <p style="color:  #FFD700;font-size: 13px;">Design and Developed by : Anudeep Kadavergu</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Shamshabad,</span> Hyderabad, Telangana</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">support@company.com</a></p>
                </div>

                <div>
                    <i class="fa fa-handshake-o"></i>
                    <p><a href="www.netacad.in">Cisco</a></p>
                </div>

                <div>
                    <i class="fa fa-handshake-o"></i>
                    <p><a href="www.deltalabs.com">Delta Labs</a></p>
                </div>

            </div>


            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the Vardhaman Center for Cyber Security</span>
                    As a CORE, the Center aims to foster a core group of experts who can help disseminate knowledge about the ever-expanding frontiers of Cyber Security.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                    <a href="#"><i class="fa fa-github fa-2x"></i></a>

                </div>
            </div>

            </div>

        </footer>
        
</body>
</html>
