function checkUsername () {
	var usernameEle =
		document.getElementById("username");
				
	if (usernameEle) {
		var usernameVal = usernameEle.value;
				
		if(usernameVal.length < 6) {
			alert('Your username needs to a length of 6\n');
			
			return false;
		}
		
		return true;
	}
}
						
function checkPassword () {
	var passwordEle =
		document.getElementById("password");
				
	if (passwordEle) {
		var passwordVal = passwordEle.value;
									
		var index = passwordVal.search(
			(/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])/));
					
		if(passwordVal.length < 8) {
			alert('Your password needs to a length of 8\n');
		}
					
		if (index > -1) {
			var pEle = document.getElementById("msg");
			if (pEle) { 
				pEle.innerHTML = "Valid Password!";
				pEle.classList.remove("invalid");
				pEle.classList.add("valid");
			}
			
			return true;
		}
		else {
			var pEle = document.getElementById("msg");
			if (pEle) { 
				pEle.innerHTML = "Invalid Password!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
			}
			
			return false;
		}
	}
}
			
function checkRePassword () {
	var rePasswordEle =
		document.getElementById("repassword");
			
	var passwordEle =
		document.getElementById("password");
			
				
	if (rePasswordEle) {
		var rePasswordVal = rePasswordEle.value;
					
		var passwordVal = passwordEle.value;
					
		var index = rePasswordVal.search(
			(/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])/));
					
		if(rePasswordVal.length < 8) {
			alert('Your password needs to a length of 8\n');
		}
					
		if (index > -1) {
			var pEle = document.getElementById("rePassWordMes");
			if (pEle) { 
				pEle.innerHTML = "Valid Password!";
				pEle.classList.remove("invalid");
				pEle.classList.add("valid");
			}
		}
		else {
			var pEle = document.getElementById("rePassWordMes");
			if (pEle) { 
				pEle.innerHTML = "Invalid Password!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
			}
		}
		if(rePasswordVal != passwordVal){
			var pEle = document.getElementById("passwordMat");
			if (pEle) { 
				pEle.innerHTML = "Passwords don't match";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
			}
			
			return false;
		}
		else{
			var pEle = document.getElementById("passwordMat");
			if (pEle) { 
				pEle.innerHTML = "Passwords match";
				pEle.classList.remove("invalid");
				pEle.classList.add("valid");
			}
			
			return true;
		}
	}			
}

function checkEmail() {
	
	var emailEle = 
		document.getElementById("email");
			
	if (emailEle) {
		var emailValue = emailEle.value;
			
		var index = emailValue.search(
			/\w+@\w+\.\w+/
			);
					
		if (index > -1) {
			var pEle = document.getElementById("emailMsg");
			if (pEle) { 
				pEle.innerHTML = "Valid email!";
				pEle.classList.remove("invalid");
				pEle.classList.add("valid");
				
			}
			return true;
		} 
		else {
			var pEle = document.getElementById("emailMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid email!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
				
			}
			return false;

		}
	}
}
			
function checkPhoneNum(){
	var phonenumEle = 
		document.getElementById("phonenum");
				
	if(phonenumEle){					
		var phonenumValue = phonenumEle.value;
					
		var phonenumCleaned = phonenumValue.replace(/\D/g, "");
					
		var phonenumMatch = phonenumValue.match(/\d/g);
					
		if(phonenumMatch.length===10){
			var pEle = document.getElementById("phoneMsg");
					
			var firstPart = phonenumCleaned.substr(0, 3);
			var secondPart = phonenumCleaned.substr(3, 3);
			var thirdPart = phonenumCleaned.substr(6, 4);
						
			var newNum = firstPart + "-" + secondPart + "-" + thirdPart;
						
			phonenumEle.value = newNum;
						
			if (pEle) { 
				pEle.innerHTML = "";
				pEle.classList.remove("invalid");
				
			}	
			
			return true;
		}
		else {
			var pEle = document.getElementById("phoneMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid phone number!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
			}
		
			return false;
		}
	}
}

function checkZipcode(){
	var zipcodeEle = 
		document.getElementById("zipcode");
				
	if(zipcodeEle){					
		var zipcodeValue = zipcodeEle.value;
					
		var zipcodeCleaned = zipcodeValue.replace(/\D/g, "");
					
		var zipcodeMatch = zipcodeValue.match(/\d/g);
					
		if(zipcodeMatch.length===5){
			var pEle = document.getElementById("zipMsg");
				
			
			zipcodeEle.value = zipcodeCleaned;
						
			if (pEle) { 
				pEle.innerHTML = "";
				pEle.classList.remove("invalid");
				
			}	
			
			return true;
		}
		else if(zipcodeMatch.length===9){
			var pEle = document.getElementById("zipMsg");
					
			var firstPart = zipcodeCleaned.substr(0, 5);
			var secondPart = zipcodeCleaned.substr(5, 4);
					
			var newNum = firstPart + "-" + secondPart;
						
			zipcodeEle.value = newNum;
						
			if (pEle) { 
				pEle.innerHTML = "";
				pEle.classList.remove("invalid");	
			}
			
			return true;
		}
		else {
			var pEle = document.getElementById("zipMsg");
			if (pEle) { 
				pEle.innerHTML = "Invalid Zipcode!";
				pEle.classList.remove("valid");
				pEle.classList.add("invalid");
			}
			
			return false;
		}
	}
}

function formVal() {
	if(!checkUsername())
	{
		return false;
	}
	
	else if(!checkPassword())
	{
		return false;
	}
	
	else if(!checkRePassword())
	{
		return false;
	}
	
	else if(!checkEmail())
	{
		return false;
	}
	
	else if(!checkPhoneNum())
	{
		return false;
	}
	
	else if(!checkZipcode())
	{
		return false;
	}
	
	return true;
	
}