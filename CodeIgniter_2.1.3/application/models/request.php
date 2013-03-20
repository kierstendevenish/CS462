<?php

Class Request extends CI_Model
{
        function create($pickupTime, $deliveryAddr, $deliveryTime)
        {
                $id = uniqid();
                $db = new PDO('sqlite:./application/db/flowershop');
                $result = $db->query("INSERT INTO Requests (id, pickupTime, deliveryAddr, deliveryTime, delivered) VALUES ('" . $id . "','" . $pickupTime . "','" . $deliveryAddr . "','" . $deliveryTime . "',0);");

                return $id;
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

        function getShopEsl()
        {
            $db = new PDO('sqlite:./application/db/flowershop');
            $result = $db->query("SELECT dataValue FROM appDataString WHERE dataKey='shopEsl';");
            $row = $result->fetch();
            return $row['dataValue'];
        }

        function saveBid($deliveryId, $driverName, $estDeliveryTime, $rate)
        {
            $accepted = 0;
            var_dump("here");
            $this->load->helper('date');
            $dtime = mdate("%Y-%m-%d %h:%i:%s", $estDeliveryTime);
            var_dump($deliveryId);
            var_dump($driverName);
            var_dump($dtime);
            var_dump($rate);
            var_dump($accepted);

            $db = new PDO('sqlite:./application/db/flowershop');
            $result = $db->query("INSERT INTO Bids VALUES ('".$deliveryId."','".$driverName."','".$dtime."','".$rate."','".$accepted."');");
        }

        function getBidsForRequest($requestId = '')
        {
            $db = new PDO('sqlite:./application/db/flowershop');
            $result = $db->query("SELECT * FROM Bids WHERE ");
        }
}
?>