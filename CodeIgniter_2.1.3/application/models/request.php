<?php

Class Request extends CI_Model
{
        function create($pickupTime, $deliveryAddr, $deliveryTime)
        {
                $db = new PDO('sqlite:./application/db/flowershop');
                $result = $db->query("INSERT INTO Requests (pickupTime, deliveryAddr, deliveryTime, delivered) VALUES ('" . $shopAddr . "','" . $pickupTime . "','" . $deliveryAddr . "','" . $deliveryTime . "',0);");
        }
        
        function allOpen()
        {
                $db = new PDO('sqlite:./application/db/flowershop');
                $result = $db->query("SELECT * FROM Requests WHERE delivered=0;");
                return $result;
        }

        function getShopName()
        {
            $db = new PDO('sqlite:./application/db/flowershop');
            $result = $db->query("SELECT dataValue FROM appDataString WHERE dataKey='shopName';");
            $row = $result->fetch();
            return $row['dataValue'];
        }

        function getShopCoordinates()
        {
            $db = new PDO('sqlite:./application/db/flowershop');
            $result = $db->query("SELECT dataValue FROM appDataString WHERE dataKey='shopLatitude';");
            $row = $result->fetch();
            $returnable['lat'] = $row['dataValue'];
            $result = $db->query("SELECT dataValue FROM appDataString WHERE dataKey='shopLongitude';");
            $row = $result->fetch();
            $returnable['long'] = $row['dataValue'];
            return $returnable;
        }
}
?>