<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
       	$this->view->headlink()->appendStylesheet(HOST_PROJECT."/public/css/ddsmoothmenu.css");
		$this->view->headlink()->offsetSetStylesheet("2",HOST_PROJECT."/public/css/ddsmoothmenu-v.css");
		$this->view->headlink()->offsetSetStylesheet("3",HOST_PROJECT."/public/css/style.css");
		$this->view->headlink()->offsetSetStylesheet("4",HOST_PROJECT."/public/css/style_5/style.css");
		$this->view->headScript()->appendFile(HOST_PROJECT."/public/js/ddsmoothmenu.js");
		$this->view->headScript()->offsetSetFile("2",HOST_PROJECT."/public/js/jquery.min.js");
		$this->view->headScript()->offsetSetFile("3",HOST_PROJECT."/public/js/init.js");
		$this->view->headScript()->offsetSetFile("4",HOST_PROJECT."/public/js/pirobox_extended_feb_2011.js");
		$this->view->headScript()->offsetSetFile("5",HOST_PROJECT."/public/js/pirobox.js");
		$option=array(
		"layout"=>"layouts",
		"layoutPath"=>APPLICATION_PATH."/layouts/scripts"
		);
		Zend_Layout::startMVC($option);
		
		$h= new Model_Hangsx;
		$nhom= new Model_Nhomhang;
		$hang=$h->getAll();
		
		$nhomhang=array();
		foreach($hang as $item){
		$nhomhang[]=$nhom->getWhere($item["id_hangsx"]);
		}
		$this->view->hang=$hang;
		$this->view->nhomhang=$nhomhang;
		
		
		$kq=$nhom->getAll();
		$this->view->all_select=$kq;

    }

    public function indexAction()
    {
        // action body
		$sanpham= new Model_Sanpham;
		$kq=$sanpham->getAll();
		//$kq = $sanpham->getlimit_order("DESC","Gia",6,0);
		//print_r($kq);
		$this->view->all=$kq;
	
    }

    public function menuAction()
    {
        // action body
	
    }

    public function sptheonhomAction()
    {
        // action body
		
		$id=$this->_request->getParam("idnhom");
		$sanpham= new Model_Sanpham;
		$all = $sanpham->getWhere($id);
	
		$pa=Zend_Paginator::factory($all);
		$pa->setItemCountPerPage(3);
		$pa->setPageRange(3);
		$current=$this->_request->getParam("page");
		$pa->setCurrentPageNumber($current);
		//print_r($pa);
		$this->view->all=$pa;
    }

    public function sphangAction()
    {
       	$id=$this->_request->getParam("idhangsx");
		$sanpham= new Model_Sanpham;
		$all = $sanpham->getjone($id);
		//print_r($kq);
		
		$pa=Zend_Paginator::factory($all);
		$pa->setItemCountPerPage(3);
		$pa->setPageRange(3);
		$current=$this->_request->getParam("page");
		$pa->setCurrentPageNumber($current);
		//print_r($pa);
		$this->view->all=$pa;
    }

    public function kqtimAction()
    {
        // action body
		
		$tensp=$this->_request->getParam("tensp");
		$id=$this->_request->getParam("select");
		$gia1=$this->_request->getParam("gia1");
		$gia2=$this->_request->getParam("gia2");
		//print_r($id);
		$sanpham= new Model_Sanpham;
		
		$kq = $sanpham->gettim($tensp,$id,$gia1,$gia2);
		
		
		//print_r($kq);
		$this->view->all=$kq;
		
    }


}









