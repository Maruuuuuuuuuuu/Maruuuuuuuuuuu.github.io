<?php
include('database_connect.php');
$query = "select UserID, CONCAT(LastName, ', ',FirstName, ', ',MiddleInitial) as Name, Username, Password, Age, 
Address, ContactNumber, EmailAddress, DATE_FORMAT(RegistrationDate,'%M %d, %Y'), TicketBought, TicketQuantity, TotalPrice FROM TBTheUnknown";
$result = @mysqli_query($conn, $query);
mysqli_close($conn);
echo "<h2>USER INFORMATION/S</h2>";
$i=0;
while ($row = mysqli_fetch_array($result)) {
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
echo "<br>";
++$i;
}
mysqli_free_result($result);
echo "<br> <b>Total Records: " . ($i) . "<br>";
?>
<br><br><a href="searchusers.php">Search User Information/s</a>
<br><br><a href="updateusers.php">Update User Information/s</a>
<br><br><a href="deleteusers.php">Delete User Information/s</a>