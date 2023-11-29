<link rel="stylesheet" href="or.css">
<div class="delete">
<h2>Delete Record</h2>
<form method='post'>
<p>User ID: <input type="text" name="user_id" size=20 maxlength=40 /></p>
<p><input type='submit' name='search' value='Search' /></p>
</form>
<?php
if (isset($_POST['search'])) {
include('database_connect.php');
$id = $_POST['user_id'];
$query = $query = "Select UserID, CONCAT(LastName, ', ',FirstName, ', ',MiddleInitial) as Name, Username, Password, Age, 
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
echo "<form action='deletedusers.php' method='post'>
<br><h4>Deleting Record.... Are you sure?</h4>
<p><input type=hidden name='user_id' value='$_POST[user_id]'>
<input type=radio name='ans' value='Yes'>YES
<input type=radio name='ans' value='No'>NO <br><br>
<p><input type='submit' name='delete' value='Delete' /></p> </form>";
}
else
echo "No record found..."; } ?>
<br><br><a href="adminview.php">Go Back to User Information/s</a>
<br><br><a href="role.php">Go To Roles</a>
</div>