
<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration - iLaundromat</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.onvisible.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
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
						</header>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="index.html#team">About us</a></li>
							<li><a href="index.html#contact">Contact us</a></li>
							<li><a href="index.html#faqs">FAQs</a></li>
						</ul>
					</nav>

			</div>
			
		<!-- Main -->
			<div class="wrapper style1">

				<div class="container">
					<article id="main" class="special">
						<header>
							<h2>Registration</h2>
						</header>
                            <form action="placeanorder.php" id="formRegistration" method="POST">
                                <h3>First Name: <input type="text" name="fname" style="width: 300px;"/><br />
                                Last Name: <input type="text" name="lname" style="width: 300px;"/><br />
                                Address: <textarea rows="4" style="height:200px; width:300px" cols="10" name="address"></textarea><br />
                               

                                Phone No: <input type="text" name="phone" style="width: 300px;"/><br />
                                Email: <input type="email" name="email" style="width: 300px;"/><br />
                                Create Password: <input type="password" name="password" id="password" maxlength="10" size="15" style="width: 200px;"/><br />
                                Confirm Password: <input type="password" name="cfmPassword" id="cfmPassword" maxlength="10" size="15" style="width: 200px;"/><br />
	<label class="control-label" for="washingfrequency">Washing Frequency
                                </label>
		<div class="controls">
        	<select data-val="true" data-val-number="The field Wash_Freq_Id must be a number." data-val-required="The Wash_Freq_Id field is required." id="Wash_Freq_Id" name="wash_freq" style="width:270px;">
            	<option  value="1">Once a Week</option>
				<option value="2">Twice a week</option>
				<option value="4">Less than once a week</option>
				



			</select>
            <br/>
            Allergies: <textarea rows="4" style="height:200px; width:300px" cols="10" name="allergies"></textarea><br />
             <input type="checkbox" name="fragnance" value="true">Fragrance<br>
  <br/>
                
                  </div>

    <script>

                    $("#formRegistration").validate({
               rules: {
                   password: { 
                     required: true,
                        minlength: 6,
                        maxlength: 10,

                   } , 

                       cfmPassword: { 

                        equalTo: "#password",
                     minlength: 6,
                        maxlength: 10
                   }


               }

           });
  </script>
                                <input type="Submit" name="submit" value="Submit"/>
                                 <input type="reset" name="Reset" value="Reset" style="width:170px"/>
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