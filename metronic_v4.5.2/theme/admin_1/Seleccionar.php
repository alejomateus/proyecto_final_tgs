<?php
class Seleccionar
{
    public $usuario;
    public $clave;
    public $mensaje;
    public $tipo;
    public function login()    {
        $model= new Conexion;
        $conexion=$model->conectar();
        $sql = 'SELECT * FROM usuario WHERE ';
         $sql .="usur_nombre=:usuario AND (usur_clave=:clave or usur_clave_recup=:clave)";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':usuario',  $this->usuario, PDO::PARAM_STR);
        $consulta->bindParam(':clave',  $this->clave, PDO::PARAM_STR);
        $consulta->execute();
        $total=$consulta->rowCount();
        if($total==0){
        $this->mensaje="BAD";           
        }
        else{
                      $this->mensaje="GOOD";
            $fila= $consulta->fetch();
            $this->tipo=$fila['usur_tipo'];
             $_SESSION[$fila['usur_nombre']]=$fila['usur_nombre'];
                session_start();
                $_SESSION['usuario']=$fila['usur_nombre'];
                //header('location:index.php');
           
        }
        }
      
}

