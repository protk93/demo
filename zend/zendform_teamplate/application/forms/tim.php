<?php
class Form_Tim extends Zend_Form
{
    public function init()
    {
        $tensp=$this->createElement("text","tensp",array("size"=>30,"label"=>"Tìm"));
        $button=$this->createElement("submit","Tim");
		$nhom = new Model_Nhomhang;
		$all = $nhom->getAll();
		$arr = array();

		$arr['all']="Tất Cả";	

		foreach($all as $item)
		{
			$arr[$item['id_nhom']] = $item['tennhom'];
			
		}
		//print_r($arr);
		$nhomhang = $this->createElement("select", "idnhom", array(
							"label"=>"Nhom Hang",
							"multioptions"=>$arr)	);

        $this->addElement($tensp)
			  ->addElement($nhomhang)
				->addElement($button);
    }
}
?>