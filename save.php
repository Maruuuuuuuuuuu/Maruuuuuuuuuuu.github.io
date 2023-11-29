<?php
//check if the user registration has been submitted
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$mi = $_POST['mi'];
$age = $_POST['age'];
$add = $_POST['address'];
$cn = $_POST['connum'];
$ea = $_POST['email'];
$un = $_POST['uname'];
$pa = $_POST['pass'];

if (preg_match("/^[A-Z0-9._%-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z]{2,6}$/i",$ea)) {
    if (isset($_POST['submit'])) {
        include('database_connect.php');
        $query = "INSERT INTO TBTheUnknown(LastName, FirstName, MiddleInitial, Username, Password, Age, Address, ContactNumber, EmailAddress, RegistrationDate)
        VALUES ('$ln', '$fn', '$mi', '$un', SHA('$pa'), '$age', '$add', '$cn', '$ea', NOW())";
        $result = @mysqli_query($conn,$query);
    
        echo "<h1>Thank you for registering...</h1>
        <p> Your are now registered. Click the button below to login.</p>";
    
        mysqli_close($conn);
    }
}
else {
    echo "The email is invalid. Please enter a correct one.";
    echo "<br><a href='userreg.php'>Registration Page</a><br>";
}
?>
<a href="login.php">Login Page</a>