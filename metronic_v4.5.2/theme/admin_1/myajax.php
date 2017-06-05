<?php
require 'Crud.php';
require 'Conexion.php';
require 'Seleccionar.php';
$respuesta="";
	$mensaje="";
	$ContenidoHTML="";
        if($_POST['Op']=="eliminar"){
     $model = new Crud;
    $model->deletefrom=$_POST['tabla'];
    $model->condicion=$_POST['condici'];
    $model->eliminar();
    $respuesta=$model->mensaje;
    }
    if($_POST['Op']=="eliminar2"){
     $model = new Crud;
    $model->deletefrom=$_POST['tablax'];
    $model->condicion=$_POST['condicix'];
    $model->eliminar();
    $respuesta=$model->mensaje;
    }
if($_POST['Op']=="insertar"){
    $model = new Crud;
    $model->insertInto=$_POST['tabla'];
    $model->insertValues=$_POST['values'];
    $model->Crear();
    $respuesta=$model->mensaje;
    $variable=">>>>".$_POST['values'].$_POST['tabla'];
}
function EliminarDir($ruta){
    foreach (glob($ruta."/*")as $elemento){
        if(is_dir($elemento)){
            EliminarDir($elemento);
        }
        else{
            unlink($elemento);
        }
    }
    rmdir($ruta);
}
if($_POST['Op']=="correo"){
    $correo=$_POST["correo"];
    $asunto="Recuperacion de Contraseña";
    $valor=rand(10000000,99999999);
    $codigo=sha1($valor);
    $mensaje="Para recuperar tu contraseña ingresa este codigo en el campo de la clave y cambie la contraseña "
            . "inmediatamente para evitar inconvenientes posterormente. \n\n\n"
            . "Codigo: ".$valor." ";
    $model = new Crud;
    $model->update="usuario ";
    $model->set=" usur_clave_recup='".$codigo."'";
    $model->condicion=" usur_nombre= '".$correo."'";
    $model->actualizar();
    mail($correo,$asunto,$mensaje);
    $respuesta=$model->mensaje;
    }
    if($_POST['Op']=="login"){
    $model = new Seleccionar;
    $model->usuario = htmlspecialchars($_POST['usuario']);
    $model->clave =  sha1(htmlspecialchars($_POST['clave']));
    $model->login();
    $mensaje = $model->mensaje;
    
    }
if($_POST['Op']=="borrar"){
    $ruta=$_POST["ruta"];
    EliminarDir($ruta);
}
if($_POST['Op']=="copiar"){
 $ruta=$_POST["ruta"];
 $ruta2=$_POST["ruta2"];
 $carpeta=$_POST["carpeta"];
 $carpeta2=$_POST["carpeta2"];
 if($ruta!=$ruta2){
 if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);}
 rename ($ruta,$ruta2);
 EliminarDir($carpeta2);}
}
if($_POST['Op']=="actualizar"){
    $model = new Crud;
    $model->update=$_POST['tabla'];
    $model->set=$_POST['values'];
    $model->condicion=$_POST['condici'];
    $model->actualizar();
    $respuesta=$model->mensaje;
}
      if($_POST['Op']=="varios"){
          $tablas=  json_decode(stripcslashes($_POST['tablax']));
     $model = new Crud;
     foreach ($tablas as $tabla){
    $model->deletefrom=$tabla;
    $model->condicion=$_POST['condici'];
     $model->eliminar();
     $respuesta=$model->mensaje;
     }
}

if($_POST['Op'] =="bloque"){
    $bloque=  $_POST["bloque"];
    $model= new Conexion();
        $conexion= $model->conectar();
   foreach ($bloque as $sql){
    $respuesta=$sql;
        $consulta=$conexion->prepare($sql);
         if (!$consulta) {
        $respuesta="BAD".$sql;}
        else{    
            $consulta->execute();
            $respuesta="GOOD";
        }
    }
}
if($_POST['leer'] =="leer"){
    $model = new Crud();
$model->select=$_POST['columnas'];
$model->from =$_POST['tabla'];
$model->condicion=$_POST['condicion'];
$model->Leer();
$filas = $model->rows;
$total=  count($filas);
$respuesta=$model->mensaje;
if($_POST['tabla']=="usuario"){
if($total>0){
    $mensaje="BAD";
foreach ($filas as $fila){
$ContenidoHTML.='<tr>
<td>'.$fila["usur_nombre"].'</td>
<td>'.$fila["usur_nombre_persona"].'</td>
<td>'.$fila["usur_tipo"].'</td>
<td><a id="editar" class="btn btn-primary" >Editar</a></td>
<td><a id="eliminar" class="btn btn-danger" >Eliminar</a></td>
</tr>';}}
 else {
     $mensaje="GOOD";
    $ContenidoHTML='<tr> <td colspan="7">No hay Usuarios con esta descripcion  <a id="ver_todo" class="btn btn-warning" >Ver lista total</a> </td> </tr>';
}
 }
}
$salidaJSON=array("respuesta" => $respuesta,"mensaje" => $mensaje,"contenido" => $ContenidoHTML);
echo json_encode($salidaJSON);
?>