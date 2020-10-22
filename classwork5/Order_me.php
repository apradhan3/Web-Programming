<h1>The Ultimate Resturant of Amber Pradhan</h1>

<h2>Order Results</h2>

<?php

echo "Order processed at ".date("h:i, m F Y", time())."<br><br>";

echo "Your order is as follows:<br><br>";

$order1 = (int)$_POST["order1"];
$order2 = (int)$_POST["order2"];
$order3 = (int)$_POST["order3"];
$choosen = $_POST["choose"];

$subtotal = 0;
$platesOrdered = 0;

if($order1>0){
    $subtotal += $order1*2100;
    $platesOrdered += 1;
}
if($order2>0){
    $subtotal += $order2*199;
    $platesOrdered += 1;
}
if($order3>0){
    $subtotal += $order3*899;
    $platesOrdered += 1;
}
$total = $subtotal*1.1;
echo "Plates Ordered : ".$platesOrdered."<br>";
if($platesOrdered==0){
    echo "You did not order anything, Go back and Order!<br>";
}
echo "Subtotal : $".$subtotal."<br>";
echo "Total including tax : $".$total."<br><br>";
echo "Customer referred by ".$choosen."<br>";

?>