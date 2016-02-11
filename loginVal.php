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

<!--#Lakshmi Roja-->        
<?php
if (!isset($_POST['submit'])) {
} else {
require_once 'connections.php';
 
  class BasicBlogData
  {
    private $dbConnection;
	private $addData;
	
	
	public function logCheck($email, $password)
	{
	  //echo $uname;
	 
			if($email=="" || $password=="") {
				echo "You did not provied all the required fields!";
				
			}else{
	  session_start();
      $message="";
	
	  $result = $this->dbConnection->send_sql("SELECT * FROM `registration` WHERE email='$email' AND password='$password'");
      //echo mysqli_num_rows($result);
      $row  = mysqli_fetch_array($result);
	  //echo $row['email'];
	 

       if(is_array($row)) {
        //if(mysqli_num_rows($result) > 0) {
        
		
$_SESSION['email']=$email;
echo "<h4> Login successfull! </h4>";
echo "<!-- Nav -->";
    echo "<nav id='nav'>";
            echo "<ul>";
            echo "<li><a href='myaccount.php' class='scrolly'>My Account</a></li>";
            echo "<li><a href='#' class='scrolly'>View Order</a></li>";
            echo "<li><a href='#' class='scrolly'>Place an Order</a></li>";
            echo "<li><a href='logout.php' class='scrolly'>Log out</a></li>";
            echo "</ul>";
     echo "</nav>";

    echo "</div>";
echo "<!-- Main -->";


echo "<div class='wrapper style1'>";

				echo "<div class='container'>";
				echo "<article id='main' class='special'>";;
						echo "<header>";
						echo "<h2>Place an Order</h2>";
						echo "</header>";
                        echo "<form action='registration_submit.jsp' id='formRegistration'>";
                            echo "<h3>Pickup Date & Time: <br/> <br/>";
							?>
							
<?php 

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

echo "<br>";
echo "<br>";


							

							
							
                            echo "Delivery Date & Time: <br/> <br/>";
?>							
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

echo "<br>";

							
							
                            echo "<a href='#washpreferences' class='scrolly'>Wash Preferences</a>";
                            echo "<div class='' id='washpreferences' ><br/>";
                                echo "Type of Cloths:<select name='clothtype'>";
                                    echo "<option value='color'>Color</option>";
                                    echo "<option value='white'>White</option>";
                                    
  								echo "</select><br/>";
                                				
                                echo "Water temprature: <select name='watertemprature'>";
                                 echo "<option value='hot'>Hot</option>";
                                 echo "<option value='warm'>Warm</option>";
                                 echo "<option value='cold'>Cold</option>";

echo "</select><br/>";
echo  "Dryer Temprature: <select name='dryertemprature'>";
                                echo "<option value='hot'>Hot</option>";
                                echo "<option value='warm'>Warm</option>";
                                echo "<option value='cold'>Cold</option>";
  								echo "</select><br/>";
                                
                             echo "Select Service<input type='radio' name='WashandFold' value='washandfold'>Wash & Fold <input type='radio' name='Iorning' value='iorning'>Iorning<input type='radio' name='Both' value='both'>Both<br/><br/>";
	echo "</div>";
	echo "<input type='Submit' name='Submit' value='Confirm Schedule'/>";
                             echo "</h3>";
                            echo "</form>";
						echo "</section>";
					echo "</article>";
				echo "</div>";

			echo "</div>";

//echo "<br /> <br /><a href='myaccount.php'> <b>click here </b> </a>";
//echo "<a href='logout.php'> <b> Logout </b> </a>";
echo "<br /> <br /> <br />";
        } else {
           $message = "Invalid Username or Password!";
		   echo $message;
		   echo "<br /> <br /><a href='register.html'> <b> Haven't registered yet? Click here to register! </b> </a>";
        }
		}
    


	  }
	
	
   	
	//Constructor
	public function __construct ()
        {
            $this->dbConnection = new DatabaseConnection();
                       
        }
		function __destruct () {
        if ($this->addData) {
            $this->addData->close();
        }
		}
  }
   	
	if(isset($_POST['email'])){
       $email = $_POST['email'];
    }
	if(isset($_POST['password'])){
       $password = $_POST['password'];
    }
	
	
	//echo $_POST['password'];
$data = new BasicBlogData();
	 //login validation
	 $data->logCheck($email, $password);

	 //echo "#####".$password; 
	 }
	 
?>
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
