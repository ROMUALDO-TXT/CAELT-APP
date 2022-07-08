<?php

require_once("../config.php");

class Material
{

    protected $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }
    
    public function createMaterial(){}

    public function findMaterials($value)
    {
        $result = $this->mysqli->query("
        SELECT * FROM materials 
        INNER JOIN teachers 
        INNER JOIN subjects 
        WHERE materials.name like '$value' 
        OR type like '$value' 
        OR theme like '$value' 
        OR author like '$value' 
        OR created_at like '$value' 
        OR concat(teachers.name, ' ', teachers.surname) like '$value' 
        OR teachers.nickname like '$value' 
        OR concat(subjects.code, ' : ', subjects.name) like '$value' 
        ORDER BY subjects.code");

        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function findMaterialsFilter($params)
    {
        $result = $this->mysqli->query("
        SELECT * FROM materials I
        NNER JOIN teachers 
        INNER JOIN subjects 
        WHERE materials.name like '$params->name'
        OR type like '$params->type' 
        OR theme like '$params->theme' 
        OR author like '$params->author' 
        OR teachers.id == '$params->teacher'  
        OR subjects.id == '$params->subject' 
        ORDER BY subjects.code");

        return $result->fetch_array(MYSQLI_ASSOC);
    }
}
