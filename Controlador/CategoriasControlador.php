<?php
class CategoriasControlador{

    public function listar(){
        include "Vista/categorias/categorias.php";
    }

    public function crear(){
        include "Vista/categorias/nuevo.php";
    }

    public function eliminar($parametro){
        echo "eliminando el categoria:".$parametro;
    }

    public function buscar($id){
        include "Vista/categorias/ver.php";
    }
}


?>