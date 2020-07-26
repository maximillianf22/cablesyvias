   @extends('layouts.web')

   @section('content')
  
   @include('components.navbar')

   @include('components.sections.header')
      <!--     *********     Logo Clientes    -->
      <div class="container-fluid" style="">
        <div class="row our-clients">
          <div class="mx-auto">
            <div class="container-fluid">
              <h3 class="text-center">Alguno de Nuestros Clientes</h3>
            </div>
            <img class="w-100" src="{{asset('images/clientes.jpg')}}" alt="" />
          </div>
        </div>
        </div><br><br><br>
      <!--     *********    Tarjeta de Opciones  -->
      <section class="blogs-6">
        <div class="container">
          <div class="row">
            <div class=" container mx-auto mb-3">
              <h3 class="text-center">Tenemos una solución POS para cada tipo de negocio</h3>
              <h6 class="text-center">Selecciona tu tipo de negocio y descubre todas las funcionalidades</h6>
            </div>
            <div class="col-lg-6 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('./assets/img/theme/person1.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 mx-auto text-center">
                    <h2 class="card-title mx-auto text-center">Comercio unico</h2>
                    <p class="card-description text-white text-center">Cafetería, comida rápida, heladería, pizzería, restaurante, panadería</p>
                    <br>
                    <a class="btn btn-warning text-center align-items-center" href="#formulario">
                     Más Información
                    </a>
                  </div><br>
                </a>
              </div>
            </div>
            <div class="col-lg-6 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('./assets/img/theme/person2.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 text-center">
                    <h2 class="card-title mx-auto text-center">Multi comercio</h2>
                    <p class="card-description text-white mx-auto text-center">Cafetería, comida rápida, heladería, pizzería, restaurante, panadería</p>
                    <br>
                    <a class="btn btn-warning mx-auto text-center align-items-center" href="#formulario">
                      Más Información
                    </a>
                  </div> <br>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> <br><br>
      <!--     *********     Funcionalidades -->
      <div class="section features-2" id="negocios" name="negocios">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-8 mr-auto text-left">
              <div class="pr-md-5">
                <h3 class="text-uppercase">Funcionalidades que harán crecer tu negocio</h3>
                <p>Ventual cuenta con muchas funcionalidades que te harán ahorrar tiempo y vender más.</p>
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Gestiona eficientemente los pedidos registrados.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Notificaciones en tiempo real.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Administra el menú de tu restaurante.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Gestiona tus domicilios.</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Crea eventos unicos con un menú especifico.</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-md-0">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-primary shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fas fa-file-alt text-primary"></i>
                    </div>
                    <h5 class="info-title text-white">Facturas personalizadas​</h5>
                    <p class="description">Genera facturas o recibos de compra, imprímelas o envíalas por correo.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-danger info-raised shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-cubes text-danger"></i>
                    </div>
                    <h5 class="info-title text-white">Inventario​</h5>
                    <p class="description">Conoce las entradas, salidas y traslados de tus productos.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-info shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fas fa-chart-line text-info"></i>
                    </div>
                    <h5 class="info-title text-white">Informes</h5>
                    <p class="description">Informes y alertas a tu correo que te darán la información precisa para que tu negocio crezca.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-success shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-smile-o text-success"></i>
                    </div>
                    <h5 class="info-title text-white">Fideliza tus clientes</h5>
                    <p class="description">Aumenta tus ventas, crea promociones, sistema de puntos o vende tarjetas de regalo.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-warning info-raised shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-home text-warning"></i>
                    </div>
                    <h5 class="info-title text-white">Multi Almacen</h5>
                    <p class="description">Administra los movimientos de todos tus almacenes desde la misma plataforma.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="info text-left bg-default shadow">
                    <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                      <i class="fa fa-files-o text-default"></i>
                    </div>
                    <h5 class="info-title text-white">Facturación Electrónica</h5>
                    <p class="description">Implementa tu Factura Electrónica fácilmente con Ventual </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--     *** App Funciones Punto de Venta   **   --> 
      <div class="section features-6" id="mas" name="mas">
        <div class="container">
          <div class="row mb-0 pb-0">
            <div class="col-md-8">
              <h3 class="display-3">Conoce las funcionalidades de Ventual </h3>
              <p class="lead mt-0">Impulsa tu negocio con el mejor software para punto de venta del mercado.</p>
            </div>
          </div>
          <div class="row align-items-center mt-0">
            <div class="col-lg-6 col-10 mx-md-auto">
              <img src="./assets/img/ill/ill2.png" width="120%">
            </div>
            <div class="col-lg-5 ml-4">
              <div class="info info-horizontal info-hover-success">
                <div class="description pl-4">
                  <small class="text-uppercase">CONVIERTE TU TABLET ANDROID EN UNA CAJA DE VENTA​</small>
                  <h4 class="title">App punto de venta</h4>
                  <div class="" style="width: 20rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item p-2">
                       <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>Desde tablet o celular
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Facturacion e Inventario
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Quick Service
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Vende con descuentos
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Apertura y cierre de Restaurante
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Vende con adiciones y modificaciones
                      </li>
                    </ul>
                  </div>
                  <ul class="title">
                    
                  </ul>
                  <a href="#" class="text-info">Más Información</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--     *********   Separador Adquierelo  -->
      <div class="container-fluid" style="background-image: url('{{asset('assets/img/theme/div2.jpg')}}'); background-attachment: fixed;">
        <div class="row ">
          <div class=" col-md-7 card mt-4 ml-3 border">
            <div class="-title"><h1 class="text-warning text-center"><strong>Adquiérelo desde 59 USD mensuales</strong></h1></div>
            <div class="-body mt-0 pt-0">
              <p class="lead mt-0 pt-0 text-center"><strong> <big>Ventual</big> es un servicio cloud y se paga mensualmente de forma recurrente.</strong></p>
              </div>
          </div>
          <div class="col-md-4 ml-3 mt-4">
          <a href="#formulario" class="btn btn-lg btn-warning btn-block p-5"><h3 class="text-white">MÁS INFORMACIÓN</h3></a>
          </div>
        </div>
      </div><br><br>
      <!--     *********     precios -->     
      @include('components.sections.planes')
      
      @endsection
