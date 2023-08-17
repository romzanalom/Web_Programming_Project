<html>

<head>

<style>
 .error {color: #FF0000;}

 </style>

</head>

 <body>

 <h2>Please Sign up to see the member of Clubs</h2>
<p><span class="error">* required field</span></p>

 <form method="post" action="student_choice.php">
<label>UserId:</label> <input type="text" name="user">
<span class="error">* <?php echo $userErr;?></span><br><br>

<label>FullName: </label><input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span><br><br>

<label>City:</label> <input type="text" name="city">
<span class="error">* <?php echo $cityErr;?></span><br><br>

<label>Email address:</label> <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span><br><br>

<label>Phone: </label><input type="text" name="phone">
<span class="error">* <?php echo $phoneErr;?></span><br><br>

<label>Rank: </label><input type="text" name="rank">
<span class="error">* <?php echo $rankErr;?></span><br><br>

<button type="submit" name="submit"> Submit </button>

<br><br>
</form>
 <form action="Home Page.php">
<button type="submit" name="submit"> Back to Home Page </button> </form>
</body>
 </html>