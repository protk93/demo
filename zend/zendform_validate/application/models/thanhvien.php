<?php 
class Model_Thanhvien extends Zend_Db_Table_Abstract
{
	public $_name="thanhvien";
	public $_primary="id_thanhvien";
	public function getAll()
	{
		$se = $this->select();
		return $this->fetchAll($se)->toArray();
	}
  
		
    public function getWhere($id)
	{
		$se = $this->select();
		$se->where("$this->_primary=?",$id);
		$kq= $this->fetchAll($se)->toArray();
		if($kq)
		return $kq;
		else
		return false;		
		}
    public function insert_thanhvien($data)
	{
		$kq= $this->insert($data);
		if($kq)
		return true;
		else
		return false;		
		}
    public function checkUser($username)
	{
		$se = $this->select();
		$se->where("username=?",$username);
		$kq= $this->fetchAll($se)->toArray();
		if($kq)
		return false;
		else
		return true;		
		}   
	
	}
	

?>
