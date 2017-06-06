<?php
session_start();
if ($_SESSION['usuario'] == true) {
    
} else {
    session_unset();
    session_destroy();
    header('location:page_user_login_1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title> Kpis</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        --> <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <img src="../assets/pages/img/unad.png" alt="logo" class="logo-default" height="25px"/> 
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <!-- <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                 <i class="icon-bell"></i>
                                 <span class="badge badge-default"> 7 </span>
                             </a>-->
                            <ul class="dropdown-menu">

                            </ul>
                        </li>

                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="../assets/layouts/layout/img/user.png" />
                                <span class="username username-hide-on-mobile"> Cuenta </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1_account.html">
                                        <i class="icon-user"></i> Mi Cuenta </a>
                                </li>

                                <li>
                                    <a href="cerrar.php">
                                        <i class="icon-key"></i> Cerrar Sesion </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <!-- <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a href="javascript:;" class="dropdown-toggle">
                                 <i class="icon-logout"></i>
                             </a>
                         </li>
                        --> <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>


                        <li class="heading">
                            <h3 class="uppercase">FILTROS</h3>
                        </li>

                        <li class="nav-item  ">
                            <a class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Nivel Socioeconomico</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item " id="nse_todo">
                                    <a  class="nav-link " id="">
                                        <span class="title">Seleccionar todo</span>
                                    </a>
                                </li>
                                <li class="nav-item" id="li_nse_1">
                                    <a class="nav-link checkbox">
                                        <label class="title" id="a_nse_1"><input id="nse_1" type="checkbox" value="" checked> Estrato 0</label>
                                    </a>
                                </li>
                                <li class="nav-item  " id="li_nse_2">
                                    <a class="nav-link checkbox">
                                        <label class="title" id="a_nse_2"><input id="nse_2" type="checkbox" value="" checked> Estrato 1</label>
                                    </a>
                                </li>

                                <li class="nav-item  " id="li_nse_3">
                                    <a class="nav-link checkbox">
                                        <label class="title" id="a_nse_3"><input id="nse_3" type="checkbox" value="" checked> Estrato 2</label>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Genero</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  " id="todo_gen">
                                    <a  class="nav-link " >
                                        <span class="title">Seleccionar todo</span>
                                    </a>
                                </li>

                                <li class="nav-item" id="li_masc" >
                                    <a class="nav-link checkbox" >
                                        <label class="title" id="a_masc"><input id="gen_masc" type="checkbox" value="" checked > Masculino</label>
                                    </a>
                                </li>
                                <li class="nav-item  " id="li_femem">
                                    <a  class="nav-link  checkbox">
                                        <label class="title" id="a_femem"><input id="gen_femem" type="checkbox" value="" checked > Femenino</label>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Rangos de Edad</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a  class="nav-link ">
                                        <span class="title" id="edad_todo">Seleccionar todo</span>
                                    </a>
                                </li>
                                <li class="nav-item  " id="li_edad_1">                                    
                                    <a  class="nav-link  checkbox">
                                        <label class="title" id="a_edad_1"><input id="edad_1" type="checkbox" value="" checked> De 10 a 18 años</label>
                                    </a>
                                </li>
                                <li class="nav-item  " id="li_edad_2">
                                    <a  class="nav-link  checkbox">
                                        <label class="title" id="a_edad_2"><input id="edad_2" type="checkbox" value="" checked> De 18 a 25 años</label>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a  class="nav-link  checkbox" id="a_edad_3">
                                        <label class="title" id="li_edad_3"><input id="edad_3" type="checkbox" value="" checked> De 26 a 35 años</label>
                                    </a>
                                </li>
                                <li class="nav-item  " id="li_edad_4">
                                    <a  class="nav-link  checkbox">
                                        <label class="title" id="a_edad_4"><input id="edad_4" type="checkbox" value="" checked> De 36 a 45 años</label>
                                    </a>
                                </li>
                                <li class="nav-item  " id="li_edad_5">
                                    <a  class="nav-link  checkbox">
                                        <label class="title" id="a_edad_5"><input id="edad_5" type="checkbox" value="" checked> De 46 a 70 años</label>
                                    </a>
                                </li>
                                <li class="nav-item  " id="li_edad_6">
                                    <a  class="nav-link  checkbox">
                                        <label class="title" id="a_edad_6"><input id="edad_6" type="checkbox" value="" checked> Mas de 70 años</label>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item  ">
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-refresh"></i>
                                <span class="title">Clear All</span>
                            </a>
                        </li>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">

                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="input-group input-large">
                                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                        <span class="fileinput-filename"> </span>
                                    </div>
                                    <span class="input-group-addon btn default btn-file">
                                        <span class="fileinput-new"> Seleccione la Base de Preguntas </span>
                                        <span class="fileinput-exists"> Cambiar </span>
                                        <input type="file" name="..."  accept=".xls,.xlsx"> </span>
                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="input-group input-large">
                                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                        <span class="fileinput-filename"> </span>
                                    </div>
                                    <span class="input-group-addon btn default btn-file">
                                        <span class="fileinput-new"> Seleccione la Base de Opciones </span>
                                        <span class="fileinput-exists"> Cambiar </span>
                                        <input type="file" name="..."  accept=".xls,.xlsx"> </span>
                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                                </div>
                            </div>
                        </div></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="input-group input-large">
                                    <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                        <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                        <span class="fileinput-filename"> </span>
                                    </div>
                                    <span class="input-group-addon btn default btn-file">
                                        <span class="fileinput-new"> Seleccione la Base de Datos  </span>
                                        <span class="fileinput-exists"> Cambiar </span>
                                        <input type="file" name="..."  accept=".xls,.xlsx"> </span>
                                    <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">

                        </div>
                    </div>
                    <!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->
                    <?php
                    extract($_POST);
                    if ($action == "upload") {
                        //cargamos el archivo al servidor con el mismo nombre
                        //solo le agregue el sufijo bak_ 
                        $archivo = $_FILES['excel']['name'];
                        $tipo = $_FILES['excel']['type'];
                        $destino = "bak_" . $archivo;
                        if (copy($_FILES['excel']['tmp_name'], $destino)) {
                            echo "Archivo Cargado Con Éxito";
                        } else {
                            echo "Error Al Cargar el Archivo";
                        }
                        if (file_exists("bak_" . $archivo)) {
                            /** Clases necesarias */
                            require_once('Classes/PHPExcel.php');
                            require_once('Classes/PHPExcel/Reader/Excel2007.php');
                            // Cargando la hoja de cálculo
                            $objReader = new PHPExcel_Reader_Excel2007();
                            $objPHPExcel = $objReader->load("bak_" . $archivo);
                            $objFecha = new PHPExcel_Shared_Date();
                            // Asignar hoja de excel activa
                            $objPHPExcel->setActiveSheetIndex(0);
                            //conectamos con la base de datos 
                            $cn = mysql_connect("localhost", "root", "02320314") or die("ERROR EN LA CONEXION");
                            $db = mysql_select_db("prueba", $cn) or die("ERROR AL CONECTAR A LA BD");
                            // Llenamos el arreglo con los datos  del archivo xlsx
                            for ($i = 1; $i <= 47; $i++) {
                                $_DATOS_EXCEL[$i]['nombre'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
                                $_DATOS_EXCEL[$i]['direccion'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
                            }
                        }
                        //si por algo no cargo el archivo bak_ 
                        else {
                            echo "Necesitas primero importar el archivo";
                        }
                        $errores = 0;
                        //recorremos el arreglo multidimensional 
                        //para ir recuperando los datos obtenidos
                        //del excel e ir insertandolos en la BD
                        foreach ($_DATOS_EXCEL as $campo => $valor) {
                            $sql = "INSERT INTO datos VALUES (NULL,'";
                            foreach ($valor as $campo2 => $valor2) {
                                $campo2 == "direccion" ? $sql .= $valor2 . "');" : $sql .= $valor2 . "','";
                            }
                            echo $sql;
                            $result = mysql_query($sql);
                            if (!$result) {
                                echo "Error al insertar registro " . $campo;
                                $errores += 1;
                            }
                        }
                        echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>";
                        //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
                        unlink($destino);
                    }
                    ?>

                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <span>Filtros:  </span><br>
                            </li><br>
                            <li>Nivel Socieconomico:  <label id="nse"> All</label></li><br> 
                            <li>Genero:  <label id="gen"> All</label></li>  <br>
                            <li>Edad:  <label id="edad"> All</label></li>  <br>
                            <li>Zonas y Municipios:  <label id="zonasymun"> All</label></li><br>  
                        </ul>
                    </div>

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3>
                    <small>Estadistica descriptiva</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat yellow">
                                <div class="visual">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="78.3">0</span>%
                                    </div>
                                    <div class="desc">Actualmente estudia </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="44.7">0</span>% </div>
                                    <div class="desc"> IPM segun CNA</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="height:120px;">
                            <div class="dashboard-stat green-haze" >
                                <div class="visual">
                                    <i class="fa fa-plus-circle"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="96.1">0</span>%
                                    </div>
                                    <div class="desc"> Porcentaje de Afiliacion a Salud</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-tint"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
                                        <span data-counter="counterup" data-value="95.1"></span>% </div>
                                    <div class="desc"> Acceso al servicio de agua  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DASHBOARD STATS 1-->
                    <div class="row">


                        <div class="col-md-6">
                            <div class="portlet box dark " style="height: 387px;" >
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject bold uppercase font-gray">Participación del área sembrada por tipo de cultivo</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div id="placeholder" class="chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portlet box dark " style="height: 387px;">
                                <div class="portlet-title" >
                                    <div class="caption">
                                        <span class="caption-subject  bold uppercase font-gray">Solicitud de Crédito Agropecuario</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div id="placeholder2" class="chart"></div>
                                </div><br>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6" >
                            <!-- END SAMPLE TABLE PORTLET-->
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box dark " >
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-pencil-square-o"></i>Sabe leer y escribir </div>
                                </div>
                                <div class="portlet-body ">
                                    <div class="table-scrollable " style="height: 280px;overflow: auto;">   
                                        <table class="table table-striped table-bordered table-hover order-column" >
                                            <thead class="fixed">
                                                <tr>
                                                    <th scope="col" > &nbsp;#&nbsp;&nbsp;&nbsp;&nbsp; </th>
                                                    <th scope="col"> Si </th>
                                                    <th scope="col"> No </th>

                                                </tr>                                                   </tr>
                                            </thead>       <tbody>                                              
                                                <tr> <td>De 10 a 18 años</td><td>70%</td><td>30%</td></tr>
                                                <tr> <td>De 18 a 24 años</td><td>84%</td><td>12%</td></tr>
                                                <tr> <td>De 24 a 35 años</td><td>92%</td><td>8%</td></tr>
                                                <tr> <td>De 36 a 45 años</td><td>89%</td><td>11%</td></tr>
                                                <tr> <td>De 45 a 70 años</td><td>65%</td><td>35%</td></tr>
                                                <tr> <td>70 o mas años </td><td>73%</td><td>27%</td></tr>
                                            </tbody>                                           
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                        <div class="col-md-6">
                            <<div class="portlet box dark " >
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-pencil-square-o"></i>Sabe leer y escribir </div>
                                </div>
                                <div class="portlet-body ">
                                    <div class="table-scrollable " style="height: 280px;overflow: auto;">   
                                        <table class="table table-striped table-bordered table-hover order-column" >
                                            <thead class="fixed">
                                                <tr>
                                                    <th scope="col" > &nbsp;#&nbsp;&nbsp;&nbsp;&nbsp; </th>
                                                    <th scope="col"> Si </th>
                                                    <th scope="col"> No </th>

                                                </tr>                                                   </tr>
                                            </thead>       <tbody>                                              
                                                <tr> <td>De 10 a 18 años</td><td>70%</td><td>30%</td></tr>
                                                <tr> <td>De 18 a 24 años</td><td>84%</td><td>12%</td></tr>
                                                <tr> <td>De 24 a 35 años</td><td>92%</td><td>8%</td></tr>
                                                <tr> <td>De 36 a 45 años</td><td>89%</td><td>11%</td></tr>
                                                <tr> <td>De 45 a 70 años</td><td>65%</td><td>35%</td></tr>
                                                <tr> <td>70 o mas años </td><td>73%</td><td>27%</td></tr>
                                            </tbody>                                           
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="portlet box dark">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject  bold uppercase font-gray">Solicitud de Crédito Agropecuario</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div id="container"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END CONTENT BODY -->
        </div>
    </div>

    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>

    <!-- END QUICK SIDEBAR -->

</div>

<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2016 Dataplus Colombia S.A.S.

    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
<script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- Ho9las
-->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!--asffga
-->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="../assets/pages/scripts/index.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

<!--
<script src="../assets/pages/scripts/table-datatables-scroller.min.js" type="text/javascript"></script>
 <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
-->

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script type="text/javascript">

    $(function () {
        // Example Data

        //var data = [
        //	{ label: "Series1",  data: 10},
        //	{ label: "Series2",  data: 30},
        //	{ label: "Series3",  data: 90},
        //	{ label: "Series4",  data: 70},
        //	{ label: "Series5",  data: 80},
        //	{ label: "Series6",  data: 110}
        //];

        //var data = [
        //	{ label: "Series1",  data: [[1,10]]},
        //	{ label: "Series2",  data: [[1,30]]},
        //	{ label: "Series3",  data: [[1,90]]},
        //	{ label: "Series4",  data: [[1,70]]},
        //	{ label: "Series5",  data: [[1,80]]},
        //	{ label: "Series6",  data: [[1,0]]}
        //];

        //var data = [
        //	{ label: "Series A",  data: 0.2063},
        //	{ label: "Series B",  data: 38888}
        //];

        // Randomly Generated Data

        var data = [
            {label: " Permanentes (74.8%)", data: 74.8},
            {label: " Asociado (9.2%)", data: 9.2},
            {label: " Transitorios (16.0)", data: 16.0}
        ];
        var placeholder = $("#placeholder");
        placeholder.unbind();
        $.plot(placeholder, data, {
            series: {
                pie: {
                    show: true
                }
            },
            legend: {
                show: false
            },
            colors: ["#24B200", "#000", "#C40000"
            ]
        });
        var data2 = [
            {label: " Si (11%)", data: 11},
            {label: " No (89%)", data: 89}
        ];
        var placeholder2 = $("#placeholder2");
        placeholder2.unbind();
        $.plot(placeholder2, data2, {
            series: {
                pie: {
                    show: true
                }
            },
            legend: {
                show: false
            },
            colors: ["#24B200", "#000"
            ]
        });
    });

    // A custom label formatter used by several of the plots

    function labelFormatter(label, series) {
        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }

</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
    $(function () {
        // Set up the chart
        var chart = new Highcharts.Chart({
            colors: ["#24B200"],
            chart: {
                renderTo: 'container',
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 0,
                    beta: 0,
                    depth: 20,
                    viewDistance: 25
                }
            },
            title: {
                text: 'Solicitud de Credito realizada por los productores'
            },
            subtitle: {
                text: 'Tamaño en Hectareas'
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            }, xAxis: {
                categories: ["De 1.000 y más", "De 500 a < 1.000", "De 100 a < 500", " De 50 a < 100",
                    "De 10 a < 50", " De 5 a < 10", "< 5"]
            },
            yAxis: {
                title: {
                    text: "Porcentajes"
                            //,
                            //categories: ["0","20","40","60","80","100"]
                }
            },
            series: [{
                    name: 'Tamaño en Areas',
                    data: [0.2, 0.3,
                        2.5, 3.1, 15.1, 11.5, 67.2]
                }]
        });

        /*function showValues() {
         $('#alpha-value').html(chart.options.chart.options3d.alpha);
         $('#beta-value').html(chart.options.chart.options3d.beta);
         $('#depth-value').html(chart.options.chart.options3d.depth);
         }*/

        // Activate the sliders
        $('#sliders input').on('input change', function () {
            chart.options.chart.options3d[this.id] = this.value;
            showValues();
            chart.redraw(false);
        });

        showValues();
    });
</script>

<!--
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        
       language:{
    "emptyTable":       "No data available in table",
    "info":             "",
    "infoEmpty":        "No hay Coincidencias",
    "infoFiltered":     "(Filtrados de _MAX_ en total)",
    "infoPostFix":      "",
    "lengthMenu":       "Show _MENU_ entries",
    "loadingRecords":   "Loading...",
    "processing":       "Processing...",
    "search":           "Buscar:",
    "zeroRecords":      "No matching records found",
    
    "aria": {
        "sortAscending":    ": activate to sort column ascending",
        "sortDescending":   ": activate to sort column descending"
    },
    "decimal":          "",
    "thousands":        ","
},"bPaginate": false,
       dom: 'Bfrtip', 
       "scrollY": 200,
        "scrollX": true,
        "columns": [
    { "orderable": true },
    null,
    null
  ],
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>   -->

<script  src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
</script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js">
</script>
<script   src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
</script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
</script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
</script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js">
</script>

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script> 
</body>

</html>