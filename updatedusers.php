<link rel="stylesheet" href="or.css">
<div class="updated">
<?php
if (isset($_POST['update']))
{
include('database_connect.php');
$id = $_POST['user_id'];
$first = $_POST['fn'];
$last = $_POST['ln'];
$middle = $_POST['mi'];
$age = $_POST['age'];
$add = $_POST['add'];
$cn = $_POST['cn'];
$email = $_POST['ea'];
$query = "Select * FROM TBTheUnknown";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row)
{
$query = "UPDATE TBTheUnknown SET FirstName='$first', LastName='$last', MiddleInitial='$middle', Age='$age',
Address='$add', ContactNumber='$cn', EmailAddress='$email' WHERE
UserID='$id'";
mysqli_query($conn, $query);
echo "<h2>Record has been updated...</h2>";
}
}
?>
<br><br><a href="adminview.php">Go Back to User Information/s</a>
<br><br><a href="role.php">Go To Roles</a>
</div>