<?php

class Curso{
    public $cId="";
    public $cIdProf="";
    public $cIdIdioma="";
    public $cNivel="";
    public $cClave="";
    public $cCupo="";

  
    public function constructor($Id, $IdProf, $IdIdioma, $Nivel, $Clave, $Cupo){
        $this->cId        =$Id;
        $this->cIdProf    =$IdProf;
        $this->cIdIdioma  =$IdIdioma;
        $this->cNivel     =$Nivel;  
        $this->cClave     =$Clave;
        $this->cCupo      =$Cupo;
  
    }

  
}



?>