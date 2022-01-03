<?php

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="../bootstrap.5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../font/font/bootstrap-icons.css" rel="stylesheet">

    <!-- <link rel="stylesheet " href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css "> -->

</head>

<body class="bg-light">
    <div class="container">

        <!-- <div class="py-5 text-center ">
            <img class="d-block mx-auto mb-4 " src="/docs/4.3/assets/brand/bootstrap-solid.svg " alt=" " width="72 " height="72 ">
            <h2>TITULO PRESENTACIÓN</h2>
            <p class="lead ">Campo de texto presentación</p>
        </div> -->

        <div class="py-5 text-center">
        </div>

        <!-- ALINEAMIENTO CENTRAL -->
        <div class="row justify-content-center">
            <!-- FORMA PARTE DERECHA -->
            <!-- <div class="col-md-4 order-md-2 mb-4 ">
    
                <h4 class="d-flex justify-content-between align-items-center mb-3 ">
                    <span class="text-muted ">Your cart</span>
                    <span class="badge badge-secondary badge-pill ">3</span>
                </h4>
                
                <ul class="list-group mb-3 ">
                    <li class="list-group-item d-flex justify-content-between lh-condensed ">
                        <div>
                            <h6 class="my-0 ">Product name</h6>
                            <small class="text-muted ">Brief description</small>
                        </div>
                        <span class="text-muted ">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed ">
                        <div>
                            <h6 class="my-0 ">Second product</h6>
                            <small class="text-muted ">Brief description</small>
                        </div>
                        <span class="text-muted ">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed ">
                        <div>
                            <h6 class="my-0 ">Third item</h6>
                            <small class="text-muted ">Brief description</small>
                        </div>
                        <span class="text-muted ">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light ">
                        <div class="text-success ">
                            <h6 class="my-0 ">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success ">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between ">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                
                <form class="card p-2 ">
                    <div class="input-group ">
                        <input type="text " class="form-control " placeholder="Promo code ">
                        <div class="input-group-append ">
                            <button type="submit " class="btn btn-secondary ">Redeem</button>
                        </div>
                    </div>
                </form>
            </div> -->

            <!-- SEPARACIÓN PRIMER DIV -->
            <div class="col-md-10 order-md-1">
                <h4 class="mb-3 "> CLIENTE </h4>
                <form class="needs-validation " novalidate>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="paterno">Apellido Paterno</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="paterno" placeholder="" value="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    El siguiente campo es obligatorio.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="materno">Apellido Materno</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="materno" placeholder="" value="" required>
                                <div class="invalid-feedback ">
                                    El siguiente campo es obligatorio.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 ">
                            <label for="nombre "> Nombre(s) </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                </div>
                                <input type="text " class="form-control " id="nombre " placeholder="" value="" required>
                                <div class="invalid-feedback ">
                                    El siguiente campo es obligatorio.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="RFC "> RFC </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="RFC" placeholder="" value="" required>
                                <div class="invalid-feedback ">
                                    El siguiente campo es obligatorio.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="iduser"> ID Usuario </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-fill"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="iduser" placeholder="" value="" required>
                                <div class="invalid-feedback ">
                                    El siguiente campo se genera automaticamente.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email ">Correo</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ">
                                        <i class="bi bi-at"></i>
                                    </span>
                                </div>
                                <input type="text " class="form-control" id="email" placeholder="Correo" required>
                                <div class="invalid-feedback " style="width: 100%;">
                                    El siguiente campo es obligatorio.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email ">Telefono</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ">
                                        <i class="bi bi-at"></i>
                                    </span>
                                </div>
                                <input type="text " class="form-control" id="email" placeholder="Telefono" required>
                                <div class="invalid-feedback " style="width: 100%;">
                                    El siguiente campo es obligatorio.
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4 ">
                    <h4 class="mb-3"> DOMICILIO </h4>

                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <label for="calle">Calle</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-house"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="calle" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    El siguiente campo es obliogatorio.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="numb">Numero</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-house"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="numb" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    El siguiente campo es obliogatorio.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="numint">Numero Int</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-house"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="numint" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    El siguiente campo es obliogatorio.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="col">Colonia</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-house"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="col" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    El siguiente campo es obliogatorio.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="cp">C.P.</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-house"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="cp" placeholder="" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    El siguiente campo es obliogatorio.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <label for="estado">Estado</label>
                            <div class="input-group input-group-dropdown">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-house"></i>
                                    </span>
                                </div>
                                <select id="seldepa" class="input-group-prepend"> 
                                    <option type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estado</option> 
                                    <option id="" class="dropdown-item" value="1"> Estado 001</option> 
                                    <option id="" class="dropdown-item" value="2"> Estado 002</option> 
                                    <option id="" class="dropdown-item" value="3"> Estado 003</option> 
                                    <option id="" class="dropdown-item" value="4"> Estado 004</option> 
                                    <option id="" class="dropdown-item" value="5"> Estado 005</option> 
                                    <option id="" class="dropdown-item" value="6"> Estado 006</option> 
                                </select>
                                <input id="indepa" type="text" class="form-control" placeholder="Elegir Departamento" readonly="">
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <label for="estado">Municipio</label>
                            <div class="input-group input-group-dropdown">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-house"></i>
                                    </span>
                                </div>
                                <select id="seldepa" class="input-group-prepend"> 
                                    <option type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Municipio</option> 
                                    <option id="" class="dropdown-item" value="1"> Estado 001</option>
                                    <option id="" class="dropdown-item" value="1"> Estado 002</option>
                                    <option id="" class="dropdown-item" value="1"> Estado 003</option>
                                    <option id="" class="dropdown-item" value="1"> Estado 004</option>
                                    <option id="" class="dropdown-item" value="1"> Estado 005</option>
                                </select>
                                <input id="indepa" type="text" class="form-control" placeholder="Elegir Departamento" readonly="">
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4 ">
                    <hr class="mb-4 ">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </div>

        <!-- CREACIÓN FOOTER -->
        <footer class="my-5 pt-5 text-muted text-center text-small ">
            <p class="mb-1 ">&copy; 2021 Chocolates Costanzo</p>
            <ul class="list-inline ">
                <li class="list-inline-item "><a href="# ">Privacidad</a></li>
                <li class="list-inline-item "><a href="# ">Terminos</a></li>
                <li class="list-inline-item "><a href="# ">Soporte</a></li>
            </ul>
        </footer>
    </div>

    <script src="../js/jquery-3.6.0.min.js "></script>
    <!-- <script src="../js/form-validation.js "></script> -->
</body>
</html>