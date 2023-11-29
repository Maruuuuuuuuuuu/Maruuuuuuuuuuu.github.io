<!DOCTYPE html>
<html>
<head>
<title>Order Summary</title>
<link rel="stylesheet" href="or.css">
</head>
<body>
<div class = "summary">
    <form action="ordersave.php" method="post">

    <center><h1>Order Summary</h1><br></center>

    <?php
        $tickettype = $_POST['tickets'];

        $quantity = $_POST['quantity'];

        $mp = $_POST['mode'];

        $cno = $_POST['card_number'];

        $prices;

        $VIP1Standing = 30850.00;
        $VIP2Standing = 18550.00;
        $LowerBoxA = 12720.00;
        $LowerBoxB = 8480.00;
        $LowerBoxSRO = 6000.00;
        $UpperBox = 4770.00;
        $GeneralAdmission = 2650.00;

        $totalZoneA = $quantity * $VIP1Standing;
        $totalZoneB = $quantity * $VIP2Standing;
        $totalZoneC = $quantity * $LowerBoxA;
        $totalZoneD = $quantity * $LowerBoxB;
        $totalZoneE = $quantity * $LowerBoxSRO;
        $totalZoneF = $quantity * $UpperBox;
        $totalZoneG = $quantity * $GeneralAdmission;

        switch ($tickettype) {
            case "VIP1 Standing":
                $prices = $VIP1Standing;
                $tprice = $totalZoneA;
                break;
            case "VIP2 Standing":
                $prices = $VIP2Standing;
                $tprice = $totalZoneB;
                break;
            case "Lower Box A":
                $prices = $LowerBoxA;
                $tprice = $totalZoneC;
                break;
            case "Lower Box B":
                $prices = $LowerBoxB;
                $tprice = $totalZoneD;
                break;
            case "Lower Box SRO":
                $prices = $LowerBoxSRO;
                $tprice = $totalZoneE;
                break;
            case "Upper Box":
                $prices = $UpperBox;
                $tprice = $totalZoneF;
                break;
            case "General Admission":
                $prices = $GeneralAdmission;
                $tprice = $totalZoneG;
                break;
        }

        $totalPrice = $tprice;
        ?>

        <center>

        <p>Ticket Bought: <?php echo $tickettype;?></p>

        <p>Number of Tickets Bought: <?php echo $quantity; ?></p> 
        <br>
        <p>Price Breakdown:</p>
        <?php echo $tickettype . " Original Price";?>: ₱ <?php echo $prices; ?></li>

        <p>Mode of Payment: <?php echo $mp; ?></p>

        <p>Total Price to be Paid: ₱ <?php echo $totalPrice; ?></p>
        <button type="submit" value="Save">Place Order</button>
        </center>
    </form>
</div>
</body>
</html>