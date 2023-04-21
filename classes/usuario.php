
<?php

class Usuario{
    public $uId="";
    public $uNombre="";
    public $uApeP="";
    public $uApeM="";
    public $uTipo="";
    public $uTel="";
    public $uFoto="";
    public $uEmail="";
    public $uCategory="";
  
    public function constructor($Id,$Nombre,$ApeP,$ApeM,$uTipo,$uTel,$uFoto,$uEmail,$uCat){
        $this->uId      =$Id;
        $this->uNombre  =$Nombre;
        $this->uApeP    =$ApeP;
        $this->uApeM    =$ApeM;
        $this->uTipo    =$uTipo;
        $this->uTel     =$uTel;
        $this->uFoto    =$uFoto;
        $this->uEmail   =$uEmail;
        $this->uCategory=$uCat;
        
    }

  
}

?>