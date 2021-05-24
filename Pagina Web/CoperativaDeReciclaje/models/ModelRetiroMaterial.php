<?php

class ModelRetiroMaterial
{
    private $db;

    function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;' . 'dbname=metodologia_database;charset=utf8', 'root', '');
      //  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
 
    //alta
    function insertRetiro($foto, $categoria, $iniHorario, $finHorario, $idUsuario, $idCartonero)
    {
      $query = $this->db->prepare('INSERT INTO retiro_materiales(foto, categoria,
        inicio_horario_retiro, fin_horario_retiro, id_usuario, DNI_cartonero) VALUES(?,?,?,?,?,?)');
      $query->execute(array($foto, $categoria, $iniHorario, $finHorario, $idUsuario, $idCartonero));
      return $this->db->lastInsertId();
    }
    
    //baja
    function deleteRetiro($id)
    {
      $query = $this->db->prepare('DELETE FROM retiro_materiales WHERE id_retiro=?');
      $query->execute(array($id));
    }

    //modificación
    function updateRetiro($idRetiro, $foto, $categoria, $iniHorario, $finHorario, $idUsuario, $idCartonero)
    {
      $query = $this->db->prepare("UPDATE retiro_materiales SET foto=?, categoria=?, 
        inicio_horario_retiro=?, fin_horario_retiro=?, id_usuario=?, DNI_cartonero=? WHERE id_retiro=?");
      $query->execute(array($foto, $categoria, $iniHorario, $finHorario, $idUsuario, $idCartonero, $idRetiro));
    }
}