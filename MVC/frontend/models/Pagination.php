<?php

class Pagination
{

  public $params = [

    'total' => 0,

    'limit' => 0,

    'full_mode' => FALSE
  ];

  public function __construct($params) {
    $this->params = $params;
  }

  public function getTotalPage() {
    $total = $this->params['total'] / $this->params['limit'];

    $total = ceil($total);

    return $total;
  }


  public function getCurrentPage() {
    $page = 1;
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
      $page = $_GET['page'];
      $total_page = $this->getTotalPage();
      if ($page >= $total_page) {
        $page = $total_page;
      }
    }
    return $page;
  }

  public function getPrevPage() {
    $prev_page = '';

    $current_page = $this->getCurrentPage();

    if ($current_page >= 2) {
      $page = $current_page - 1;
      $prev_url = $_SERVER['REQUEST_URI'];
      $prev_url = preg_replace('/[0-9]+/', $page, $prev_url);
      $prev_page = "<li><a href='$prev_url'>Prev</a></li>";
    }
    return $prev_page;
  }

  public function getNextPage() {
    $next_page = '';
    $current_page = $this->getCurrentPage();
    $total_page = $this->getTotalPage();
    if ($current_page < $total_page) {
      $page = $current_page + 1;
      $next_url = $_SERVER['REQUEST_URI'];
      $next_url = preg_replace('/[0-9]+/', $page, $next_url);
      $next_page = "<li><a href='$next_url'>Next</a></li>";
    }
    return $next_page;
  }

  public function getPagination() {
    $data = '';
    $total_page = $this->getTotalPage();
    if ($total_page == 1) {
      return '';
    }

    $data .= "<ul class='pagination'>";
    $prev_link = $this->getPrevPage();
    $data .= $prev_link;

    if ($this->params['full_mode'] == FALSE) {
      for ($page = 1; $page <= $total_page; $page++) {
        $current_page = $this->getCurrentPage();
        if ($page == 1 || $page == $total_page || $page  == $current_page - 1 || $page == $current_page + 1) {
          $page_url = $_SERVER['REQUEST_URI'];
          $page_url = preg_replace('/[0-9]+/', $page, $page_url);
          $data .= "<li><a href='$page_url'>$page</a></li>";
        }
        else if ($page == $current_page) {
          $data .= "<li class='active'><a href=''>$page</a></li>";
        }
        else if (in_array($page, [$current_page - 2, $current_page - 3, $current_page + 2, $current_page + 3])){
          $data .= "<li><a href=''>...</a></li>";
        }
      }
    }
    else {
      for ($page = 1; $page <= $total_page; $page++) {
        $current_page = $this->getCurrentPage();
        if ($current_page == $page) {
          $data .= "<li class='active'><a href='#'>$page</a></li>";
        } else {
          $page_url = $_SERVER['REQUEST_URI'];
          $page_url = preg_replace('/[0-9]+/', $page, $page_url);
          $data .= "<li><a href='$page_url'>$page</a></li>";
        }
      }
    }

    $next_link = $this->getNextPage();
    $data .= $next_link;
    $data .= "</ul>";
    return $data;
  }
}
