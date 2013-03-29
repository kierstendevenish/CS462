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

            $this->request->saveBid($deliveryId, $driverName, $estDeliveryTime, $rate);
        }

        function listAll()
        {
            $this->load->model('request');
        }

        function view($requestId = '')
        {
            $this->load->model('request');
            $data['bids'] = $this->request->getBidsForRequest($requestId);
            $data['requestId'] = $requestId;

            $this->load->view('templates/header');
            $this->load->view('list_open_requests', $data);
            $this->load->view('templates/footer');
        }
}

?>