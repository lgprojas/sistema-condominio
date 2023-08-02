<?php

class indexController extends androidController {
    
    private $_index;
    
    public function __construct() {
        parent::__construct();
        $this->_index =  $this->loadModel('index');
    }
    
    public function index($reg = false){
        
    }
    
    public function getReg(){
        $row = $this->_index->getReg();
        $seleccione = array("Id_reg" => "0", "Cod_reg" => "0", "Nom_reg" => "- SELECCIONE REGION -");
        array_unshift($row, $seleccione);
        $datos["estado"] = 1;
        $datos["regiones"] = $row;
        echo json_encode($datos);
    }
    
    public function getCiu($reg = false){
        
        $row = $this->_index->getCiu($reg);
        $seleccione = array("Id_ciu" => "0", "Nom_ciu" => "- SELECCIONE CIUDAD -");
        array_unshift($row, $seleccione);
        $datos["estado"] = 1;
        $datos["regiones"] = $row;
        echo json_encode($datos);
    }
    
    public function getSector(){}
    
    public function getCat(){}
    
    public function getSCat(){}
    
    public function getAllMarket(){}

}