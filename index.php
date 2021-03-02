<?php

//Controlador Plantilla
require_once "Controladores/plantilla.controlador.php";

//Controladores
require_once "Controladores/CategoriasController.php";
require_once "Controladores/ClientesController.php";
require_once "Controladores/ProductosController.php";
require_once "Controladores/UsuariosController.php";
require_once "Controladores/VentasController.php";

//Modelos
require_once "Modelos/Categorias.php";
require_once "Modelos/Clientes.php";
require_once "Modelos/Productos.php";
require_once "Modelos/Usuarios.php";
require_once "Modelos/Ventas.php";

//Controlador Instancia Plantilla Principal
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();