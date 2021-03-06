
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
<!--<link href="./css/stylmenu.css" rel="stylesheet"> -->
<link rel="stylesheet" media="screen and (max-width: 375px)" href="./css/mobile.css">
    <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.css" rel="stylesheet">
  <link href="./css/paper-dashboard.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/8b4681d23d.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sassy+Frass&family=Yuji+Boku&display=swap" rel="stylesheet">
  <script src="./js/tabs.js"></script>
  <link href="./css/tabs.css" rel="stylesheet">
  
</head>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.lexsoft.com.mx" class="simple-text logo-mini">
                  <div class="logo-image-small">
                    <img src="./imagenes/lexsoft.bmp" width="500" height="50">
                  </div>
                  <!-- <p>CT</p> -->
                </a>
                <a href="https://www.lexsoft.com.mx" class="simple-text logo-normal">
                  Creative Tim
                  <!-- <div class="logo-image-big">
                    <img src="../assets/img/logo-big.png">
                  </div> -->
                </a>
              </div>
              <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="empresas.php">
                          <i class="nc-icon nc-bank"></i>
                          <p>Parametros</p>
                        </a>
                      </li>
                      <li class="active ">
                        <a href="Empleados.php">
                          <i class="nc-icon nc-bank"></i>
                          <p>Empleados</p>
                        </a>
                      </li>
                      <li class="active ">
                        <a href="Empleados.php">
                          <i class="nc-icon nc-bank"></i>
                          <p>Conceptos</p>
                        </a>
                      </li>
                      <li class="active ">
                        <a href="Empleados.php">
                          <i class="nc-icon nc-bank"></i>
                          <p>Reportes</p>
                        </a>
                      </li>
                </ul>
              </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid"> 
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                          <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                          </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Empresa</a>
                </div>
            </nav>
              
        <div class="content"> 
        <div class="row">
          <div class="col-md-8">
            <div class="card card-user" >    <!--</div>class="card card-user">-->
                  <h5 class="card-title">Empleados</h5>
            </div>
<!--Apartado Empleados-->
            <div id="DatosFiscales" >
                <h5 class="card-title"></h5>
              <div class="card-body" id="Mis Datos Fiscales" > <!--Pesta??a de DAtos Fiscales -->
                <form>
                <table class="table table-hover">
                
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">R.F.C.:</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">N.S.S.</th>
                    <th scope="col"><p class="texto-vertical">Editar</p></th>
                  </tr>
                </thead>
                <tbody>
                   
                          <tr>
                              <td>0001</td>
                              <td>xxxx010101xx1</td>
                              <td>Empleados Prueba 1</td>
                              <td>32814578525</td>
                              <td><input type="submit" Value="Editar"></td>
                              <td><button class="btn btn-primary btn-round">Editar</button></td>
                                                            
                          </tr>
                          <tr>
                              <td>0002</td>
                              <td>xxaa020202xx1</td>
                              <td>Empleados Prueba 2</td>
                              <td>32814578525</td>
                              <td><input type="submit" Value="Editar"></td>
                              <td><button class="btn btn-primary btn-round">Editar</button></td>
                                                            
                          </tr>
                </tbody>
              </table>
                  
              
                </form>
                
              </div>
          </div>
<!--Apartado de Mis Certificados SAT--> 
          
<!--Apartado de Logos Personales--> 
      

<!--Datos Requeridos para Timbrar-->
<div id="Timbrado" class="tabcontent">
  <h5 class="card-title">Parametros Importantes para el Timbrado</h5>
<div class="card-body" id="Timbrado" class="tabcontent"> <!--Pesta??a de DAtos Fiscales -->
  <form>
    <div class="row">     
      <div class="col-md-3 pr-1">
          
        <div class="form-group">
          <label>Tipo de Comprobante</label>
          <input type="text" class="form-control" placeholder="N" value="">
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-md-6 pr-1">
        <div class="form-group">
          <label>Metodo de Pago</label>
          <select name="example" class="form-control">
            <option value="1">PUE - Pago en una sola exhibici??n</option>
            <option value="2">PPD - Pago en parcialidades o diferido</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-md-6 pr-1">
        <div class="form-group">
          <label>Clave del Producto</label>
              <input type="text" class="form-control" placeholder="Clave Producto" value="84111505  Servicios de Contabilidad de sueldos y salarios">  
        </div>
      </div>
    </div>

    <div class="row">     <!-- Renglon de Domicilio-->
      <div class="col-md-4">
        <div class="form-group">
          <label>Clave Unidad:</label>
          <input type="text" class="form-control" placeholder="Clave Unidad:" value="ACT">
        </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
              <label>Descripci??n</label>
            <input type="text" class="form-control" placeholder="Descripcion clave" value="Pago de Nomina">
          </div>
        </div>
      
    </div>
    <div class="row">    <!-- Renglon de Colonia-->
      <div class="col-md-4 pr-1">
        <div class="form-group">
          <label>Tipo de Nomina</label>
          <select name="tipoNom" class="form-control">
            <option value="1">O - Nomina ordinaria</option>
            <option value="2">E - Nomina extraordinaria</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">    <!-- Renglon de Colonia-->
      <div class="col-md-4 pr-1">
        <div class="form-group">
          <label>Riesgo Patron</label>
          <select name="riesgoPat" class="form-control">
            <option value="1"></option>
            <option value="2"></option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">    <!-- Renglon de Colonia-->
      <div class="col-md-4 pr-1">
        <div class="form-group">
          <label>Salario Minimo Vigente:</label>
          <input type="text" class="form-control" placeholder="Salario Minimo" value="">
        </div>
      </div>
    </div>
    <div class="row">    <!-- Renglon de Colonia-->
      <div class="col-md-4 pr-1">
        <div class="form-group">
          <label>Valor UMA:</label>
          <input type="text" class="form-control" placeholder="Valor UMA" value="">
        </div>
      </div>
    </div>

   
    
    
    <div class="row">
      <div class="update ml-auto mr-auto">
        <button type="submit" class="btn btn-primary btn-round">Actualizar Informaci??n</button>
      </div>
    </div>
  </form>
</div>
</div>




          </div>
          
        </div>
        
      </div>
     
      
     </div>
    </div>
    
    
</body>
</html>
