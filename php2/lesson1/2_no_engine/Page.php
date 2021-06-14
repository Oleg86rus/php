<?php

class Page
{
    protected $name;
    protected $params = [];

    public function __construct($name, array $params)
    {
        $this->name = $name;
        $this->params = $params;
    }

    public function render() {
        extract($this->params);
        include $this->name . ".php";
    }

}