<?php

class Productos extends Controllers{
    public function __construct(){
        parent::__construct();
    }

    function productos(){
        $data["page_id"] = 2;
        $data['page_tag'] = "Productos";
        $data['page_title'] = "Prodcutos en venta";
        $data['page_name'] = "productos";
        $this->views->getView($this, "productos", $data);
    }
}

?>