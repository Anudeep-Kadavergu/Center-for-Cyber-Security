<?php
include_once 'dbconfig.php';
if(!isset($_COOKIE['user'])){
    $cookie_name = "user";
    $cookie_value = 'null';
    setcookie($cookie_name, $cookie_value);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vardhman Center for Cyber Security | Mous</title>
<link rel="icon" type="image/jpg" href="i11.png">
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    
<div class="area" style="height:100%"><nav class="main-menu" style="height:100%">
            <ul>
                <li class="has-subnav ">
                    <a href="http://ccsvardhaman.tk">
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
                <li class="has-subnav act">
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
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documents
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="logout">
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
            <a href="http://ccsvardhaman.tk">HOME</a>
            <a href="about">ABOUT</a>
            <a href="center">CENTER</a>
            <a href="center_team">TEAM</a>
            <a href="projects">PROJECTS</a>
            <a href="gallery">GALLERY</a>


        <a href="faculty" style="padding: 0 12px"><div class="header-user-menu">
            <img src="images/faculty/raman.jpg" alt="User Image"/>

            <ul style="margin-top: 5px;">
                <li><a href="logout" class="highlight">Logout</a></li>
            </ul>
        </div>
    </a>
        </nav>

    </div>

</header>
    <?php }
    else{
        ?><header class="header-basic-light">

    <div class="header-limiter">

        <h1 style="margin-left: 11%;margin-top: -20px"><img style="width: 150px;height: 70px;" src="l2.png" alt="css templates"/></h1>
        

        <nav>
            <div id="header">
            <a href="http://ccsvardhaman.tk">HOME</a>
            <a href="about">ABOUT</a>
            <a href="center">CENTER</a>
            <a href="center_team">TEAM</a>
            <a href="projects">PROJECTS</a>
            <a href="gallery">GALLERY</a>
            <a href="login">LOGIN</a>
        </div>
        </nav>
    </div>

</header><?php

    } ?><br><br>
    
<div id="content_wrapper" style="background: white;">

<br>

<div id="feature" class="content-mobile1">

         <h2>Center<span> MoU's</span></h2>
        <a href="https://www.netacad.com/"><div id="mos_right" style="float: left;">
            <div id="mos_image" ><span></span>
                <img src="images/home/s1.png" alt="image" >
            </div>
             </div></a>
        
        <a href="https://www.deltalaboratories.com/"><div id="mos_right">
        
            <div id="mos_image"><span></span>
                    <img src="images/home/s2.png" alt="image" />
            </div>
    
        </div></a>
    
    </div> <!-- end of feature -->
</div> <!-- end of feature warpper -->
<div class="cleaner_h30"></div>

<!-- +++++ Footer Section +++++ -->
    
   <!--footer -->

        <footer class="footer-distributed">
            <div class="footer-margin">

            <div class="footer-left">

                <!--<h3>Company<span>logo</span></h3>-->
                <img src="l2.png" style="width:220px;height: 100px;">

                <p class="footer-links">
                    <a href="http://ccsvardhaman.tk">Home</a>
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
                    <p><a href="mailto:support@company.com">Cisco</a></p>
                </div>

                <div>
                    <i class="fa fa-handshake-o"></i>
                    <p><a href="mailto:support@company.com">Delta Labs</a></p>
                </div>

            </div>


            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the center for cyber security</span>
                    As a CORE, the Center aims to foster a core group of experts who can help disseminate knowledge about the ever-expanding frontiers of Cyber Security.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>
            </div>

            </div>

        </footer>
</body>
</html>