<?php
namespace Admin\Controller;
use Think\Controller;
class BrandController extends Controller {
    public function brandList(){
        $this->display();
    }
    public function brandAdd(){
        if(!empty($_POST)){
            dump($_POST);die();
        }else{
            $this->display();            
        }
    }
}