<?php

require_once("../views/home_doc.php");

$menu = array('home' => 'HOME', 'about' => 'ABOUT', 'contact' => 'CONTACT', 'webshop' => 'WEBSHOP');
$data = array('page' => 'home', 'menu' => $menu);
// nieuwe instantie (object) van de klasse HomeDoc
$view = new HomeDoc($data);
// uitvoer van de publieke functie show
$view->show();
