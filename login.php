<link rel="stylesheet" href="or.css">
<div class="login">
<center><h2>Login</h2><br></center>
<form action='login.php' method='post'>
Username: <input type="text" name="uname" size=20 maxlength=40 style="text-align:center;" required placeholder="Username"><br>
Password: <input type="password" name="password" size=20 maxlength=20 style="text-align:center;" required placeholder="Password">
<div class="button-container">
    <button type='submit' name='submit' value='Login'>Login</button>
    <button type='reset' name='Reset' value='Reset'>Reset</button></div>
</form>
<?php
if (isset($_POST['submit'])) {
include('database_connect.php');
$un = $_POST['uname'];
$p = $_POST['password'];
if(!empty($_POST['uname']) || !empty($_POST['password'])) {
$query = "Select UserID, FirstName, LastName, Username FROM TBTheUnknown WHERE Username='$un' AND
password=SHA('$p')";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row) {
echo "<center><h1>Welcome! <br>$row[3]</h1></center>";
echo '<center><a href="ticketorder.php">Continue</center>';
exit();
}
else {
echo 'The email address and password entered do not match those on file.';
}
}
else
echo 'Please enter email and/or password...';
mysqli_close($conn); } ?>

<br><center><a href="userreg.php">Not registered yet? Click here.</a></center>
</div>