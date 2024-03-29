<?php
abstract class Route {
    private $params;
    private $method;

    public function __construct() {
        $this->params = [];
        $this->method = '';
    }
public  function action($params = [],$method = 'GET'){
    $this->params = $params;
    $this->method = $method;

    if ($method === 'GET'){
        $this->get($params);  
    }
    else{
        $this->post($params);
    }
}


protected function getParam(array $array, string $paramName, bool $canBeEmpty=true)
{
    if (isset($array[$paramName])) {
        if(!$canBeEmpty && empty($array[$paramName]))
            throw new Exception("Paramètre '$paramName' vide");
        return $array[$paramName];
    } else
        throw new Exception("Paramètre '$paramName' absent");
}
  abstract protected function get($params = []);

  abstract protected function post($params = []);
}
?>