<?php
 include_once 'dbconfig.php';
 
session_start();

if(isset($_POST['admin-btn'])){


$id = $_POST['adminid'];

$pass = $_POST['adminpass'];

if(($id=='admin')&&($pass=='admin')){
   $cookie_name = "admin";
    $cookie_value ="null" ;
    setcookie($cookie_name, $cookie_value);
    header('Location: admin');

}

$result = mysqli_query($connection,"select * from tbl_faculty where faculty_id='$id'");
 $row=mysqli_fetch_array($result);
 $pass1=$row['passwd'];
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
 $pass1 = encrypt_decrypt('decrypt', $pass1);

if((mysqli_num_rows($result)==1)&&($pass1==$pass))
{
    $_SESSION['adminid'] = $id;
    $chars = "abcdefghijkmnopqrstuvwxyz0123456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 25) { 
        $num = rand() % 35; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 
    $cookie_name = "user";
    $cookie_value = $pass;
    setcookie($cookie_name, $cookie_value); // 86400 = 1 day
if(isset($_COOKIE[$cookie_name])) { 
       $sql="INSERT INTO tbl_login(user,value) VALUES('$id','$pass')";
    mysqli_query($connection,$sql);
    header('Location: faculty');
    
}

    
}
else
  {
      ?>

    <script type="text/javascript">
      window.alert('INCORRECT USERNAME AND PASSWORD');</script>
<?php
    }
    }
    ?>
    <?php

if(isset($_POST['std-btn'])){

$id = $_POST['stdid'];
$pass = $_POST['stdpass'];

$result = mysqli_query($connection,"select * from tbl_faculty where faculty_id='$id' and passwd='$pass'");
if(mysqli_num_rows($result)==1)
{
    $_SESSION['stdid'] = $id;
    header('Location: index.php');
}
else
  {
      ?>

    <script type="text/javascript">
      window.alert('INCORRECT USERNAME AND PASSWORD');</script>
<?php
    }
    }
    ?>
    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vardhman Center for Cyber Security | Login</title>
<link rel="icon" type="image/jpg" href="icons/i11.png">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/login_js.js" type="text/javascript"></script>
</head>
<body>
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
        <h1>vardhaman</h1>

    <nav>
      <a href="index">HOME</a>
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
      <a href="index">HOME</a>
      <a href="about">ABOUT</a>
      <a href="center">CENTER</a>
      <a href="center_team">TEAM</a>
      <a href="projects">PROJECTS</a>
      <a href="gallery">GALLERY</a>
      <a href="login" class="selected">LOGIN</a>
        </div>
    </nav>
  </div>

</header><?php

    } ?>
    
    <br><br><br>
    <div class="login_button">
<div id="navigation" >
<button id="btn_fac"  class="button button1" >Faculty Login</button>
<button id="btn_std"  class="button button2" >Student Login</button>
</div>
</div>

<div class="login_menu">
  <div class="login_student">

<div class="box">
  <h1 >Student Login</h1>
  <div class="form">
  	<form action="login" method="post">
    <label>Username</label>
    <input type="text" placeholder="Enter your username" name="stdid">
    <label>Password</label>
    <input type="password" placeholder="Enter your password" name="stdpass"><br><br>
    <button name="std-btn">Login</button>
</form>
  </div>
  <!--<div class="social">
    <span>Login using</span>
    <a class="fb" href="#"><i class="icon ion-logo-facebook"></i></a>
    <a class="go" href="#"><i class="icon ion-logo-google"></i></a>
    <a class="gh" href="#"><i class="icon ion-logo-github"></i></a>
  </div>-->
</div>
</div>
<div class="login_faculty">

<div class="box">
  <h1>Faculty Login</h1>
  <div class="form">
    <form action="login" method="post">
    <label>Username</label>
    <input type="text" placeholder="Enter your username" name="adminid">
    <label>Password</label>
    <input type="password" placeholder="Enter your password" name="adminpass"><br><br>
    <!--<a href="#">Forgot password?</a>-->
    <button name="admin-btn">Login</button>
</form>
  </div>
  <!--<div class="social">
    <span>Login using</span>
    <a class="fb" href="#"><i class="icon ion-logo-facebook"></i></a>
    <a class="go" href="#"><i class="icon ion-logo-google"></i></a>
    <a class="gh" href="#"><i class="icon ion-logo-github"></i></a>
  </div>-->
</div>
</div>
</div>

<div  class="cleaner"></div>
</div> <!-- end of content wrapper -->

<!-- +++++ Footer Section +++++ -->
    
    <footer class="footer-distributed">
            <div class="footer-margin">

            <div class="footer-left">

                <!--<h3>Company<span>logo</span></h3>-->
                <img src="l2.png" style="width:220px;height: 100px;">

                <p class="footer-links">
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