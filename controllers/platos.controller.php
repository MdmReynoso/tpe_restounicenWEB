<?php
require_once('models/platos.model.php');
require_once('views/view.php');
require_once('views/view.platos.categorias.php');
require_once('models/categorias.model.php');

class PlatosController
{

    private $modelplatos;
    private $view;
    private $modelcategorias;

    public function __construct()
    {
        $this->modelplatos = new PlatosModel();
        $this->modelcategorias = new CategoriasModel();
        $this->view = new PlatosCategoriasView();
    }

    public function showHome()
    {
        $this->view->home();
    }

    public function showHistoria()
    {
        $this->view->historia();
    }

    public function showUbicacion()
    {
        $this->view->ubicacion();
    }

    public function showAllPlatos()
    {
        $categorias = $this->modelcategorias->getAll();
        $platos = $this->modelplatos->getAll();
        $this->view->platos($categorias, $platos);
    }

    //obtengo todo la info de un plato en particular a partir de la id.
    public function showDetail($id_plato)
    {
        $plato = $this->modelplatos->get($id_plato);
        $categorias = $this->modelcategorias->getAll();
        $this->view->detalle($plato, $categorias);
    }

    public function showPlatos($id_plato)
    {
        $categorias = $this->modelcategorias->getAll();
        $platos = $this->modelplatos->getbyID($id_plato);
        $this->view->platos($categorias, $platos);
    }

    public function showAdmin()
    {
        $categorias = $this->modelcategorias->getAll();
        $platos = $this->modelplatos->getAll();
        $this->view->admin($categorias, $platos);
    }

    //funcion para mostrar el formulario de editar con la info de la base de datos precargada
    //con el id pasado por parametro (cuando aprieto el boton de la tarjeta)
    public function ShowEditar($id_plato, $error = null)
    {

        if (!empty($_POST['plato'])) {
            $id_plato = $_POST['plato'];
        }

        $plato = $this->modelplatos->get($id_plato);

        $this->view->ShowEditPlatos($plato, $error);
    }

    //funcion para editar un plato,si esta vacio el nombre, vuelve a mostrar el formulario con un
    //mensaje de error
    public function editar()
    {
        $id_plato = $_POST['plato'];
        $nombre = $_POST['name'];
        $detail = $_POST['detail'];
        $nacionalidad = $_POST['nacionalidad'];

        if (!empty($nombre) && !empty($detail) && !empty($nacionalidad)) {
            $this->modelplatos->edit($id_plato, $nombre, $detail, $nacionalidad);
            header("Location: " . BASE_URL . 'platos');
        } else
            $this->ShowEditar($id_plato, "Error, campos vacios");
    }

    public function agregar()
    {
        $id = $_POST['categoria'];
        $nombre = $_POST['name'];
        $detail = $_POST['detail'];
        $nacionalidad = $_POST['nacionalidad'];

        if (!empty($nombre) && !empty($detail) && !empty($nacionalidad)) {
            $this->modelplatos->agregar($nombre, $detail, $nacionalidad, $id);
            header("Location: " . BASE_URL . 'platos');
        } else  $this->view->showError("No es posible agregar elementos vacios");
    }

    //(cuando aprieto el boton que esta en cada tarjeta)
    public function eliminar($id_plato)
    {

        if (!empty($_POST['plato'])) {
            $id_plato = $_POST['plato'];
        }

        $this->modelplatos->eliminar($id_plato);
        header("Location: " . BASE_URL . 'platos');
    }

    //Funcion para mostrar errores generales
    public function showError($msg)
    {
        $this->view->showError($msg);
    }
}
