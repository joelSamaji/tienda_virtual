<?php

class RolesModel extends Mysql{
    public $strRol;
    public $strDescripcion;
    public $intStatus;

    function __construct(){
        parent::__construct();
    }

    function selectRoles(){
        $sql = "SELECT * FROM rol WHERE status != 0";
        $request = $this->select_all($sql);
        return $request;
    }

    function insertRol($rol, $descripcion, $status){
        $return ="";
        $this->strRol = $rol;
        $this->strDescripcion = $descripcion;
        $this->intStatus = $status;
        
        //Verificar si ya existe
        $sql = "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}'";
        $request = $this->select_all($sql);

        if(empty($request)){
            $query_insert = 'INSERT INTO rol(nombrerol, descripcion, status) VALUES (?,?,?)';
            $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus);
            $request_insert = $this->insert($query_insert, $arrData);
            $return = $request_insert;
        } else {
            $return = "exist";
        }
        return $return;
    }
    
}

?>