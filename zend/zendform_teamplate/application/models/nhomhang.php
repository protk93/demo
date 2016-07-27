<?php 
class Model_Nhomhang extends Zend_Db_Table_Abstract
{
	public $_name="nhomhang";
	public $_primary="id_nhom";
	public function  getAll()
	{
		$se = $this->select();
		return $this->fetchAll($se)->toArray();
		}
	}
?>
