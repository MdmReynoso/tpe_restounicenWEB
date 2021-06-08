<?php
require_once('model.php');

//Las clases siempre empiezan con mayusculas
class PlatosModel extends Model
{

    /**
     * @return array
     */
    public function getAll()
    {
        $query = $this->getDb()->prepare('SELECT * FROM platos ORDER BY id_plato DESC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param $id
     * @return array
     */
    public function get($id_plato)
    {
        $query = $this->getDb()->prepare('SELECT * FROM platos WHERE id_plato = ?');
        $query->execute(array($id_plato));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * @param $id
     * @return array
     */
    public function getbyID($id_plato)
    {
        $query = $this->getDb()->prepare('SELECT * FROM platos WHERE id_categoria = ? ORDER BY nombre ASC');
        $query->execute([$id_plato]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * @param 
    
     */
    public function edit($id_plato, $nombre, $detail, $nacionalidad)
    {
        $query = $this->getDb()->prepare('UPDATE platos SET nombre = ?, nacionalidad = ?, detalle = ?  WHERE id_plato = ?');
        $query->execute([$nombre, $nacionalidad, $detail, $id_plato]);
    }



    /**
     * @param 
     */
    public function agregar($nombre, $detail, $nacionalidad, $id)
    {
        $query = $this->getDb()->prepare("INSERT INTO platos (nombre, detalle, nacionalidad, id_categoria) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $detail, $nacionalidad, $id]);
    }



    /**
     * @param 
     */
    public function eliminar($id_plato)
    {
        $query = $this->getDb()->prepare('DELETE FROM platos WHERE id_plato = ?');
        $query->execute([$id_plato]);
    }
}
