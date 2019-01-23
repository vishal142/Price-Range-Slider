<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 class Welcome_model extends CI_Model{


  function GetAllProduct($minprice,$maxprice){
	$this->db->select('*');
  	$this->db->where('price BETWEEN "'.$minprice. '" and "'.$maxprice.'"');
  	$this->db->order_by('price','ASC');
  	$res = $this->db->get('tbl_product')->result_array();
  	return $res;
   }



 }