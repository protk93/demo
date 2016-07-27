<?php
class Form_Register extends Zend_Form
{
    public function init()
    {
       /* $name=$this->createElement("text","username",array("size"=>20,"label"=>"User Name"));
        $Pass=$this->createElement("Password","Password",array("size"=>20,"label"=>"Password"));
        $country=$this->createElement("select","country",array("label"=>"Quốc Gia","multioptions"=>array(
						"1"=>"Việt Nam",
						"2"=>"Lào",
						"3"=>"Campuchia"),"value"=>"2"));
        $gioitinh=$this->createElement("radio","gioitinh",array("label"=>"Giới Tính","multioptions"=>array(
						"1"=>"Nam",
						"2"=>"Nữ",
						),"value"=>"1"));
        $pt=$this->createElement("checkbox","pt",array("label"=>"Phương Tiện",array("1"=>"có","2"=>"Không"),"value"=>"1"));
		$ghichu=$this->createElement("textarea","ghichu",array("label"=>"Ghi Chú","clos"=>"10","clos"=>"10","rows"=>"10"));
		
		$login=$this->createElement("submit","Login");
		$this->addElement($name)
			 ->addElement($Pass)
			 ->addElement($login);
			 /*
             ->addElement($country)
			 ->addElement($gioitinh)
			 ->addElement($pt)
			 ->addElement($ghichu)
			 ;*/
		$this->setDisableLoadDefaultDecorators(true);
        $this->setDecorators(array(
        array('ViewScript', array('viewScript' =>'form/template_formlogin.phtml')),
            'Form'
        ));
 
 
       $this->addElement('text','username', array(
            'decorators' => array(
                'ViewHelper'
            ),
        ));
 
        $this->addElement('password','password', array(
            'decorators' => array(
                'ViewHelper'
            ),
        ));
 
        $this->addElement('submit', 'submit-button', array(
            'decorators' => array(
                'ViewHelper'
            ),
            'label' => 'Submit'
        ));

    }
}
?>