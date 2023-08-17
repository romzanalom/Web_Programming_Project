<?php


$conn= new mysqli("localhost","root","","project_club");


 $user =$_REQUEST['user'];
 $name =$_REQUEST['name'];
 $city =$_REQUEST['city']; 
 $email =$_REQUEST['email'];
 $phone =$_REQUEST['phone'];
 $pass =$_REQUEST['password'];
 $clname =$_REQUEST['clname'];
 $fee =$_REQUEST['fee'];

$query = "insert into Sports( user_id,name,city,email,phone,password,club_name,fee) values(' $user','$name', '$city',  '$email',  '$phone', '$pass','$clname',' $fee')";

$run =mysqli_query($conn,$query)or die(mysqli_error());
if($run){
echo"Form submitted successfully";

}
else
{
echo"Form not submitted ";
}
 ?>

<html><br><br>
</form>
 <form action="Home Page.php">
<button type="submit" name="submit"> Back to Home Page </button> </form></html>
