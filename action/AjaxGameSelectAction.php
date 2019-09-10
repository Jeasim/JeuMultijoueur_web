<?php
	require_once("action/CommonAction.php");

class AjaxGameSelectAction extends CommonAction {

        public $info;

    public function __construct() {
        parent::__construct(CommonAction::$VISIBILITY_MEMBER);
    }

    protected function executeAction() {

        $data = array("key" => $_SESSION["key"]);
		$this->info = Connection::callAPI("list", $data);
    }
}