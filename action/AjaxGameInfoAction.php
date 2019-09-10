<?php
	require_once("action/CommonAction.php");

	class AjaxGameInfoAction extends CommonAction {

		public $info;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

		protected function executeAction() {
			$data = array("key" => $_SESSION["key"]);
			$this->info = Connection::callAPI("state", $data);
		}
	}