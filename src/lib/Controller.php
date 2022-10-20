<?php
  namespace Sigma\Phptagram\lib;
  
  use Sigma\Phptagram\lib\View;

  class Controller {
    private View $view;

    public function __construct() {
      $this->view = new View();
    }

    public function render(string $name, array $data = []) {
      $this->view->render($name, $data);
    }

    public function post(string $param){
      return isset($_POST[$param])? $_POST[$param] : NULL;
    }

    public function get(string $param) {
      return isset($_GET[$param])? $_GET[$param] : NULL;
    }

    public function file(string $param) {
      return isset($_FILES[$param])? $_FILES[$param] : NULL;
    }
  }