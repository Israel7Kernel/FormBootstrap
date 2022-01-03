<?php
    // require_once "conexion/conexionMySQL.php";
    // $conxBD = conxMySQL();

    // if(mysqli_connect_errno())
    // {
    //     echo "<script> alert('ERROR DE CONEXIÓN CON BD'); </script>";
    // }else{
    //     echo "<script> alert('CONEXIÓN EXITOSA'); </script>";
    // }
?>  

<html>
    <head>
        <!-- ____________________________________________________________________ 
            |___________________ RUTAS DE ESTILO Y RECURSOS _____________________|
        -->

        <!-- <link rel="stylesheet" type="text/css" href="../bootstrap.5.1.3/css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="../library/libraryTable/css/buttons.dataTables.min.css" />
        <!-- <link rel="stylesheet" type="text/css" href="../library/libraryTable/css/dataTables.bootstrap4.min.css"> -->
        <link rel="stylesheet" type="text/css" href="../library/libraryTable/css/style.css" />
    </head>
<boody>

<!-- INIICIO DE TABLA BASE PCODED -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="page-header card">
                    </div>

                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>TABLA GENERAL</h5>
                                            <!-- BOTONES SELECCIÓN MORE LESS -->
                                            <!-- <div id="divmore5" class="divmore"> </div>
                                                 <div id="divless5" class="divless"> </div> -->

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="single-select"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th> ID ARTICULO </th>
                                                            <th> PRODUCTO </th>
                                                            <th> COSTO COMPRA </th>
                                                            <th> UNIDAD </th>
                                                            <th> CONTENIDO </th>
                                                            <th> CANTIDAD </th>
                                                            <th> SELECCIONAR </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
            <!-- __________________________________________________________________________________________________
                |______________________________ CONSULTA DE TABLA DE VENTAS _____________________________________|
            -->
<?php 
                
                    /* CAMBIAR FORMATO DE CARACTERES ESPECIALES */
                    // $CNX =  mysqli_set_charset($coxMySQL,'utf8');
                    // $result = mysqli_query($coxMySQL, $SQLIST) or die (mysqli_error($coxMySQL));
                
                    // //CICLO GENERACIÓN DE RESULTADO DE TABLA GENERACIÓN DE ID UINICO PARA CADA CELDA
                    // while($row = mysqli_fetch_array($result)) 
                    // {

                    ?>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="codigo"> DATO TEST 001</td>
                                                            <td> DATO TEST 002 </td>
                                                            <td> DATO TEST 003 </td>
                                                            <td> DATO TEST 004 </td>
                                                            <td> DATO TEST 005 </td>
                                                            <td> DATO TEST 006 </td>
                                                            <td> DATO TEST 007 </td>
                                                        </tr>
                                                        <?php
                            // }
                            // mysqli_close($coxMySQL);
                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th> ID ARTICULO </th>
                                                            <th> PRODUCTO </th>
                                                            <th> COSTO COMPRA </th>
                                                            <th> UNIDAD </th>
                                                            <th> CONTENIDO </th>
                                                            <th> CANTIDAD </th>
                                                            <th> SELECCIONAR </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- TERMINA TABLA BASE PCODED -->

    </boody>
</html>

<!-- CARGA BLIOTECAS GENERALES USO DE TABLAS -->
<script src="../js/jquery-3.6.0.min.js "></script>

<script src="../library/libraryTable/js/jquery.dataTables.min.js"></script>
<script src="../library/libraryTable/js/dataTables.buttons.min.js"></script>
<script src="../library/libraryTable/js/dataTables.select.min.js"></script>
<script src="../library/libraryTable/js/dataTables.bootstrap4.min.js"></script>
<script src="../library/libraryTable/js/select-custom.js"></script>
<!-- <script src="../library/libraryTable/js/script.js"></script> -->
