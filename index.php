<?php
  require_once('function.php');
  $controllerAllow = array('test','inscription','index','con','capteur_management','update');
  $methodAllow = array('show', 'index','check','management');
  if (!isset($_GET["m"]) or !in_array($_GET["m"], $controllerAllow)){
   $m = "index";
  }else{
   $m = $_GET["m"];
  }
  if (!isset($_GET["c"]) or !in_array($_GET["c"], $methodAllow)){
   $c = "index";
  }else{
   $c = $_GET["c"];
  }
  /*$controller = in_array($_GET['m'], $controllerAllow) ? daddslashes($_GET['m']) : 'index';
  $method = in_array($_GET['c'], $methodAllow) ? daddslashes($_GET['c']) : 'index';*/
  $core = new core();
  $core->C($m, $c);
  // 建立数据库方程
  //insert 大众化
  //数据封装
  //截取数据方程
?>