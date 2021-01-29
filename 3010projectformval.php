<?php
	// define variables and set to empty values
	
	// Error variables
	$userNameErr = $passwordErr = $repasswordErr = $firstNameErr = "";
	$lastNameErr = $address1Err = $address2Err = $cityErr = $stateErr = $zipcodeErr = "";
	$emailErr = $genderErr = $maritalStatErr = $dobErr = $phoneNumErr = "";
	
	// Regular variables
	$userName = $password = $repassword = $firstName = "";
	$lastName = $address1 = $address2 = $city = $state = $zipcode = "";
	$email = $gender = $maritalStat = $dob = $phoneNum = "";
	
	// Holding password length
	$passwordLen = $repasswordLen = "";
	
	// Checking for a password match
	$passwordMatch = "";
	
	// Variables for splitting apart zipcode and phone numbers
	$firstZip = $secondZip = $firstPho = $secondPho = $thirdPho = "";
	
	$isValid = false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$isValid = true;
		
		// Username check
		$userName = clean_input($_POST["username"]);
		// Checking if empty
		if(empty($userName)) 
		{
			$userNameErr = "Username is required";
			$isValid = false;
		}
		// Checking for username that is too short
		else if(strlen($userName) < "6")
		{
			$userNameErr = "Username is too short";
			$isValid = false;
		}
		// Checking for username that is too long
		else if(strlen($userName) > "50")
		{
			$userNameErr = "Username is too long";
			$isValid = false;
		}
		
		// Password check
		$password = clean_input($_POST["password"]);
		// Checking if empty
		if(empty($password))
		{
			$passwordErr = "Password is required";
			$isValid = false;
		}
		else
		{
			// Checking for the required characters in a password
			if(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])/", $password))
			{
				
				$passwordErr = "Invaild Password! You need atleast 1 capital, 1 lowercase, 1 digit, and 1 special character";
				$isValid = false;
			}
			
			// Checking if the password is too short
			if(strlen($password) < "6")
			{
				$passwordLen = "Password is too short";
				$isValid = false;
			}
			
			// Checking if the password is too long
			else if(strlen($password) > "50")
			{
				$passwordLen = "Password is too long";
				$isValid = false;
			}
			
		}
		
		// Reentering password
		$repassword = clean_input($_POST["repassword"]);
		// Checking if empty
		if(empty($repassword))
		{
			$repasswordErr = "Please reenter your Password";
			$isValid = false;
		}
		else
		{
			// Checking for the required characters in a password
			if(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])/", $repassword))
			{
				
				$repasswordErr = "Invaild Password! You need atleast 1 capital, 1 lowercase, 1 digit, and 1 special character";
				$isValid = false;
			}
			
			// Checking if the password is too short
			if(strlen($repassword) < "6")
			{
				$repasswordLen = "Password is too short";
				$isValid = false;
			}
			// Checking if the password is too long
			else if(strlen($repassword) > "50")
			{
				$repasswordLen = "Password is too long";
				$isValid = false;
			}
			
			// Checking to make sure both passwords match
			if(strcmp($password, $repassword))
			{
				$passwordMatch = "The Passwords do not match";
				$isValid = false;
			}
			
		}
		
		// First Name
		$firstName = clean_input($_POST["firstname"]);
		// Checking if empty
		if(empty($firstName))
		{
			$firstNameErr = "First Name is required";
			$isValid = false;
		}
		// Checking if the first name is too long
		else if(strlen($firstName) > "50")
		{
			$firstNameErr = "First Name is too long";
			$isValid = false;
		}
		
		// Last Name
		$lastName = clean_input($_POST["lastname"]);
		// Checking if empty
		if(empty($lastName))
		{
			$lastNameErr = "Last Name is required";
			$isValid = false;
		}
		// Checking if the last name is too long
		else if(strlen($lastName) > "50")
		{
			$lastNameErr = "Last Name is too long";
			$isValid = false;
		}
		
		// Address 1
		$address1 = clean_input($_POST["address1"]);
		// Checking if empty
		if(empty($address1))
		{
			$address1Err = "Address is required";
			$isValid = false;
		}
		// Checking if address1 is too long
		else if(strlen($address1) > "100")
		{
			$address1Err = "Address1 is too long";
			$isValid = false;
		}
		
		// Look into Address 2
		$address2 = clean_input($_POST["address2"]);
		// Checking if address2 is too long
		if(strlen($address2) > "100")
		{
			$address2Err = "Address2 is too long";
			$isValid = false;
		}
		
		// City
		$city = clean_input($_POST["city"]);
		// Checking if empty
		if(empty($city))
		{
			$cityErr = "City is required";
			$isValid = false;
		}
		// Checking if city is too long
		else if(strlen($city) > "50")
		{
			$cityErr = "City is too long";
			$isValid = false;
		}

		// State
		$state = clean_input($_POST["state"]);
		// Checking if empty
		if($state == "")
		{
			$stateErr = "Please select a State";
			$isValid = false;
		}
		
		// Zipcode
		$zipcode = clean_input($_POST["zipcode"]);
		// Checking if empty
		if(empty($zipcode))
		{
			$zipcodeErr = "Zipcode is required";
			$isValid = false;
		}
		else
		{
			// Getting rid of non-digit charaters
			$zipcode = preg_replace("/[^0-9]/", "", $zipcode);
			
			// Checking if zipcode is the right length
			if(strlen($zipcode) != "5" && strlen($zipcode) != "9")
			{
				$zipcodeErr = "Zipcode is invalid";
				$isValid = false;
			}
			// Adding a '-' if zipcode is 9 digits long
			else if(strlen($zipcode) == "9")
			{
				$firstZip = substr($zipcode, "0", "5");
				$secondZip = substr($zipcode, "5", "4");
				echo $firstZip;
				echo $secondZip;
				$zipcode = $firstZip . "-" . $secondZip;
			}
		}
		
		// E-mail
		$email = clean_input($_POST["email"]);
		// Checking if empty
		if(empty($email))
		{
			$emailErr = "E-mail is required";
			$isValid = false;
		}
		else {
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				$isValid = false;
			}
		}
		
		// Gender
		if(isset($_POST["gender"]))
		{
			$gender = clean_input($_POST["gender"]);
			if (empty($_POST["gender"])) 
			{
				$genderErr = "Gender is required";
				$isValid = false;
			}
		} 
		else
		{
			$genderErr = "Gender is required";
			$isValid = false;
		}
		
		// Marital Status
		if(isset($_POST["maritalstat"]))
		{
			$maritalStat = clean_input($_POST["maritalstat"]);
			if (empty($_POST["maritalstat"])) 
			{
				$maritalStatErr = "Marital Status is required";
				$isValid = false;
			}
		} 
		else
		{
			$maritalStatErr = "Marital Status is required";
			$isValid = false;
		}
	
		// Date Of Birth
		$dob = clean_input($_POST["dob"]);
		// Checking if empty
		if(empty($dob))
		{
			$dobErr = "Date of Birth is required";
			$isValid = false;
		}
		
		// Phone Number
		$phoneNum = clean_input($_POST["phonenum"]);
		// Checking if empty
		if(empty($phoneNum))
		{
			$phoneNumErr = "Phone Number is required";
			$isValid = false;
		}
		else
		{
			// Getting rid of non-digit charaters
			$phoneNum = preg_replace("/[^0-9]/", "", $phoneNum);
			
			// Checking for valid phone number length
			if(strlen($phoneNum) != "10")
			{
				$phoneNumErr = "Phone Number is invalid";
				$isValid = false;
			}
			// Formatting phone number
			else 
			{
				$firstPho = substr($phoneNum, "0", "3");
				$secondPho = substr($phoneNum, "3", "3");
				$thirdPho = substr($phoneNum, "6", "4");
				$phoneNum = $firstPho . "-" . $secondPho . "-" . $thirdPho;
			}
		}
	}

		
	// clean_input function
	function clean_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>
	