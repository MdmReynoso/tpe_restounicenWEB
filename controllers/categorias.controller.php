<?php
require_once('models/categorias.model.php');
require_once('views/view.platos.categorias.php');

class CategoriasController
{

    private $view;
    private $modelcategorias;

    public function __construct()
    {
        $this->modelcategorias = new CategoriasModel();
        $this->view = new PlatosCategoriasView();
    }

    public function ShowEditar($id)
    {

        if (!empty($_POST['categoria'])) {
            $id = $_POST['categoria'];
        }
        $categoria = $this->modelcategorias->get($id);

        $this->view->ShowEditCategoria($categoria);
    }

    public function editar()
    {

        $id_plato = $_POST['categoria'];
        $nombre = $_POST['name'];

        if (!empty($_POST['name'])) {
            $this->modelcategorias->edit($id_plato, $nombre);
            header("Location: " . BASE_URL . 'platos');
        } else
            $this->ShowEditar($id_plato, "Error, nombre vacio");
    }

    public function agregar()
    {
        $nombre = $_POST['name'];

        //chequeo que no este vacio y ahi si lo agrego
        if (!empty($_POST['name'])) {
            $this->modelcategorias->agregar($nombre);
            header("Location: " . BASE_URL . 'platos');
        } else  $this->view->showError("No es posible agregar categorias vacios");
    }
    //funcion para eliminar una categoria de la base que coincida con el id 
    public function eliminar($id)
    {
        if (!empty($_POST['categoria'])) {
            $id = $_POST['categoria'];
        }

        $this->modelcategorias->eliminar($id);
        header("Location: " . BASE_URL . 'platos');
    }
}
