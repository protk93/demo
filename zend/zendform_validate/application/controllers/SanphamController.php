<?php

class SanphamController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		$sanpham= new Model_Sanpham;
		$kq = $sanpham->getAll();
		//print_r($kq);
		$this->view->all=$kq;
    }

    public function nhomsanphamAction()
    {
        $sanpham= new Model_Nhomhang;
		$kq = $sanpham->getAll();
		//print_r($kq);
		$this->view->all=$kq;
    }

    public function sptheonhomAction()
    {
        // action body
		$id=$this->_request->getParam("idnhom");
    }


}





