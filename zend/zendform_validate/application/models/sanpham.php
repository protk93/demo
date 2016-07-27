<?php 
class Model_Sanpham extends Zend_Db_Table_Abstract
{
	public $_name="sanpham";
	public $_primary="id_sanpham";
	public function  getAll()
	{
		$se = $this->select();
		return $this->fetchAll($se)->toArray();
		}
    /*public function  gettim($tensp)
		{
			$se = $this->select();
			$se->where("tensp like'%$tensp%'");
			if($this->fetchAll($se)->toArray())
			{
				return $this->fetchAll($se)->toArray();
			}
		else
			return false;
		}*/
		public function  gettim($tensp,$idnhom)
		{
			$se = $this->select();
			$se->where("tensp like'%$tensp%'");
			if($idnhom!="all")
			{
				$se->where("id_nhom='$idnhom'");

				}
			if($this->fetchAll($se)->toArray())
			{
				return $this->fetchAll($se)->toArray();
			}
		else
			return false;
		}
        public function  getWhere($id)
	{
		$se = $this->select();
		$se->where("id_nhom=?",$id);
		return $this->fetchRow($se)->toArray();
		}
        
	
	}
	

?>
