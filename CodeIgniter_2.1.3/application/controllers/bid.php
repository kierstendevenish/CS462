<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bid extends CI_Controller {

	function __construct()
 	{
		parent::__construct();
 	}

	function consume()
        {
            $this->load->model('request');
            $deliveryId = $this->input->post('deliveryId');
            $driverName = $this->input->post('driverName');
            $estDeliveryTime = $this->input->post('estDeliveryTime');
            $rate = $this->input->post('rate');
            var_dump($deliveryId);
            var_dump($driverName);
            var_dump($estDeliveryTime);
            var_dump($rate);

            $this->request->saveBid($deliveryId, $driverName, $estDeliveryTime, $rate);
        }
}

?>