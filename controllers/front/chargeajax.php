<?php

class CulqiChargeAjaxModuleFrontController extends ModuleFrontController {
  public function initContent() {
    parent::initContent();
    $this->ajax = true;
  }

  public function displayAjax(){
    $result = $this->module->charge($_POST["token_id"]);
    echo json_encode($result);
  }

}
