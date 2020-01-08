<?php
	$controllers = array(
						'index' => array('view', 'error'),
						'add' 	=> array('view', 'register', 'error'),
						'edit' 	=> array('view', 'editStudent', 'banStudent', 'deleteStudent', 'error')
					);

	/*validate if controller and or if action in said controller also exist*/
	if(array_key_exists($controller, $controllers)) //checks to see if the controller exists
		if(in_array($action, $controllers[$controller])) //checks to see if the action exists in the controller
			dispatch($controller,$action);
		else
			dispatch('index','error');
	else
		dispatch('index','error');

	function dispatch($controller, $action){
		//requering my controller
		require_once "controller/".ucfirst($controller)."Controller.class.php";

		//requering my models
		require_once "model/StudentBean.class.php";
		require_once "model/DBManager.class.php";

		$type = ucfirst($controller) . "Controller";
		$control = new $type();
		$control->{$action}();
	}

?>