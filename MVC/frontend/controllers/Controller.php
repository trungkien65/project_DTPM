<?php

class Controller
{
  public function __construct()
  {

  }


    public $content;

    public $error;

    /**
     * @param $file string
     * @param array $variables
     * @return false|string
     */
    public function render($file, $variables = []) {

        extract($variables);
        ob_start();
        require_once $file;
        $render_view = ob_get_clean();

        return $render_view;
    }
}