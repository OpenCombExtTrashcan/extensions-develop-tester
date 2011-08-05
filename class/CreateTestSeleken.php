<?php
namespace oc\ext\tester ;

use jc\io\StdOutputFilterMgr;

use oc\mvc\controller\Controller;

class CreateTestSeleken extends Controller
{
	public function process()
	{
		// phpinfo() ;
		require_once 'PHP/CodeCoverage/Filter.php';
		\PHP_CodeCoverage_Filter::getInstance()->addFileToBlacklist(__FILE__, 'PHPUNIT');
		
		if (extension_loaded('xdebug')) {
		    xdebug_disable();
		}
		
		if (strpos('/usr/bin/php', '@php_bin') === 0) {
		    set_include_path(dirname(__FILE__) . PATH_SEPARATOR . get_include_path());
		}
		
		require_once 'PHPUnit/Autoload.php';
		
		if(!isset($_SERVER['argv'])) 
		{
			$_SERVER['argv'] = array() ;
		}
		
		define('PHPUnit_MAIN_METHOD', 'PHPUnit_TextUI_Command::main');
		
		//$aOutputMgr = StdOutputFilterMgr::singleton() ;
		
		echo '<pre>' ;
		\PHPUnit_TextUI_Command::main();
		echo '/<pre>' ;
		
		//$aOutputMgr->stop() ;
	}
}

?>