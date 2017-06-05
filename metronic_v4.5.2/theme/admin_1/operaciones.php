<?php

class bloque 
{
    public $sql=[];
    public $rows;
    public $valores=[];

    public function datos() {
        $model= new Conexion;
        $conexion= $model->conectar();
        $bloque=$this->sql;
        $x=0;$contador=0;
        foreach($bloque as $sql){
        $consulta=$conexion->prepare($sql);
           $consulta->execute();
           
           while ($filas =$consulta->fetch()){
            $this->rows[]=$filas;
            $contador++;
        }
        
        $this->valores[$x]=$contador;
        $contador=0;
        $x++;
           }
    }   
 }
?>