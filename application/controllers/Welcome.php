<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
     parent::__construct();
     $this->load->model('Welcome_model');

   }
   
	public function index()
	{

		$this->load->view('welcome_message');
	}

	function products(){
    $min_price = $this->input->post('min_price');
    $max_price = $this->input->post('max_price');

    $product = $this->Welcome_model->GetAllProduct($min_price,$max_price);
    if(!empty($product)){
    foreach($product as $row):
    $html = '<div class="col-xs-12 col-md-6">';
    $html .='<div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="product-image">'; 
                    $img = base_url().'uploads/product_images/'.$row['image'];
                    $html .='<img src="'.$img.'" class="img-responsive rotprod"> 
                    <span class="tag2 hot">
                      HOT
                    </span> 
                  </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="product-deatil">
                    <h5 class="name">
                      <a href="#">'.$row['name'].'</a>

                    </h5>
                    <p class="price-container">
                      <span>$'.$row['price'].'</span>
                    </p>
                    <span class="tag1"></span> 
                </div>
                <div class="description">
                  <p>A Short '.$row['name'].' description here </p>
                </div>
                <div class="product-info smart-form">
                  <div class="row">
                    <div class="col-md-12"> 
                      <a href="javascript:void(0);" class="btn btn-danger btn-cart"><span>Add to cart</span></a>
                                    <a href="javascript:void(0);" class="btn btn-info"><span>More info</span></a>
                    </div>
                    <div class="col-md-12">
                      <div class="rating">Rating:
                        <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                        <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                        <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                        <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                        <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>';
          echo $html;
          endforeach;
         }else{
          echo "<center><h2><b>No product found...!!</b><h2></center>";
         }
     }
}
