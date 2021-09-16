<?php

//Controlador Plantilla
require_once "Controladores/plantilla.controlador.php";

//Controladores
require_once "Controladores/CategoriasController.php";

require_once "Controladores/ClientesController.php";
require_once "Controladores/ProductosController.php";
require_once "Controladores/usuarios.controlador.php";
require_once "Controladores/VentasController.php";

//Modelos
require_once "Modelos/categorias.modelo.php";
require_once "Modelos/clientes.modelo.php";
require_once "Modelos/productos.modelo.php";
require_once "Modelos/usuarios.modelo.php";
require_once "Modelos/ventas.modelo.php";

//Controlador Instancia Plantilla Principal
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();