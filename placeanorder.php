
<!DOCTYPE HTML>
<html>

<head>
    <title>iLaundromat</title>
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
<!-- #Lakshmi Roja-->
<?php
require_once 'data.php';
$data = new BasicBlogData();
	 //login validation
	 //$data->logCheck($uname, $password);
	 
	 //Register validation
     $submittedForm = false;

     if (isset($email) && isset($password)) {
       $submittedForm = true;
       	 
	        if($fname == NULL ||$lname == NULL || $email == NULL || $password == NULL) {
			   echo $msg="<font color='red'>Please provide all the required fields</font>";
			}else{
						$data->storeData($fname, $lname, $address, $phone, $email, $password, $wash_freq, $allergies, $fragnance);
						}
			} 
//echo "<h4>Your account is successfully created</h4>";

?>
        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="myaccount.php" class="scrolly">My Account</a></li>
                <li><a href="place.html" class="scrolly">View Order</a></li>
                <li><a href="#" class="scrolly">Place an Order</a></li>
                <li><a href="logout.php" class="scrolly">Log out</a></li>
            </ul>
        </nav>
		

    </div>
<!-- Main -->

<div class="wrapper style1">

				<div class="container">
					<article id="main" class="special">
						<header>
							<h2>Place an Order</h2>
							
						</header>
                            <form action="registration_submit.jsp" id="formRegistration">
                               <h3>Pickup Date & Time: <br/> <br/>
							   
							   <?php 
//echo "<body>";

function pickup(){
date_default_timezone_set("America/New_York");

//	$d=strtotime("This Hour");
//	$d2=strtotime("+1 Hour");


//if ($current_time < strtotime('today 5:00pm') && $current_time > strtotime('today 7:00am')){
	echo "<select>";
for ($x = 0, $y = 1; $x <= 100 && $y <=100; $x++, $y++) {
	$d = strtotime("+$x Hour");
	$d2 = strtotime("+$y Hour");
if ($d2 > strtotime("today 7:00am") && $d < strtotime("today 10:00pm")){	
	echo "<option value=>";
	echo date("D M d, h a", $d) ." to ". date("h a", $d2). "<br>";
 echo "</option>";
}
else if($d2 > strtotime("tomorrow 7:00am") && $d < strtotime("tomorrow 10:00pm")){
	echo "<option value=>";
	echo date("D M d, h a", $d) ." to ". date("h a", $d2). "<br>";
 echo "</option>";	
}
}
	echo "</select>";
//
}
pickup();
?>
<br/>							   
							   
                                Delivery Date & Time: <br/> <br/>
								<?php
								function delivery(){
date_default_timezone_set("America/New_York");

	echo "<select>";
for ($x = 24, $y = 25; $x <= 150 && $y <=150; $x++, $y++) {
	$d = strtotime("+$x Hour");
	$d2 = strtotime("+$y Hour");
if ($d2 > strtotime("tomorrow 7:00am") && $d < strtotime("tomorrow 10:00pm")){	
	echo "<option value=>";
	echo date("D M d, h a", $d) ." to ". date("h a", $d2). "<br>";
 echo "</option>";
}

}
	echo "</select>";

}
delivery();

?>

<br> 
                                
                                <a href="#washpreferences" class="scrolly">Wash Preferences -:</a>
                               <div class="" id="washpreferences" >
                                <br/>
                                Type of Cloths:<select name="clothtype">
                                    <option value="color">Color</option>
                                    <option value="white">White</option>
                                    
  								</select><br/>
                                				
                                Water temprature: <select name="watertemprature">
                                    <option value="hot">Hot</option>
                                    <option value="warm">Warm</option>
                                    <option value="cold">Cold</option>

</select><br/>
 Dryer Temprature: <select name="dryertemprature">
                                    <option value="hot">Hot</option>
                                    <option value="warm">Warm</option>
                                    <option value="cold">Cold</option>
  								</select><br/>
                                
                                Select Service<input type="radio" name="WashandFold" value="washandfold">Wash & Fold <input type="radio" name="Iorning" value="iorning">Iorning<input type="radio" name="Both" value="both">Both
<br/><br/>
	</div>  


    
                                
                                <a href="place.html" class="button">Confirm Schedule</a></div>
                                </h3>
                            </form>
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