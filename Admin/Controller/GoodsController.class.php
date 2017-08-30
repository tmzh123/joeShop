<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;
use Think\Controller;

/**
 * Description of GoodsController
 *
 * @author Joe
 */
class GoodsController extends Controller{
    //put your code here
    
    public function index(){
        
        $goods = new \Model\GoodsModel();
        $rows = $goods -> select();
        
        $this->assign('goodsList',$rows);
        $this->display();
    }
}
