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
                        <a href="empleados.php">
                         <i class="nc-icon nc-bank"></i>
                          <p>Empleados</p>
                        </a>  
                      </li>
                      <li class="active ">
                        <a href="">
                          <i class="nc-icon nc-bank"></i>
                          <p>Conceptos</p>
                        </a>
                      </li>
                      <li class="active ">
                        <a href="">
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
                        <a class="navbar-brand" href="javascript:;">Empresa Actual  :</a>
                </div>
            </nav>
              
        <div class="content"> 
        <div class="row">
          <div class="col-md-8">
            <div class="card card-user" >    <!--</div>class="card card-user">-->
            <div class="tab" class="card card-user" class="card-title">
                <button class="tablinks" onclick="openCity(event, 'DatosFiscales')">Datos Fiscales</button>
                <button class="tablinks" onclick="openCity(event, 'Certificados SAT')">Certificados SAT</button>
                <button class="tablinks" onclick="openCity(event, 'Logos')">Agregar Logo</button>
                <button class="tablinks" onclick="openCity(event, 'Timbrado')">Parametros de Timbrado</button>

            </div> 
                 <!--<h5 class="card-title">Mis Datos Fiscales</h5>-->
            </div>
<!--Apartado de mis Datos Fiscales-->
            <div id="DatosFiscales" class="tabcontent">
                <h5 class="card-title">Mis Datos Fiscales</h5>
              <div class="card-body" id="Mis Datos Fiscales" class="tabcontent"> <!--Pestaña de DAtos Fiscales -->
                <form  action="grabadf.php" method="POST">
                  <div class="row">     <!--  Renlon de la Empresa-->
                    <div class="col-md-5 pr-1">
                       <input type="hidden" name="numero" value=""> 
                       <input type="hidden" Name="usuario" valur="">
                       <input type="hidden" Name="password" valur="">
                      <div class="form-group">
                       <label>Empresa:</label>
                       
                       <input type="text" class="form-control" disabled=""  placeholder="Company" value="">
                         
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>R.F.C.</label>
                        <input type="text" class="form-control" disabled="" placeholder="Username" value="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="correo" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">  <!--Rengon del Conacto-->
                    <div class="col-md-8 pr-1">
                      <div class="form-group">
                        <label>Contacto</label>
                        <input type="text" class="form-control" name="contacto" placeholder="Company" value="">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">     <!-- Renglon de Domicilio-->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Domicilio</label>
                        <input type="text" class="form-control" name="ccalle"  value="">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No.Exterior</label>
                          <input type="text" class="form-control" name="cnoext"  value="">
                        </div>
                      </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No.Inteior</label>
                          <input type="text" class="form-control" name="cnoint"  value="">
                        </div>
                     </div>
                  </div>
                  <div class="row">    <!-- Renglon de Colonia-->
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Colonia</label>
                        <input type="text" class="form-control" name="colonia"  value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Cod.Postal</label>
                        <input type="text" class="form-control" name="cdpostal" value="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Ciudad, Poblacion o Localidad</label>
                        <input type="text" class="form-control" name="ciudad" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">    <!-- Renglon del Municipio-->
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Municipio / Delegacion</label>
                        <input type="text" class="form-control" name="municipio" placeholder="Municipio" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Estado:</label>
                        <input type="text" class="form-control" name="estado" placeholder="Estado" value="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Pais:</label>
                        <input type="text" class="form-control" name="pais"placeholder="Pais" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">    <!-- Renglon del Regimen-->
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Regimen en el cual Tributa el Contribuyente (Requerido)</label> <br>
                        <select name="regimen" class="form-control">
                            <option value="603">603  -  Personas Morales con Fines no Lucrativos</option>
                            <option value="605">605  -  Sueldos y Salarios e ingresos Asimilados a Salarios</option>
                            <option value="606">606  -  Arrendamiento</option>
                            <option value="608">608  -  Demas Ingresos</option>
                            <option value="609">609  -  Consolidación</option>
                            <option value="610">610  -  Residentes en el Extranjero sin Establecimiento Permanente en México</option>
                            <option value="611">611  -  Ingresos por Dividendos (socios y accionistas)</option>
                            <option value="612">612  -  Personas Fisicas con Actividades Empresariales y Profesionales</option>
                            <option value="614">614  -  Ingresos por Intereses</option>
                            <option value="616">616  -  Sin Obligaciones fiscales</option>
                            <option value="620">620  -  Sociedades Cooperativas de Producción que optan por diferir sus ingresos</option>
                            <option value="621">621  -  Incorporación Fiscal</option>
                            <option value="622">622  -  Actividades Agricolas, Ganaderas, Silvicolas y Pesqueras</option>
                            <option value="623">623  -  Opcional para grupos de Sociedades</option>
                            <option value="624">624  -  Coordinados</option>
                            <option value="628">628  -  Hidrocarburos</option>
                            <option value="607">607  -  Régimen de Enagenación o Adquisición de Bienes</option>
                            <option value="629">629  -  De los Regimenes Fiscales Preferentes y de las Empresas Multinacionales</option>
                            <option value="630">630  -  Enajenación de Acciones en Bolsa de Valores</option>
                            <option value="615">615  -  Régimen de los ingresos  por obtencion de premios</option>
                          </select>
                        <!--<input type="text" class="form-control" placeholder="Municipio" value="Melbourne">-->
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Telefono:</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Lugar de Expedicion: (Solo Codigo Postal)</label>
                          <input type="text" class="form-control" name="lugarexp" placeholder="Lugar de Expedicion" value="">
                        </div>
                      </div>
                  </div>
                 
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Actualizar Información DF </button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
<!--Apartado de Mis Certificados SAT--> 
          <div id="Certificados SAT" class="tabcontent">
            <h5 class="card-title">Certificados SAT</h5>
          <div class="card-body" id="Mis Datos Fiscales" class="tabcontent"> <!--Pestaña de DAtos Fiscales -->
            <form>
              <div class="row">     <!--  Renlon de folio y serie-->
                <div class="col-md-5 pr-1">
                  <fieldset>
                    <legend>Control Interno</legend>
                    <div class="row">     <!-- registro de serie del timbre fiscal-->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Serie</label>
                        <input type="text" class="form-control" placeholder="Serie" value="">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>No.Folio</label>
                          <input type="text" class="form-control" placeholder="Num.folio" value="">
                        </div>
                    </div>
                    </div>
                  </fieldset>
                </div>  
              </div>
              <div class="row">     <!--  Renlon de Clave Certificado-->
                <div class="col-md-5 pr-1">
                    <div class="row">     <!-- Renglon de Domicilio-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Clave Privada (Archivo .Key)</label>
                        <input type="text" class="form-control" placeholder="Clave de sellos digitales" value="">
                      </div>
                    </div>
                    </div>
                </div>  
              </div>
              <div class="row">     <!--  Renlon de KEY del Certificado-->
                <div class="col-md-5 pr-1">
                    <div class="row">     
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Selecciona Archivo .KEY</label>
                        <input type="button" class="btn" placeholder="Selecciona Archivo .KEY" value="Selecciona Archivo .KEY">
                       <!--<input type="text" class="form-control" placeholder="Clave de sellos digitales" value="">-->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Ruta de Archivo</label>
                        <input type="text" class="form-control" disabled="" placeholder="" value="">
                      </div>
                    </div>
                    </div>
                </div>  
              </div>
              <div class="row">     <!--  Renlon de CER del  Certificado-->
                <div class="col-md-5 pr-1">
                    <div class="row">    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Selecciona Archivo .CER</label>
                        <input type="button" class="btn" placeholder="Selecciona Archivo .CER" value="Selecciona Archivo .CER">
                       <!--<input type="text" class="form-control" placeholder="Clave de sellos digitales" value="">-->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Ruta de Archivo</label>
                        <input type="text" class="form-control" disabled="" placeholder="" value="">
                      </div>
                    </div>
                    </div>
                </div>  
              </div>
              <div class="row">     <!--  Validar Certificado de Sellos-->
                <div class="col-md-5 pr-1">
                    <div class="row">    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Valida Certificado</label>
                        <input type="button" class="btn" value="Valida Certificado ">
                       <!--<input type="text" class="form-control" placeholder="Clave de sellos digitales" value="">-->
                      </div>
                    </div>
                    </div>
                </div>  
              </div>

              

              
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Actualizar Información</button>
                </div>
              </div>
            </form>
          </div>
      </div>
