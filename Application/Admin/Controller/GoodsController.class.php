<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function goodsList(){
        $this->display();
    }
    public function goodsAdd(){
        if(!empty($_POST)){
            dump($_POST);
        }else{
            $this->display();            
        }

    }
    public function goodsTrash(){
        $this->display();
    }
}