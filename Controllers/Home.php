<?php

class Home extends Controllers{
    public function __construct(){
        parent::__construct();

    }

    function home(){
        $data["page_id"] = 1;
        $data['page_tag'] = "Home";
        $data['page_title'] = "Página principal";
        $data['page_name'] = "home";
        $data['page_content'] = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic quis fuga officia reiciendis modi ut labore voluptatum, nisi quaerat at magni? Quos inventore suscipit optio, quaerat alias molestias repellat itaque?";
        $this->views->getView($this, "home", $data);
    }
}

?>