	


<!DOCTYPE HTML>
<html>

<head>
    <title>iLaundomat</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.onvisible.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
    </script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <link rel="stylesheet" href="css/style-noscript.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body class="no-sidebar">

    <!-- Header -->
    <div id="header">

        <!-- Inner -->
        <div class="inner">
            <header>
                <h1><img src="images/logo_ilaundro.png" /></h1>
				<h2><strong><font color="DarkBlue">iLAUNDROMAT</font></strong></h2>
                <hr />
            </header>
           
        </div>
<!--#Lakshmi Roja-->
<?php 
if(!empty($_POST["fname"])){
session_start();
if(isset($_SESSION['email'])) {
$email= $_SESSION['email'];
if(isset($_POST['fname'])){
       $fname = $_POST['fname'];
    }
	if(isset($_POST['lname'])){
       $lname = $_POST['lname'];
    }
	if(isset($_POST['address'])){
       $address = $_POST['address'];
    }
	if(isset($_POST['phone'])){
       $phone = $_POST['phone'];
    }
	
	if(isset($_POST['password'])){
       $password = $_POST['password'];
    }
	                     require_once 'data.php';
						 echo "Saved Successfully";
						 $data = new BasicBlogData();
						 $data->updateData($fname, $lname, $address, $phone, $email, $password);
						 }
						 }else{
session_start();
if(isset($_SESSION['email'])) {
$email= $_SESSION['email'];

require_once 'data.php';
$data = new BasicBlogData();
$uid = null;
echo "Welcome "."$email";
        echo "<!-- Nav -->";
        echo "<nav id='nav'>";
            echo "<ul>";
                echo "<li><a href='#' class='scrolly'>My Account</a></li>";
                echo "<li><a href='#' class='scrolly'>View Order</a></li>";
                echo "<li><a href='placeanorder.php' class='scrolly'>Place an Order</a></li>";
                echo "<li><a href='logout.php' class='scrolly'>Log out</a></li>";
            echo "</ul>";
        echo "</nav>";

    echo "</div>";
echo "<!-- Main -->";

			echo "<div class='wrapper style1'>";

				echo "<div class='container'>";
					echo "<article id='main' class='special'>";
						echo "<header>";
							echo "<h2>My Account</h2>";
                           

						echo "</header>";
						
//$data -> getUserId($email); 
foreach($data -> getUserData($email) as $record) {
                            $firstName = $record['fname'];
							$lastName = $record['lname'];
						    $address = $record['address'];
							$phone = $record['phone'];
							$email = $record['email'];
							$pass = $record['password'];
                             echo "<form action='' id='formRegistration' method='POST'>";
								
                                echo "<h3>First Name: <input type='text' name='fname' value='$firstName' style='width: 300px;'/><br />";
                                echo "Last Name: <input type='text' name='lname' value='$lastName' style='width: 300px;'/><br />";
                                echo "Address: <textarea rows='4' name='address' style='height:200px; width:300px' cols='10' >$address</textarea><br />";
                                echo "Phone No: <input type='text' name='phone'  value='$phone' style='width: 300px;'/><br />";
                                echo "Email: <input type='email' name='email' value='$email' style='width: 300px;'/><br />";
                                
               //echo "<a href='#change-password' class='scrolly'>Change Password</a> <br/><br/><br/>";
			//echo "<div class='' id='change-password' >";
             

                echo "Password<sup>* </sup>: <input type='password' value='$pass' name='password' id='password'><br/>";
                //echo "New Password<sup>* </sup>: <input type='password' name='Newpassword' id='password'><br/>";             
                echo "<input type='Submit' name='Submit' value='Save My Changes'/>";
                echo "<input type='reset' value='Reset' name='action' sclass='btn prev-step'  />";
                        
                echo "</h3>";
                echo "</form>";
				//echo "<a href='logout.php'> <b> Logout </b> </a>";
				}
				}
			
else 
	echo "<br /> <h2> <b> You need to login first! </b> </h2>";
	}
?>
				</section>
				</article>
				</div>
				</div>
                
    
<!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="12u">

                    <!-- Contact -->
                    <section class="contact">
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                           
                        </ul>
                    </section>

                    <!-- Copyright -->
                    <div class="copyright">
                        <ul class="menu">
                            <li>&copy; iLaundromat. All rights reserved 2015.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>
