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
		public function  getWhere($id)
	{
		$se = $this->select();
		$se->where("id_nhom=?",$id);
		//kiem tra co du lieu ko
		if($this->fetchAll($se)->toArray())
			{
				return $this->fetchAll($se)->toArray();
			}
		else
			return false;
		}
	
	public function  getlimit_order($order,$field,$count,$offet)
	{
		$se = $this->select();
		$se->order("$field $order");
		$se->limit("$count,$offet");
		return $this->fetchAll($se)->toArray();
		}
	public function  getjone($idhangsx)
	{
		$se = $this->select(SELECT_WITH_FROM_PART);
		$se->setIntegritycheck(false);
		$se->join("nhomhang","nhomhang.id_nhom=sanpham.id_nhom");
		$se->where("id_hangsx=?",$idhangsx);
		if($this->fetchAll($se)->toArray())
			{
				return $this->fetchAll($se)->toArray();
			}
		else
			return false;
	}

		public function  gettim($tensp,$idnhom,$gia1,$gia2)
		{
			$se = $this->select();
			$se->where("tensp like'%$tensp%'");
			if($idnhom!="all")
			{
				$se->where("id_nhom='$idnhom'");

				}
			if($gia1!="")
			{
				$se->where("gia>=$gia1");

				}
			if($gia2!="")
			{
				$se->where("gia<=$gia2");

				}
			if($this->fetchAll($se)->toArray())
			{
				return $this->fetchAll($se)->toArray();
			}
		else
			return false;
		}
		public function  gettim1($tensp,$idnhom)
		{
			$se = $this->select();
			$se->where("tensp like'%$tensp%'");
			$se->where("id_nhom=?",$idnhom);
			if($this->fetchAll($se)->toArray())
			{
				return $this->fetchAll($se)->toArray();
			}
		else
			return false;
		}
	
}
	
	
	
	
	
	

?>
