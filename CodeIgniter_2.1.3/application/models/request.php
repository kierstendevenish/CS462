<?php

Class Request extends CI_Model
{
        function create($shopAddr, $pickupTime, $deliveryAddr, $deliveryTime)
        {
                $db = new PDO('sqlite:./application/db/flowershop');
                $result = $db->query("INSERT INTO Requests (shopAddr, pickupTime, deliveryAddr, deliveryTime) VALUES ('" . $shopAddr . "','" . $pickupTime . "','" . $deliveryAddr . "','" . $deliveryTime . "');");
        }
}
?>