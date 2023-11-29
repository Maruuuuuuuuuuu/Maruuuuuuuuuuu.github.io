<!DOCTYPE html>
<html>
<head>
<title>Concert Ticket Purchase Page</title>
<link rel="stylesheet" href="or.css">
<script>
function calculateTotal() {
var quantity = 5;

var VIP1Standing = 30850.00;
var VIP2Standing = 18550.00;
var LowerBoxA = 12720.00;
var LowerBoxB = 8480.00;
var LowerBoxSRO = 6000.00;
var UpperBox = 4770.00;
var GeneralAdmission = 2650.00;
}

function textFieldEnabler() {
    var cardNoInput = document.getElementById('card_number');
    var cardButton = document.getElementById('card');
    var cashButton = document.getElementById('cash');

    cardNoInput.disabled = !cardButton.checked;
}
</script>
</head>

<body>
<header>
    <center>
    <h1>Concert Ticket Purchase Page</h1>

    <h2>Concert Details:</h2>
    <p>Event: Ben&Ben 2023</p>
    <p>Date: December 20, 2023</p>
    <p>Time: 7:00 PM</p>
</center>
</header>

<div class = "order">
    <form action = "ordersummary.php" method = "post">
    <h2>Select Ticket:</h2>
    <select name="tickets" id="tickets">
        <option value="VIP1 Standing">VIP1 Standing - P30,850.00 per ticket</option>
        <option value="VIP2 Standing">VIP2 Standing - P18,550.00 per ticket</option>
        <option value="Lower Box A">Lower Box A - P12,720.00 per ticket</option>
        <option value="Lower Box B">Lower Box B - P8,480.00 per ticket</option>
        <option value="Lower Box SRO">Lower Box SRO - P6,000.00 per ticket</option>
        <option value="Upper Box">Upper Box - P4,770.00 per ticket</option>
        <option value="General Admission">General Admission - P2,650.00 per ticket</option>
    </select>
    <h2>Quantity:</h2>
    <input type="number" id="quantity" name="quantity" min="0" max="5" value="" style="text-align:center;" required onchange="calculateTotal()">

    <div class="radio-container" id="mode">
    <label for="paymentmode">Please select your mode of payment:</label><br><br>
    <label for="cash">Cash</label>
    <input type="radio" id="cash" name="mode" value="Cash" onchange="textFieldEnabler()">
    <label for="cash">Card</label>
    <input type="radio" id="card" name="mode" value="Card"onchange="textFieldEnabler()"><br>
    </div>

    <br><label for="card_number">Card Number (Please enter your card number):</label><br>
    <input type="text" id="card_number" name="card_number" minlength="8" maxlength="19" style="text-align:center;" required disabled>
    
    <div class="button-container">
    <button type="submit" value="Buy Tickets">Buy Tickets</button>
    <button type="reset" value="Reset">Reset</button>
    </div>
</div>
</form>
</body>
</html>