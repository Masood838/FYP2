<?
ob_start();

session_start();

defined("DS")? null : define("DS", DIRECTORY_SEPERATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__ . DS . "templates/front");
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__ . DS . "templates/back");


defined("DB_HOST") ? null : define("DB_HOST","localhost");
defined("DB_USER") ? null : define("DB_USER","root");
defined("DB_PASS") ? null : define("DB_PASS","");
defined("DB_NAME") ? null : define("DB_NAME","");


$connection = mysqli_connect(DB_HOST , DB_USER ,DB_PASS,DB_NAME  );

require_once("function.php")