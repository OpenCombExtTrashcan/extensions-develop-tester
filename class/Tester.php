<?php
namespace oc\ext\tester ;

use jc\auth\IdManager;
use jc\mvc\model\db\orm\PrototypeAssociationMap;
use jc\db\DB ;
use jc\db\PDODriver ;
use oc\ext\Extension;

class Tester extends Extension
{
	public function load()
	{
		// 定义ORM
        $this->defineOrm(PrototypeAssociationMap::singleton()) ;
		
	}
	
	public function defineOrm(PrototypeAssociationMap $aAssocMap)
	{}
	
}

?>