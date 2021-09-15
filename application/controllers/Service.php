<?php
require(APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Service extends REST_Controller
{
  public function __construct()
  {

  //set headers to NOT cache a page
  header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  header("Pragma: no-cache"); //HTTP 1.0
    parent::__construct();
  }
  public function index_get()
  {
    $this->response(array('status'=>true,'message'=>'ICS web get services','result'=>'ICS web get services'),200);
  }
  public function index_post()
  {
    $this->response(array('status'=>true,'message'=>'ICS web post services','result'=>'ICS web post services'),200);
  }

}
