<?php
namespace Home\Controller;
use Think\Controller;
class ReportController extends Controller {
	function _initialize() {
		if (!_checkLogin()) {
			$this->error('登陆超时,请重新登陆。','/commission',2);
			exit;
		}
	}
    public function loadReportPage(){
    	$this -> display('ReportPage');
		
	}
	
}
?>