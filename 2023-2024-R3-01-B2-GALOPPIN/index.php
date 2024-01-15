<?php
require_once("./controllers/router/Router.php");
$router = new Router();
$router->routing($_GET, $_POST);
?>
