<html>

<head>

<?php
include("Home Page.php");
?>

<style>



<style>




body{
background-image: url('1627904608840.jpg');
 background-repeat: no-repeat;
  background-attachment: fixed;
 background-size: 100% 100%;
}
 .error {color: #FF0000;}

.Romzan{
  width: 300px;
  border: 5px solid black;
  padding: 50px;
  margin: 20px;
  background-color: gray;
}

.submit {
  display: block;
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 28px;
  font-size: 12px;
  text-align: center;
}

.submit:hover {
  background-color: #ddd;
  color: black;
}

 </style>

</head>

 <body>

 <?php

 $userErr=$nameErr = $cityErr=$emailErr = $phoneErr = $passwordErr = $clnameErr = $feeErr="";
 $user=$name = $city=$email = $phone = $password = $clname = $fee="";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (empty($_POST["user"])) {
$user = "";
} else {
 $user = test_input($_POST["user"]);
if (!preg_match('/^[0-9]*$/',user)) {

 $userErr = "Enter a valid number";
 }
 }
 


if (empty($_POST["name"])) {
 $nameErr = "Please enter a valid name";
 } else {
$name = test_input($_POST["name"]);
 if (!preg_match("/^[a−zA−Z−’ ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
}
 }

if (empty($_POST["city"])) {
 $cityErr = "Please enter a valid city";
 } else {
$city = test_input($_POST["city"]);
 if (!preg_match("/^[a−zA−Z−’ ]*$/",$city)) {
$cityErr = "Only letters and white space allowed";
}
 }

 if (empty($_POST["email"])) {
 $emailErr = "valid Email address";
 } else {
$email = test_input($_POST["email"]);

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

$emailErr = "The email address is incorrect";
}
 }

 if (empty($_POST["phone"])) {
$phone = "";
} else {
 $phone = test_input($_POST["phone"]);
if (!preg_match('/^[0-9]*$/',$phone)) {

 $phoneErr = "Enter a valid number";
 }
 }
 
 if (empty($_POST["password"])) {
$password = "";
 $passwordErr = "Please enter a valid city";
 } else {
$pass= test_input($_POST["password"]);}
 if (!preg_match("/^[a−zA−Z−’ ]*$/",$password)) {
$passwordErr = "Only letters and white space allowed";
}
 }


 if (empty($_POST["clname"])) {
$clname= "";
 $clnameErr = "Please enter a valid city";
 } 
else {
$clname= test_input($_POST["clname"]);}
 if (!preg_match("/^[a−zA−Z−’ ]*$/",$clname)) {
$clnameErr = "Only letters and white space allowed";

 }

if (empty($_POST["fee"])) {
$fee = "";
} else {
 $fee = test_input($_POST["fee"]);

if (!preg_match('/^[0-9]*$/',$fee)) {

 $feeErr = "Enter a valid number";
 }
}

 ?>
<div class="Romzan">

 <h2>Please Sign up to see the member of Clubs</h2>
<p><span class="error">* required field</span></p>

 <form method="post" action="Insert.php">

<label>UserId: </label><input type="text" name="user">
<span class="error">* <?php echo $userErr;?></span><br><br>

<label>FullName: </label><input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span><br><br>

<label>City: </label><input type="text" name="city">
<span class="error">* <?php echo $cityErr;?></span><br><br>

<label>Email address: </label><input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span><br><br>

<label>Phone: </label><input type="text" name="phone">
<span class="error">* <?php echo $phoneErr;?></span><br><br>

<label>Password: </label><input type="text" name="password">
<span class="error">* <?php echo $passwordErr;?></span><br><br>

<label>club name </label><input type="text" name="clname">
<span class="error">* <?php echo $clnameErr;?></span><br><br>


<label>Donation </label><input type="text" name="fee">
<span class="error">* <?php echo $feeErr;?></span><br><br>

<div>
<button type="submit" name="submit" class="submit" >Submit</button>
</div>

</form>
 <br><br>
</form>
</div>

</body>
 </html>