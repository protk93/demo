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
	public function  getWhere($id)
	{
		$se = $this->select();
		$se->where("id_hangsx=?",$id);
		//kiem tra co du lieu ko
		if($this->fetchAll($se)->toArray())
			{
				return $this->fetchAll($se)->toArray();
			}
		else
			return false;
		}
}
?>
