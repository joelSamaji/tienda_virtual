<?php

class Errors extends Controllers{
    public function __construct(){
        parent::__construct();

    }

    function notFound(){
        $this->views->getView($this, "error");
    }
}

$notFound = new Errors();
$notFound->notFound();

?>