<link rel="stylesheet" href="or.css">
<div class="update">
<h2>Update Record</h2>
<form action method='post'>
<p>User ID: <input type="text" name="user_id" size=20 maxlength=40 /></p>
<p><input type='submit' name='search' value='Search' /></p>
</form>
<?php
if (isset($_POST['search'])) {
include('database_connect.php');
$id = $_POST['user_id'];
$query = "Select UserID, FirstName, LastName, MiddleInitial, Age, Address, ContactNumber, EmailAddress, RegistrationDate FROM TBTheUnknown WHERE
UserID='$id' ";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row) {
echo "<form action='updatedusers.php' method='post'>";
echo "User ID: " . "<input type=hidden name=user_id value='$row[0]'>$row[0]" . "<br>";
echo "First Name : " . "<input type=text name=fn value='$row[1]'> <br>";
echo "Last Name : " . "<input type=text name=ln value='$row[2]'> <br>";
echo "Middle Initial : " . "<input type=text name=mi value='$row[3]'> <br>";
echo "Age : " . "<input type=text name=age value='$row[4]'> <br>";
echo "Address : " . "<input type=text name=add value='$row[5]'> <br>";
echo "Contact Number : " . "<input type=text name=cn value='$row[6]'> <br>";
echo "Email Address : " . "<input type=text name=ea value='$row[7]'> <br>";
echo "Date registered : " . $row[8] . "<br>";
echo "<p><input type='submit' name='update' value='Update' /></p></form>";
}
else
echo "No record found..."; } ?>
<br><br><a href="adminview.php">Go Back to User Information/s</a>
<br><br><a href="role.php">Go To Roles</a>
</div>