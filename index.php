<?php

require_once('controllers/page_controller.php');
require_once('model_factory.php');
require_once('crud.php');
require_once('crud_factory.php');

$crud = new Crud();
$crudFactory = new CrudFactory($crud);
$modelFactory = new ModelFactory($crudFactory);
$controller = new PageController($modelFactory);

$controller->handleRequest();


//ik roep eerst een instantie van de generieke Crud class aan. Die geef ik mee aan de Crudfactory 
// het enige wat de CrudFactory kan is de juiste Crud maken (user of shop).
// de ModelFactory krijgt de CrudFactory als input en wordt dan doorgegeven aan de pageController. 
// IN de pagecontroller roep ik de createModel functie van de ModelFactory aan
// de PageController roept mijn createModel functie (in ModelFactory) aan (via de constructor).
//  maakt dan een Model (PageModel, ShopModel of UserModel). 