<?php
class Account
{

	protected $ID = 0;
	protected $FeatureImage = "";
	protected $Name = "";
	protected $Email = "";
	protected $LoggedAsThis = false;
	protected $Salt = "";

	/*
	 *5 Setter, Getter, Adder, Remover functions
	 * function setPass($oldPass, $newPass);
	 * function setProfileImage($FileIn);
	 * function getDetails();					//Returns basic details such as name, username in an ASSOC array
	 * function setName($newName);
	 * function setUserName($newUserName);
	 * function setID($idToSet);
	 * function getEmail();
	 * function addEmail($EmailToAdd);
	 * function removeEmail($EmailToRemove);
	 * function removePhone($phoneNumber);
	

	 * IO Checker functions
	 * static function checkPass($pass);
	 * static function checkEmail($email);
	 * static function escapeIO($input);
	 * static function checkPhone($ext, $num);
	 * static function checkBday($bdayString);


	 * Static account object details initiator functions
	 * static function createObfromDetails($SQLob);
	 * static function fromID($id);
	 * static function loginAsUser($userIn, $passw);
	*/

	function getID()
	{
        return $this->ID;
	}
	function __construct($logThis = false, $SQLob)
	{
		$this->LoggedAsThis = $logThis;
		$this->Name = $SQLob['fullName'];
        $this->AccountType = $SQLob['type'];
        $this->ID = $SQLob['userId'];
        $this->Email = $SQLob['userEmail'];
        $this->FeatureImage = $SQLob['userPro'];
	}

	static function fromID($id, $logged)
	{
		$QuerySent = "SELECT * from users where userId=" . $id;
		$res = $GLOBALS['dbOB']->getV($QuerySent);
		if(!$res[0])
		{
			error_log("Error l435: " . $QuerySent);
			return "Error l435";
		}
		$reqAcc = $res[1];
		$reqOb = self::createObfromDetails($reqAcc, $logged);
		return $reqOb;
	}

	static function createObfromDetails($SQLob, $logged)
	{
		$ob = new self($logged, $SQLob);
		return $ob;
	}
	public static function loginAsUser($userIn, $passw)
	{
		//echo "Login Started";
		//If $_SESSION variable not available
		if(!isset($_SESSION))
		{
			session_set_cookie_params(604800, "/");
			session_start();
		}

		//If already logged in
		if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true)
			return "Error l415";
		if(!filter_var($userIn, FILTER_VALIDATE_EMAIL))
		    return "Error l820";
		$quToRun = "SELECT * FROM users WHERE userEmail='" . $userIn . "'";
		$user = $GLOBALS['dbOB']->getV($quToRun);
		//echo $quToRun;
		if(count($user) >= 3) // Throw an Error
		{
			$elog = "";
			foreach ($user as $key => $value) {
				$elog = $elog . $key . ":<br>";
				if(is_array($value))
				{
					foreach ($value as $key1 => $value1) {
						$elog = $elog . "$key1 : $value1 <br>";
					}
				}
				else
					$elog = $elog . $value . "<br>";
			}
			error_log("Error l425: " . $quToRun . " : " . $elog);
			return "\nError l425: " . $quToRun . "\n";
		}
		if($user[0] === false)
		{
			error_log("Error l445: " . $quToRun);
			return "Error l445";
		}
		$hashedPassEntered = hash("sha256", $user[1]['userSalt'] . $passw);
		for ($i=0; $i < 1000; $i++) { 
			$hashedPassEntered = hash("sha256", $hashedPassEntered);
		}
		if($hashedPassEntered == $user[1]['userPass'])
		{
			$_SESSION['loggedIn'] = true;
			$_SESSION['userOB'] = self::fromID($user[1]["userId"], true);
			return "Success";
		}
		else
		{
			if(!isset($_SESSION['failedLogins']))
				$_SESSION['failedLogins'] = 1;
			else
				$_SESSION['failedLogins'] = $_SESSION['failedLogins'] + 1;
			return "Wrong Email/Username/Password";
		}
	}

	// Function SET 1


	function setPass($oldPass, $newPass)
	{
		$retArr = array();
		if(!$this->LoggedAsThis)
		{
			return false;
		}
		$query = "SELECT * FROM users where userId = ? ;" ;

		//Prepare Query
		if ($stmt = $GLOBALS['dbOB']->conne->prepare($query))
		{
			$stmt->bind_param('i', $this->getId());
			$stmt->execute();
            $res = $stmt->get_result();
            while($row = $res->fetch_array(MYSQLI_ASSOC)) {
                array_push($retArr, $row);
            }
		}
		else
		{
			$retArr == array(false);
		}
		if(count($retArr) >= 3)
		{
			error_log("Error p425\n BoundQuery: " . $query . "\nVar: " . $this->ID);
            echo ("  Error p425\n BoundQuery: " . $query . "\nVar: " . $this->ID);
			return "Error p425";			
		}
		elseif ($retArr[0] === false) {
			error_log("Error p445:\n BoundQuery: " . $query . "\nVar: " . $this->ID);
            echo ("Error p445:\n BoundQuery: " . $query . "\nVar: " . $this->ID);
			return "Error p445";
		}
        $hashedPassEntered = hash("sha256", $retArr[0]["userSalt"] . $oldPass);
        for ($i=0; $i < 1000; $i++) {
            $hashedPassEntered = hash("sha256", $hashedPassEntered);
        }
		if ( $hashedPassEntered != $retArr[0]["userPass"]) {
			return "Wrong Password";
		}			
		$newSalt = md5(uniqid(rand(), true));
		$newPassSalt = hash("sha256", $newSalt . $newPass);
		for ($i=0; $i < 1000; $i++) {
            $newPassSalt = hash("sha256", $newPassSalt);
        }
		$updatePassQ = "UPDATE users SET userPass='" . $newPassSalt . "', userSalt='" . $newSalt . "' WHERE userId='" . $this->ID . "' ;";
		$updatePassQ = "UPDATE users SET userPass=?, userSalt=? WHERE userId=? ;";
		$result = array();
		if ($stmt = $GLOBALS['dbOB']->Conn()->prepare($updatePassQ)) 
		{
			$stmt->bind_param('ssi', $newPassSalt, $newSalt, $this->getId());
			$stmt->execute();
			$result = array(true);
		}
		else
		{
			$result = array(false);
		}
		if(!$result[0])
		{
			error_log("Error p455: " . $updatePassQ . " ID= " . $this->ID);
            echo "Error p455: " . $updatePassQ . " ID= " . $this->ID;
			return "Error p455";
		}
		return true;			
	}

	function getProfileImage()
	{
		if(!$this->LoggedAsThis)
		{
			return false;
		}
		$sql2Run = "SELECT userPro FROM users WHERE userId=" . $this->ID . " ;";
		$ranSQL = $GLOBALS['dbOB']->getV($sql2Run);
		return $ranSQL[1]['userPro'];
	}
}