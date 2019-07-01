<?php


    class ArticulosControlador{

        public function listar(){

          include "Vista/articulos/articulos.php";

        }

        public function crear(){
            include "Vista/articulos/nuevo.php";
        }

        public function eliminar($parametro){
            echo "eliminando el articulo:".$parametro;
        }

        public function buscar($id){
            include "Vista/articulos/ver.php";
        }

    }


?>