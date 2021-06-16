<?php

class ModelRecoleccionMaterial
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=metodologia_database;charset=utf8', 'root', '');
    //  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  //alta
  function insertarRecoleccion($cartonero, $material, $peso, $fecha)
  {
    $query = $this->db->prepare('INSERT INTO recoleccion_materiales(
                                                DNI_cartonero,
                                                id_especificacion_material,
                                                $peso_material_recolectado
                                                $fecha_recoleccion)
                                 VALUES(?,?,?,?)');

    $query->execute(array($cartonero, $material, $peso, $fecha));

    return $this->db->lastInsertId();
  }

  //Obtener una registro de recolección
  function getRecoleccion($cartonero, $material, $peso, $fecha)
  {
    $query = $this->db->prepare('SELECT id_recoleccion
                                 FROM recoleccion_materiales
                                 WHERE $cartonero=?
                                 AND $material=?
                                 AND $peso=?
                                 AND $fecha_recoleccion=?');

    $query->execute(array($cartonero, $material, $peso, $fecha));

    return  $query->fetch(PDO::FETCH_OBJ);
  }


  function getRecoleccionesPorDNI($dni){
    $sentencia=$this->db->prepare("SELECT * FROM recoleccion_materiales join 
                        especificacion_materiales ON (id_especificacion_material = id_especificacion) WHERE DNI_cartonero=?");
    $sentencia->execute(array($dni));
    
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  function getRecoleccionesMateriales(){
    $sentencia=$this->db->prepare("SELECT * FROM recoleccion_materiales join 
                        especificacion_materiales ON (id_especificacion_material = id_especificacion)");
    $sentencia->execute();
    //var_dump($sentencia);
    //die();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }
}
