<?php
/**
 * 调用 $req = new \Sham\Request ;
 */
namespace Sham;

class Request extends Http\Request
{

    public function __construct($env = null)
    {
        $env = Environment::getInstance();
        $this->env = $env;
        $this->headers = new \Sham\Http\Headers(\Sham\Http\Headers::extract($env));
    }

}
