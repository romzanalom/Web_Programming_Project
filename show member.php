<html>
<body>
<?php

$conn= new mysqli("localhost","root","","project_club");

if(isset($_POST["submit1"])){
$sql = "SELECT * FROM Sports";
}

$result = $conn->query($sql);

 if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

echo "user_id: " . $row["user_id"]. " -- Name: " . $row["name"]. " --City:" . $row["city"]. " --Email:" . $row["email"]. " --Phone:" . $row["phone"]. " --Password:" . $row["password"]. "--Donation:" . $row["fee"];
echo "<br />";
}
 } 
else {
echo "0 results";
 }


 ?>
<br><br>
</form>
 <form action="Club member.php">
<button type="submit" name="submit"> Back to Home Page </button> </form>
</body>
</html>