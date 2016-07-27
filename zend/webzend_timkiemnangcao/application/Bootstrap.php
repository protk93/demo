<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
protected function _initAutoload()
	{
		$autoloader=new Zend_Application_Module_Autoloader(array('namespace'=>'','basePath'=> dirname(__FILE__),));
		return $autoloader;
		}
	protected function _initDB()
	{
		$db = Zend_Db::factory('Pdo_Mysql', array('host'=>'localhost',
													'username'=>'root',
													'password'=>'',
													'dbname'=>'zend',
													'charset'=>'utf8'));
		$db->setFetchMode(Zend_Db::FETCH_BOTH);
		Zend_Db_Table::setDefaultAdapter($db);
		return $db;
		}

}

