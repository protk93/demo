<?php
class Form_Thanhvien extends Zend_Form
{
    public function init()
    {
        $name=$this->createElement("text","username",array("size"=>22,"label"=>"User Name"));
        $Pass=$this->createElement("Password","password",array("size"=>22,"label"=>"Password"));
		$rePass=$this->createElement("Password","re_password",array("size"=>22,"label"=>"Confirm"));
       $email=$this->createElement("text","email",array("size"=>22,"label"=>"Email"));
        $diachi=$this->createElement("text","diachi",array("size"=>22,"label"=>"Dia chi"));
		 $lv=$this->createElement("select","level",array("label"=>"Level","multioptions"=>array(
						"1"=>"Admin",
						"2"=>"Moderator",
						"3"=>"Guest"),"value"=>"3"));
		$s=$this->createElement("submit","Submit");
		$this->addElement($name)
			 ->addElement($Pass)
			 ->addElement($rePass)
			
             ->addElement($email)
			 ->addElement($diachi)
			 ->addElement($lv)
			 ->addElement($s)
			 ;
	

    }
}
?>