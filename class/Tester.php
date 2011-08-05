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
        //加载微博相同心情的朋友控制器
        $this->application()->accessRouter()->addController("oc\\ext\\tester\\CreateTestSeleken",'seleken');
		
	}
}

?>