<?php

Class Request extends CI_Model
{
        function create($shopAddr, $pickupTime, $deliveryAddr, $deliveryTime)
        {
                $db = new PDO('sqlite:./application/db/flowershop');
                $result = $db->query("INSERT INTO Requests (shopAddr, pickupTime, deliveryAddr, deliveryTime, delivered) VALUES ('" . $shopAddr . "','" . $pickupTime . "','" . $deliveryAddr . "','" . $deliveryTime . "',false);");
        }
        
        function allOpen()
        {
                $db = new PDO('sqlite:./application/db/flowershop');
                $result = $db->query("SELECT * FROM Requests WHERE delivered=false;");
        }
}
?>