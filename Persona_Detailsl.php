<? php

 $user =$pass="";

$conn= new mysqli("localhost","root","","project_club");

if(isset($_POST["login"])){

   $user =$_POST["user"];
   $pass=$_POST["password"];

}

 $sql = "SELECT  user_id FROM `sports`";
$sql1 = "SELECT  password FROM `sports`";

$result = $conn->query($sql);

$result1 = $conn->query($sql1);
if($user == $result && $pass ==$result1)

{

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "Welcome to your profile";
echo "user_id: " . $row["user_id"]. " -- Name: " . $row["name"]. " --City:" . $row["city"]. " --Email:" . $row["email"]. " --Phone:" . $row["phone"]. " --Password:" . $row["password"]. "--Donation:" . $row["fee"];
echo "<br />";
} 
 
}

else
{
echo"Please enter a valid password!";
}

}
else
echo"Please enter a valid name and password!";

?>