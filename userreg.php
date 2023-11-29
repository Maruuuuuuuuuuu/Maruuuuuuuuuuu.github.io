<?php
/*
-----------------------------------------------------------------------------------------------------------------------
Script Name: register.php
Author: Decasa, Dela Torre, Polo, Ritualo
Description: The page to sign in or to register record in the database
-----------------------------------------------------------------------------------------------------------------------
*/
?>
<body>
    <header>
        <center>
        <h2>User Registration</h2>
        <h5>Please type your information here</h5>
        </center>
    </header>
<link rel="stylesheet" href="or.css">
<div class = "usreg">
    <form action="save.php" method="post">
    
    First Name: <input type="text" size="30" name="fn" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')"><br>
    Last Name: <input type="text" size="30" name="ln" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')"><br>
    Middle Initial: <input type="text" size="30" name="mi" style="text-align:center;"><br>
    Age: <input type="text" size="30" name="age" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')"><br>
    Address: <input type="text" size="30" name="address" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')"><br>
    Contact Number: <input type="text" size="30" name="connum" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')"><br>
    Email Address: <input type="text" size="30" name="email" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')"><br>
    Username: <input type="text" size="30" name="uname" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')"><br>
    Password: <input type="password" size="30" name="pass" required style="text-align:center;" oninvalid="this.setCustomValidity('Please fill this field')" oninput="setCustomValidity('')">
    <br>

    <div class="button-container">
    <button type="submit" name="submit" value="Register">Register</button>
    <button type="reset" name="Reset" value="Reset">Reset Fields</button>
    </div>

    </form>
</div>
</body>