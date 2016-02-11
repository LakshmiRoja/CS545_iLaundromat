<!--#Lakshmi Roja>
<?php
require_once 'connections.php';
  
  class BasicBlogData
  {
    private $dbConnection;
	private $addData;
	
	
	public function storeData($fname, $lname, $address, $phone, $email, $password, $wash_freq, $allergies, $fragnance)
	{
	   session_start();
	  $this->addData->bind_param("sssisssss", $fname, $lname, $address, $phone, $email, $password, $wash_freq, $allergies, $fragnance);
	  $this->addData->execute();
	   $_SESSION['email']=$email;
	}
	public function updateData($fname, $lname, $address, $phone, $email, $password)
	{
		$this->addFormattedStatement = $this->dbConnection->prepare_statement("UPDATE `registration` SET `fname`='$fname', `lname`='$lname', `address`='$address', `phone`='$phone', `email`='$email', `password`='$password' WHERE `email`='$email'");
		//$this->addFormattedStatement->bind_param('ssssss', $id, $utitle, $ucontent, $ftitle, $fcontent, $uid);
        $this->addFormattedStatement->execute();	
	}
	public function getUserData($email)
	{
		return $this->dbConnection->send_sql("SELECT * FROM registration WHERE email = '$email'")->fetch_all(MYSQLI_ASSOC);
	}
	//Constructor
	public function __construct ()
        {
            $this->dbConnection = new DatabaseConnection();
            $this->addData = $this->dbConnection->prepare_statement("INSERT INTO `registration` (`fname`, `lname`, `address`, `phone`, `email`, `password`, `wash_freq`, `allergies`, `fragnance` ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
        }
		function __destruct () {
        if ($this->addData) {
            $this->addData->close();
        }
		}
		
  }
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
	if(isset($_POST['email'])){
       $email = $_POST['email'];
    }
	if(isset($_POST['password'])){
       $password = $_POST['password'];
    }
	if(isset($_POST['wash_freq'])){
       $wash_freq = $_POST['wash_freq'];
    }
	if(isset($_POST['allergies'])){
       $allergies = $_POST['allergies'];
    }
	if(isset($_POST['fragnance'])){
       $fragnance = $_POST['fragnance'];
    }


 //echo $_POST['fname'];
?>