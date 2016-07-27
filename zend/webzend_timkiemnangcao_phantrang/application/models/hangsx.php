<?php 
class Model_Hangsx extends Zend_Db_Table_Abstract
{
	public $_name="hangsx";
	public $_primary="id_hangsx";
	public function  getAll()
	{
		$se = $this->select();
		return $this->fetchAll($se)->toArray();
		}
	}
?>
