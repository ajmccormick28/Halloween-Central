<!DOCTYPE html>
<?php
	include '3010projectconnectioninfo.php';
?>
<html lang="en">
	<head>
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS Style Sheet Project1 -->
		<link rel="stylesheet" type="text/css" href="./css/3010projectstyles.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Google Font Eater -->
		<link href='https://fonts.googleapis.com/css?family=Eater' rel='stylesheet'>
		<!-- Google Font Tillana -->
		<link href='https://fonts.googleapis.com/css?family=Tillana' rel='stylesheet'>
		<!-- JavaScript File -->
		<script src="./js/3010project.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Halloween Central</title>
	</head>
	
	<body>
		<?php
			include '3010projectselectuserdata.php';
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12" id="header">
					<!-- Title Picture -->
					<img src="./pics/hallowwoodghost.PNG" alt="Halloween Central" id="titlepic" class="center"> 
					<h1 id="title">Registration</h1>
				</div>
			</div>
			<div class="row">
			
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3" id="menu">
					<ul>
						<!-- Home Button -->
						<li><a href="3010projecthome.html" target="_self" class="static">Home</a></li>
						<!-- Registration Button -->
						<li><a href="3010projectregistration.php" target="_self" class="active">Registration</a></li>
						<!-- Animations Button -->
						<li><a href="3010projectanimations.html" target="_self" class="static">Animations</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9" id="content">				
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="center">
								<h4 class="font">Your registration has been submitted successfully!</h4>
								<!-- form -->
								<form method="post"  
								action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
									<!-- Username -->
									<label for="username" class="font">Username:</label>
									<br/>
									<input disabled id="username" name="username" type="text" 
										value="<?php echo $userName; ?>"/>
									<br/>
									<!-- Password -->
									<label for="password" class="font">Password:</label>
									<br/>
									<input disabled id="password" name="password"
									type="text" value="<?php echo $password; ?>"/>
									<div id="msg"></div>
									<br/>
									<!-- Repeat Password: Redisplays password -->
									<label for="repassword" class="font">Repeat Password:</label>
									<br/>
									<input disabled id="repassword" name="repassword"
										type="text" value="<?php echo $password; ?>"/>
									<br/>
									<!-- First Name -->
									<label for="firstname" class="font">First Name:</label>
									<br/>
									<input disabled id="firstname" name="firstname" type="text" 
										value="<?php echo $firstName; ?>"/>
									<br/>
									<!-- Last Name -->
									<label for="lastname" class="font">Last Name:</label>
									<br/>
									<input disabled id="lastname" name="lastname" type="text" 									
										value="<?php echo $lastName; ?>"/>									
									<br/>
									<!-- Address 1 -->
									<label for="address1" class="font">Address 1:</label>
									<br/>
									<input disabled id="address1" name="address1" type="text"  										
										value="<?php echo $address1; ?>"/>										
									<br/>
									<label for="address2" class="font">Address 2:</label>
									<br/>
									<!-- Address 2 -->
									<input disabled id="address2" name="address2" type="text"  									
										value="<?php echo $address2; ?>"/>										
									<br/>
									<!-- City -->
									<label for="city" class="font">City:</label>
									<br/>
									<input disabled id="city" name="city" type="text"  																				
										value="<?php echo $city; ?>"/>									
									<br/>
									<!-- State -->
									<label for="State" class="font">State:</label>
									<br/>									
									<select disabled name="state" required="required"
									value="<?php echo $state; ?>"/>
										<option value="">Please Select</option>
										<option value="AL" <?php if ($state=="AL"){echo "selected";}?>>AL</option>
										<option value="AK" <?php if ($state=="AK"){echo "selected";}?>>AK</option>
										<option value="AZ" <?php if ($state=="AZ"){echo "selected";}?>>AZ</option>
										<option value="AR" <?php if ($state=="AR"){echo "selected";}?>>AR</option>
										<option value="CA" <?php if ($state=="CA"){echo "selected";}?>>CA</option>
										<option value="CO" <?php if ($state=="CO"){echo "selected";}?>>CO</option>
										<option value="CT" <?php if ($state=="CT"){echo "selected";}?>>CT</option>
										<option value="DE" <?php if ($state=="DE"){echo "selected";}?>>DE</option>
										<option value="FL" <?php if ($state=="FL"){echo "selected";}?>>FL</option>
										<option value="GA" <?php if ($state=="GA"){echo "selected";}?>>GA</option>
										<option value="HI" <?php if ($state=="HI"){echo "selected";}?>>HI</option>
										<option value="ID" <?php if ($state=="ID"){echo "selected";}?>>ID</option>
										<option value="IL" <?php if ($state=="IL"){echo "selected";}?>>IL</option>
										<option value="IN" <?php if ($state=="IN"){echo "selected";}?>>IN</option>
										<option value="IA" <?php if ($state=="IA"){echo "selected";}?>>IA</option>
										<option value="KS" <?php if ($state=="KS"){echo "selected";}?>>KS</option>
										<option value="KY" <?php if ($state=="KY"){echo "selected";}?>>KY</option>
										<option value="LA" <?php if ($state=="LA"){echo "selected";}?>>LA</option>
										<option value="ME" <?php if ($state=="ME"){echo "selected";}?>>ME</option>
										<option value="MD" <?php if ($state=="MD"){echo "selected";}?>>MD</option>
										<option value="MA" <?php if ($state=="MA"){echo "selected";}?>>MA</option>
										<option value="MI" <?php if ($state=="MI"){echo "selected";}?>>MI</option>
										<option value="MN" <?php if ($state=="MN"){echo "selected";}?>>MN</option>
										<option value="MS" <?php if ($state=="MS"){echo "selected";}?>>MS</option>
										<option value="MO" <?php if ($state=="MO"){echo "selected";}?>>MO</option>
										<option value="MT" <?php if ($state=="MT"){echo "selected";}?>>MT</option>
										<option value="NE" <?php if ($state=="NE"){echo "selected";}?>>NE</option>
										<option value="NV" <?php if ($state=="NV"){echo "selected";}?>>NV</option>
										<option value="NH" <?php if ($state=="NH"){echo "selected";}?>>NH</option>
										<option value="NJ" <?php if ($state=="NJ"){echo "selected";}?>>NJ</option>
										<option value="NM" <?php if ($state=="NM"){echo "selected";}?>>NM</option>
										<option value="NY" <?php if ($state=="NY"){echo "selected";}?>>NY</option>
										<option value="NC" <?php if ($state=="NC"){echo "selected";}?>>NC</option>
										<option value="ND" <?php if ($state=="ND"){echo "selected";}?>>ND</option>
										<option value="OH" <?php if ($state=="OH"){echo "selected";}?>>OH</option>
										<option value="OK" <?php if ($state=="OK"){echo "selected";}?>>OK</option>
										<option value="OR" <?php if ($state=="OR"){echo "selected";}?>>OR</option>
										<option value="PA" <?php if ($state=="PA"){echo "selected";}?>>PA</option>
										<option value="RI" <?php if ($state=="RI"){echo "selected";}?>>RI</option>
										<option value="SC" <?php if ($state=="SC"){echo "selected";}?>>SC</option>
										<option value="SD" <?php if ($state=="SD"){echo "selected";}?>>SD</option>
										<option value="TN" <?php if ($state=="TN"){echo "selected";}?>>TN</option>
										<option value="TX" <?php if ($state=="TX"){echo "selected";}?>>TX</option>
										<option value="UT" <?php if ($state=="UT"){echo "selected";}?>>UT</option>
										<option value="VT" <?php if ($state=="VT"){echo "selected";}?>>VT</option>
										<option value="VA" <?php if ($state=="VA"){echo "selected";}?>>VA</option>
										<option value="WA" <?php if ($state=="WA"){echo "selected";}?>>WA</option>
										<option value="WV" <?php if ($state=="WV"){echo "selected";}?>>WV</option>
										<option value="WI" <?php if ($state=="WI"){echo "selected";}?>>WI</option>
										<option value="WY" <?php if ($state=="WY"){echo "selected";}?>>WY</option>
										</select>									
									</br>
									</br>	
							</div>	
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="center">
									<!-- Zipcode -->
									<label for="zipcode" class="font">Zipcode:</label>
									<br/>
									<input disabled id="zipcode" name="zipcode" type="text" 									
										value="<?php echo $zipcode; ?>"/>									
									<br/>
									<!-- E-mail removed onblur="checkEmail(this);"-->
									<label for="email" class="font">E-mail:</label>
									<br/>
									<input disabled id="email" name="email" type="email" 									
										value="<?php echo $email; ?>"/>							
									<br/>
									<!-- Radio for Gender -->
									<label class="font">Gender:</label>
									<br/>
									<!-- Male -->
									<input disabled type="radio" name="gender" 
										<?php if ($gender=="male"){echo "checked";}?>
										 value="male" id="maleGender"
										 />
									<label for="maleGender" class="font">Male</label>
									<br/>
									<!-- Female -->
									<input disabled type="radio" name="gender" 
										<?php if ($gender=="female"){echo "checked";}?>
										value="female" id="femaleGender"
										/> 
									<label for="femaleGender" class="font">Female</label>
									<br/>
									<!-- Other Gender -->
									<input disabled type="radio" name="gender" 
										<?php if ($gender=="other"){echo "checked";}?>
										value="other" id="otherGender"
										/> 
									<label for="otherGender" class="font">Other</label>								
									<br/>
									<!-- Radio for Martial Status -->
									<label class="font">Martital Status:</label>
									<br/>
									<!-- Single -->
									<input disabled type="radio" name="maritalstat" 
										<?php if ($maritalStat=="single"){echo "checked";}?>
										  value="single" id="single"
										  />
									<label for="single" class="font">Single</label>
									<br/>
									<!-- Married -->
									<input disabled type="radio" name="maritalstat" 
										<?php if ($maritalStat=="married"){echo "checked";}?>
										value="married" id="married"
										/> 
									<label for="married" class="font">Married</label>								
									<br/>
									<!-- Date of Birth -->
									<label for="dob" class="font">Date of Birth:</label>
									<br/>
									<input disabled id="dob" name="dob" type="date"																							
										value="<?php echo $dob; ?>"/>									
									<br/>
									<!-- Phone Number removed onblur="checkPhoneNum(this);"-->
									<label for="phonenum" class="font">Phone Number:</label>
									<br/>
									<input disabled id="phonenum" name="phonenum" type="text" 									
										value="<?php echo $phoneNum; ?>"/>								
									<br/>
									<br/>
									<!-- Submit Button -->
									<input disabled type="submit" value="Submit Form" class="font" id="buttons"/>
									<br/>
									<br/>
									<!-- Reset Button -->
									<input disabled type="reset" value="Reset Form" class="font" id="buttons"/>
									<br/>
									<br/>
								</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- stright border line -->
				<div class="col-xs-12" id="divider"></div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4" id="footer">
					<ul>
						<li><a href="https://en.wikipedia.org/wiki/Halloween" target="_blank" class="static">
						Wikipedia: Halloween
						</a></li>
						<li><a href="https://www.marthastewart.com/1502347/halloween" target="_blank" class="static">
						Martha Stewart Halloween
						</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4" id="footer">
					<ul>
						<li><a href="https://www.history.com/topics/halloween/history-of-halloween" target="_blank" class="static">
						History Channel: Halloween
						</a></li>
						<li><a href="https://www.goodhousekeeping.com/holidays/halloween-ideas/" target="_blank" class="static">
						Good Housekeeping Halloween
						</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4" id="footer">
					<ul>
						<li><a href="http://www.halloween-website.com/history.htm" target="_blank" class="static">
						Halloween Web
						</a></li>
						<li><a href="http://www.halloween.com/" target="_blank" class="static">
						Halloween.com
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>