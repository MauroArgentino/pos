<?php

    class Enrutador{


        public function cargar($accion,$parametro){

           switch ($accion) {
               case 'articulos':
                include "Controlador/ArticulosControlador.php";
                $articulo = new ArticulosControlador;
                $articulo->listar();
                break;

                case 'nuevoarticulo':
                include "Controlador/ArticulosControlador.php";
                $articulo = new ArticulosControlador;
                $articulo->crear();
                break;

                case 'eliminararticulo':
                include "Controlador/ArticulosControlador.php";
                $articulo = new ArticulosControlador;
                $articulo->eliminar($parametro);
                break;

                case 'buscararticulo':
                include "Controlador/ArticulosControlador.php";
                $articulo = new ArticulosControlador;
                $articulo->buscar($parametro);
                break;

                case 'categorias':
                include "Controlador/CategoriasControlador.php";
                $categoria= new CategoriasControlador;
                $categoria->listar();
                break;

                case 'nuevacategoria':
                include "Controlador/CategoriasControlador.php";
                $categoria = new CategoriasControlador;
                $categoria->crear();
                break;

                case 'eliminarcategoria':
                include "Controlador/CategoriasControlador.php";
                $categoria = new CategoriasControlador;
                $categoria->eliminar($parametro);
                break;

                case 'buscarcategoria':
                include "Controlador/CategoriasControlador.php";
                $categorias = new CategoriasControlador;
                $categorias->buscar($parametro);
                break;

               default:
                   echo 'No se encontro accion';
                   break;
           }

        }



    }


?>