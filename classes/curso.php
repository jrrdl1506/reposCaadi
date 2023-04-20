<?php

class Curso{
    public $cId="";
    public $cIdProf="";
    public $cIdIdioma="";
    public $cClave="";
    public $cCupo="";

  
    public function constructor($Id, $IdProf, $IdIdioma, $Clave, $Cupo){
        $this->cId        =$Id;
        $this->cIdProf    =$IdProf;
        $this->cIdIdioma  =$IdIdioma;
        $this->cClave     =$Clave;
        $this->cCupo      =$Cupo;
  
    }

  
}



?>