<!--Apartado de Logos Personales--> 
      <div id="Logos" class="tabcontent">
          <h5 class="card-title">Agrega tu logo</h5>
          <div class="card-body" id="Logos" class="tabcontent"> <!--Pestaña de Logos -->
            <form>
              
            <div class="row">     <!--  Renlon de KEY del Certificado-->
              <div class="col-md-3 pr-1">
                    <div class="row">     
                       <div class="col-md-6">
                          <div class="form-group">
                            <label>Selecciona tu Logo</label>
                            <input type="button" class="btn" value="Selecciona tu Logo">
                          </div>
                       </div>
                    </div>
                </div>  
              <div class="col-md-3 pr-1">
                  <div class="row">     
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Eliminar Logo </label>
                        <input type="button" class="btn"  value="Eliminar Logo">
                      </div>
                    </div>
                  </div>
              </div> 
            </div>
                <div class="row">     <!--  Renlon de CER del  Certificado-->
                  <div class="col-md-12 pr-1">
                    <div class="row">    
                      <div class="col-md-12">
                        <div class="form-group">
                         <fieldset>
                          <legend>Logo de la Empresa</legend>
                            <div class="row">     <!-- Renglon de Domicilio-->
                              <div class="col-md-12">
                                <div class="form-group">
                                  <img src="./imagenes/lexsoft.bmp" width="500" height="300">
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
        </div>
        </div>
    </div>  
  </div>
   

  
  <div class="row">
    <div class="update ml-auto mr-auto">
      <button type="submit" class="btn btn-primary btn-round">Actualizar Información</button>
    </div>
  </div>
</form>
</div>
</div>   

<!--Datos Requeridos para Timbrar-->
<div id="Timbrado" class="tabcontent">
  <h5 class="card-title">Parametros Importantes para el Timbrado</h5>
<div class="card-body" id="Timbrado" class="tabcontent"> <!--Pestaña de DAtos Fiscales -->
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
          <select name="example" class="form-control" >
            <option value="1">PUE - Pago en una sola exhibición</option>
            <option value="2">PPD - Pago en parcialidades o diferido</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-md-6 pr-1">
        <div class="form-group">
          <label>Clave del Producto</label>
              <input type="text" class="form-control" placeholder="Clave Producto" value="">  
        </div>
      </div>
    </div>

    <div class="row">     <!-- Renglon de Domicilio-->
      <div class="col-md-4">
        <div class="form-group">
          <label>Clave Unidad:</label>
          <input type="text" class="form-control" placeholder="Clave Unidad:" value="">
        </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
              <label>Descripción</label>
            <input type="text" class="form-control" placeholder="Descripcion clave" value="">
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
        <button type="submit" class="btn btn-primary btn-round">Actualizar Información</button>
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
  <!--   Core JS Files   -->
  <script src="../js/core/jquery.min.js"></script>
  <script src="../js/core/popper.min.js"></script>
  <script src="../js/core/bootstrap.min.js"></script>
  <script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>  
   
</body>
</html>
