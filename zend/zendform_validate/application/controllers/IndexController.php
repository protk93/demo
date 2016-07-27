<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
    
    
        
      //$ftv= new Form_Tim(array('name'=>'tim','method'=>'post','action'=>HOST_PROJECT.'/index/kqtim'));
      //$this->view->form=$ftv;  /* Initialize action controller here */
      //$f=new Form_Register;
     //  $this->view->register=$f; 
	 //  $t= new Form_Timtensp;
	 //  $this->view->timtensp=$t;
    
    }
    public function indexAction()
    {
    
	   $ftv=new Form_Thanhvien;
	   if($this->_request->isPost())
	   {
		 $param=$this->_request->getParams();
		 $check= new Form_Valid_InsertUser($param);
		 if($check->valid()==false)
		 {
		 $this->view->error= $check->messages;
		 $ftv->populate($param);
		 
		 }
		 else
		 {
			$data= array(
			"username"=>$this->_request->getParam("username"),
			"password"=>$this->_request->getParam("password"),
			"email"=>$this->_request->getParam("email"),
  	         "diachi"=>$this->_request->getParam("diachi"),
			"level"=>$this->_request->getParam("level")
			);
			$tv=new Model_Thanhvien;
			$tv->insert_thanhvien($data);
		 }
	   }
	   $this->view->form=$ftv;
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






