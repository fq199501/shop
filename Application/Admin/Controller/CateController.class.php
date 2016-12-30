<?php
namespace Admin\Controller;
use Think\Controller;

class CateController extends Controller {
    public function categoryList(){
        $cate=D('cate');
        $cateinfo=$cate->getinfo();
        $this->assign('cateinfo',$cateinfo);
        $this->display();
    }
    public function categoryAdd(){
        if(!empty($_POST)){
            $data=array(
                'cat_name'=>I('post.cat_name'),
                'parent_id'=>I('post.parent_id'),
                'sort_order'=>I('post.sort_order'),
                'is_show'=>I('post.is_show'),
                'is_nav'=>I('post.is_nav'),
                'keywords'=>I('post.keywords'),               
            );
            $rs=D('cate')->add($data);
            if($rs){
                $this->success('添加成功','./categoryList');    
            }else{
                $this->error('添加失败');
            }  
        }else{
            $this->display();            
        }
    }
}