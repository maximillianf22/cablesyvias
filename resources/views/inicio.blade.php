   @extends('layouts.web')

   @section('content')
  
   @include('components.navbar')

   @include('components.sections.header')
      <!--     *********     Logo Clientes    -->
       <section>
          <div class="container-fluid pt-3 pb-3">
            <div class="container-fluid">
              <h3 class="text-center">Alguno de Nuestros Clientes</h3>
            </div>
            <div class="col-md-12 p-0">
              <div class="row row-cols-1 row-cols-md-3">
                  <div class="owl-carousel owl-head owl-theme owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                  <div class="owl-stage">

                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente1.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente2.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente3.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente4.png')}}" class="shad border-radius" alt="...">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
                      <div class="item">
                        <div class="card-product m-0">
                            <div class="card-image">
                              <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img src="{{asset('assets/img/theme/clientes/cliente5.png')}}" class="shad border-radius" alt="...">
                              </a>
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
    </section>
      <!--     *********    Tarjeta de Opciones  -->
      <section class="blogs-6" id="planes">
        <div class="container-fluid p-lg-5">
          <div class="row">
            <div class=" container mx-auto mb-3">
              <h3 class="text-center">Tenemos una solución para tus necesidades</h3>
              <h6 class="text-center">Selecciona el producto o servicio de tu interes y descubre todo lo que tenemos para ti o tu empresa.</h6>
            </div>
            <div class="col-lg-4 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('./assets/img/theme/person1.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 mx-auto text-center">
                    <h3 class="card-title mx-auto text-center">Transporte aéreo y puentes colgantes</h3>
                    <p class="card-description text-white text-center">Para plantaciones de palmas, bananos y mas...</p>
                    <br>
                    <a class="btn btn-success text-center align-items-center" href="#formulario">
                     Más Información
                    </a>
                  </div><br>
                </a>
              </div>
            </div>
             <div class="col-lg-4 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('./assets/img/theme/person2.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 mx-auto text-center">
                    <h3 class="card-title mx-auto text-center">Servicios de asesoria y planeación</h3>
                    <p class="card-description text-white text-center">descripcion para esta seccion</p>
                    <br>
                    <a class="btn btn-success text-center align-items-center" href="#formulario">
                     Más Información
                    </a>
                  </div><br>
                </a>
              </div>
            </div>
            <div class="col-lg-4 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('./assets/img/theme/person3.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 text-center">
                    <h3 class="card-title mx-auto text-center">Accesorios y Herramientas</h3>
                    <p class="card-description text-white mx-auto text-center">Garruchas, Galvanizados, y mas cosas </p>
                    <br>
                    <a class="btn btn-success mx-auto text-center align-items-center" href="#formulario">
                      Más Información
                    </a>
                  </div> <br>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> <br><br>

      <section class="mt-2">
        <div class="container-fluid" style="background-image: url('{{asset('assets/img/theme/div1.jpg')}}'); background-size: cover;  background-repeat:   no-repeat;  background-position: center center; height: 35vh"></div>
      </section>

      <!--     *********     Funcionalidades -->
      <div class="section features-2" id="negocios" name="negocios">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-8 mr-auto text-left">
              <div class="pr-md-5">
                <h3 class="text-uppercase">Ofrecemos productosy servicios para el agro</h3>
                <p><small>Somos fabricantes y te podemos ofreer los mejores precios de latinoamerica, 30 años de experiencia han logrado que muchas empresas confien en nosotros.</small></p>
                <ul class="list-unstyled mt-3">
                  <li class="py-2">
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        <h6 class="mb-0">Transporte por cable para plantaciones de palma africana, banano, plátano, cítricos, flores y otros.</h6>
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
                        <h6 class="mb-0">Venta de accesorios: Torres metálicas, caja transfer, curva automática, placa ensamble, garruchas para palma africana y banano, entre otros.</h6>
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
                        <h6 class="mb-0">Asesoría diseño y montaje de estructura metálica para patios de frutas y  Puentes colgantes.</h6>
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
                        <h6 class="mb-0">Elaboramos diseños de acuerdo a las necesidades de su cultivo.</h6>
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
                        <h6 class="mb-0">Somos interventores en montajes agroindustriales.</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 pl-md-0">
              <div class="row">
                  <iframe width="100%" height="450" src="https://www.youtube.com/embed/tSAlzuYd2ig" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 1rem;-webkit-box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);-moz-box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);"></iframe>
              </div>
          </div>
        </div>
      </div>
      </div>

      <section class="mt-2">
        <div class="container-fluid" style="background-image: url('{{asset('assets/img/theme/div2.jpg')}}'); background-attachment: fixed; background-size: cover;  background-repeat:   no-repeat;  background-position: center center; height: 35vh"></div>
      </section>

      <!--     *** App Funciones Punto de Venta   **   --> 
      <div class="section features-6  pt-0" id="mas" name="mas">
        <div class="container">
          <div class="row mb-0 pb-0">
            <div class="col-md-8 mx-auto">
              <h3 class="display-3 text-center">¿Porque elegirnos?</h3>
              <p class="lead mt-0 text-center">Nuestros productos cumplen con todos los estándares de calidad, estamos comprometidos con el buen funcionamiento y duración del sistemaa lo largo de los años con la mejor calidad.</p>
            </div>
          </div>
          <div class="row align-items-center mt-0">
            <div class="col-lg-6 col-10 mx-md-auto">
              <img src="./assets/img/ill/ill2.jpg" width="120%">
            </div>
            <div class="col-lg-5 ml-4">
              <div class="info info-horizontal info-hover-success">
                <div class="pl-4"><strong>
                  Nuestros productos son galvanizados por inmersion en caliente a 450°c lo que garantiza su funcionalidad en los ambientes mas severos</strong>
                  <div class="mt-3" style="width: 20rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item p-2">
                       <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>Aceros de alta resistencia y certificados.
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Galvanizados a 450°c por inmersion.
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Fabricamos cada unos de los accesorios empleados en el sistema.
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        precios bajos.
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Duración del sistema a lo largo de los años con garantia extendida
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
      
      @endsection



@section('js')
  <script>
     $('.owl-head').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 3,
                loop: true,
                nav: true
            },
            600: {
                items: 6,
                loop: true,
                nav: false
            },
            1100: {
                items: 8,
                loop: true,
                nav: false
            }

        }
    })
  </script>
@endsection