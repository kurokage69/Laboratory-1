<html>
<title>Registration</title>
<body>

<?php
// define variables and set to empty values
$fnameErr = $mnameErr = $lnameErr = $emailErr = $genderErr = $dobErr = $addressErr = $guardErr = $connumErr = "";
$fname = $mname = $lname = $email = $gender = $dob = $address = $guard = $connum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }
  
  if (empty($_POST["mname"])) {
    $mnameErr = "Is required";
  } else {
    $mname = test_input($_POST["mname"]);
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "Is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }
  if (empty($_POST["address"])) {
    $addressErr = "Must not be empty";
  } else {
    $addressErr = test_input($_POST["address"]);
  }

  if (empty($_POST["dob"])) {
    $dobErr = "Must not be empty";
  } else {
    $dob = test_input($_POST["dob"]);
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Must not be empty";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["guard"])) {
    $guardErr = "Must not be empty";
  } else {
    $guardErr = test_input($_POST["guard"]);
  }

  if (empty($_POST["connum"])) {
    $connumErr = "Must not be empty";
  } else {
    $connum = test_input($_POST["connum"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="action/validate.php" method="post">
	<h2>REGISTRATION</h2>
	First Name    : <input type="text" name="fname"><br>
	Last Name     : <input type="text" name="lname"><br>
	Middle Name   : <input type="text" name="mname"><br>
	Address       : <input type="text" name="address"><br>
	Date of Birth : <input type="date" name="dob"><br>
	<input type="radio" id="male" name="gender" value="MALE">
  	<label for="male">Male</label><br>
  	<input type="radio" id="female" name="gender" value="FEMALE">
  	<label for="female">Female</label><br>
  	<input type="radio" id="other" name="gender" value="OTHER">
  	<label for="other">Other</label><br>
  	Guardian   	  : <input type="text" name="guard"><br>
  	Contact Number: <input type="text" name="connum"><br>
  	Civil Status  : <input type="text" name="civstat"><br>
  	Year Level    : 
  	<select name="level" id="level">
  		<option value="First Year">1st</option>
  		<option value="Second Year">2nd</option>
  		<option value="Third Year">3rd</option>
  		<option value="Fourth Year">4th</option>
  		<option value="Fifth Year">5th</option>
  	</select>
  	Course 		  : 
  	<select name="course" id="course">
  		<option value="Information Tech.">IT</option>
  		<option value="Computer Eng.">CPE</option>
  		<option value="TeleCommuManagement">TCM</option>
  	</select><br>
  	School Year   : <input type="text" name="year"><br>
<input type="submit">
</form>

</body>
</html>