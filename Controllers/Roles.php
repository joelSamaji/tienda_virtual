<?php

class Roles extends Controllers{
    public function __construct(){
        parent::__construct();

    }

    function roles(){
        $data["page_id"] = 3;
        $data['page_tag'] = "Roles Usuario";
        $data['page_name'] = "rol_usuario";
        $data['page_title'] = "Roles Usuario <small> Tienda Virtual</small>";
        $this->views->getView($this, "roles", $data);
    }

    function getRoles(){
        $arrData = $this->model->selectRoles();

        for($i=0; $i<count($arrData);$i++){
            if($arrData[$i]['status'] == 1){
                $arrData[$i]['status'] = '<span class="me-1 badge bg-success">Activo</span>';
            } else {
                $arrData[$i]['status'] = '<span class="me-1 badge bg-danger">Inactivo</span>';
            }

            $arrData[$i]['options'] = '<div class="text-center">
                                        <button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fa-solid fa-key"></i></button>
                                        <button onclick="fntEditRol();" class="btn btn-success btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar"><i class="fa-solid fa-pen"></i></button>
                                        <button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="fa-solid fa-trash"></i></button>
                                        </div>';
        }

        echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        die();
    }

    function setRol(){
        $strRol = strClean($_POST['txtNombre']);
        $strDescripcion = strClean($_POST['txtDescripcion']);
        $intStatus = strClean($_POST['listStatus']);
        $request_rol = $this->model->insertRol($strRol, $strDescripcion, $intStatus);
        
        if($request_rol > 0){
            $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
        } else if ($request_rol == "exist"){
            $arrResponse = array('status' => false, 'smg' => '¡Atención! El Rol ya existe.');
        } else {
            $arrResponse = array('status' => false, 'smg' => 'No es posible almacenar los datos.');
        }
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        die();
    }
}

?>