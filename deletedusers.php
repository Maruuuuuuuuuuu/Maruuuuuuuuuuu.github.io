<link rel="stylesheet" href="or.css">
<div class="deleted">
<?php
if (isset($_POST['delete']))
{
if ($_POST['ans']=="Yes")
{
include('database_connect.php');
$id = $_POST['user_id'];
$query = "Select * FROM TBTheUnknown";
$result = @mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
if ($row)
{
$query = "DELETE FROM TBTheUnknown WHERE UserID='$id'";
mysqli_query($conn, $query);
echo "<center><h2>Record has been deleted...</h2></center>";
}
}
else
echo "<center><h2>No deletion made...</h2></center>";
}
?>
<br><br><a href="adminview.php">Go Back to User Information/s</a>
<br><br><a href="role.php">Go To Roles</a>
</div>