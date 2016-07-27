<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
    
    
        
      //$ftv= new Form_Tim(array('name'=>'tim','method'=>'post','action'=>HOST_PROJECT.'/index/kqtim'));
      //$this->view->form=$ftv;  /* Initialize action controller here */
      $f=new Form_Register;
       $this->view->register=$f; 
	 //  $t= new Form_Timtensp;
	 //  $this->view->timtensp=$t;
    
    }
    public function indexAction()
    {
        // action body
		$hsx= new Model_Hangsx;
		$kq = $hsx->getAll();
	   //	print_r($kq);
    }

    public function kqtimAction()
    {
      $tensp=$this->_request->getParam("tensp");
		$idnhom=$this->_request->getParam("idnhom");
		
		$sanpham= new Model_Sanpham;
		$all = $sanpham->gettim($tensp,$idnhom);
		if($all!=null)
		{

		$pa=Zend_Paginator::factory($all);
		$pa->setItemCountPerPage(3);
		$pa->setPageRange(3);
		$current=$this->_request->getParam("page");
		$pa->setCurrentPageNumber($current);
		//print_r($pa);
		$this->view->all=$pa;
		$this->view->tensp=$tensp;
		$this->view->idnhom=$idnhom;
	
		
		}
		else
		{return false;}
		}
    }






