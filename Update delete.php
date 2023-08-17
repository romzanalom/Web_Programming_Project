<?php

$server="localhost";
$username="root";
$password=" ";
$dbname="Project_Club";

 $user =$rank="";
$con=mysqli_connect("localhost","root"," ","Project_Club");

if(isset($_POST["update"])){

 if(!empty(!empty($_POST["user"]) && !empty($_POST["rank"])){ 

   $user =$_POST["user"];
   $rank=$_POST["rank"];
  }

 $query = "UPDATE Sports SET  name = "<input type="text" name="name">",city= "<input type="text" name="city">" , email ="<input type="text" name="email">" ,phone = "<input type="text" name="phone">" where  user_id= user AND rank=rank";

$run =mysqli_query($con,$query)or die(mysqli_error());
if($run){

echo"Update success";
}
else
{

echo"Update is not success";
}
 ?>

$query = "DELETE * from Sports where  user_id= user";
$run =mysqli_query($con,$query)or die(mysqli_error());

if($run){

echo"Delete success";
}
else
{

echo"Delete is not success";
}
<html> <br><br>
</form>
 <form action="Home Page.php">
<button type="submit" name="submit"> Back to Home Page </button> </form> </html>
 ?>