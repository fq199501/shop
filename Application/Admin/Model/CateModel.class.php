<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model{
  public function getinfo(){
      return $this->select();
  }
}