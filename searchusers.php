<link rel="stylesheet" href="or.css">
<div class="search">
<center><h2>Search</h2></center>
<form action='searchusers.php' method='post'>
<p>User ID: <input type="text" name="user_id" size=20 maxlength=40 /></p>
<p><input type='submit' name='search' value='Search' /></p>
</form>
<?php
if (isset($_POST['user_id'])) {
include('database_connect.php');
$id = $_POST['user_id'];
$query = "Select UserID, CONCAT(LastName, ', ',FirstName, ', ',MiddleInitial) as Name, Username, Password, Age, 
Address, ContactNumber, EmailAddress, DATE_FORMAT(RegistrationDate,'%M %d, %Y'), TicketBought, TicketQuantity, TotalPrice FROM TBTheUnknown WHERE
UserID='$id' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row) {
    echo "<b>ID: </b>" . $row[0] . "<br>";
    echo "<b>Name: </b>" . $row[1] . "<br>";
    echo "<b>Username: </b>" . $row[2] . "<br>";
    echo "<b>Password: </b>" . $row[3] . "<br>";
    echo "<b>Age: </b>" . $row[4] . "<br>";
    echo "<b>Address: </b>" . $row[5] . "<br>";
    echo "<b>Contact Number: </b>" . $row[6] . "<br>";
    echo "<b>Email Address: </b>" . $row[7] . "<br>";
    echo "<b>Registration Date: </b>" . $row[8] . "<br>";
    echo "<b>Ticket Bought: </b>" . $row[9] . "<br>";
    echo "<b>Ticket Quantity: </b>" . $row[10] . "<br>";
    echo "<b>Total Price: </b>" . $row[11] . "<br>";
}
else
echo "No record found...";
}
?>
<center><br><a href="adminview.php">Go Back to User Information/s</a></center>
<center><br><a href="role.php">Go To Roles</a></center>
</div>