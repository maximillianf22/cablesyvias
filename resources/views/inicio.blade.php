@extends('layouts.web')

@section('content')

  @include('components.navbar')

  @include('components.sections.header')
  <!--     *********     Logo Clientes    -->
  <section>
    <div class="container-fluid pt-3 pb-3 d-none d-sm-none d-lg-block d-md-block">
      <div class="container-fluid">
        <h3 class="text-center">¿Quienes somos?</h3>
      </div>
      <p class="description col-8 mx-auto text-center mb-5">
        Somos especialistas en: Transporte por cable para plantaciones de palma africana, banano, plátano, cítricos, flores, puentes colgantes, aapoyo aéreo (cable aéreo), Asesoría y diseño para la fabricación e instalación de estructura metálica para patios de frutas. Elaboramos diseños de acuerdo a las necesidades de su cultivo, somos interventores en montajes agroindustriales y la venta de accesorios como: Torres metálicas, caja transfer, curva automática, garruchas para palma africana y banano, entre otros así como también prestamos servicios de mantenimiento preventivo y correctivo.
      </p>
    </div>
  </section>
  <!--     *********    Tarjeta de Opciones  -->
  <section class="section-info mt-4 d-none d-sm-none d-lg-block d-md-block">
    <div class="container-fluid">
      <div class="row mx-auto text-center">
        <div class="col-lg-4 col-md-6">
          <div class="info text-center shadow-sm" style="min-height: 400px!important;">
            <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
              <i class="ni ni-user-run"></i>
            </div>
            <h6 class="info-title text-uppercase text-primary pl-0">Misión</h6>
            <p class="description opacity-8">
              Somos una empresa dedicada a la  fabricación y  montaje  de sistemas de transporte agroindustrial por cable, contamos con aceros certificados y
              personal calificado como resultado de un política que combina profesionalismo y cumplimiento aunados con el compromiso de mejoramiento continuo.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="info text-center shadow-sm" style="min-height: 400px!important; margin-top:-40px!important;">
            <div class="icon icon-lg icon-shape icon-shape-gray bg-light shadow rounded-circle">
              <i class="fa fa-eye"></i>
            </div>
            <h6 class="info-title text-uppercase text-muted pl-0">Visión</h6>
            <p class="description opacity-8">
              Para el 2025 consolidarnos como empresa líder. Manteniéndonos a la vanguardia del sector agroindustrial e implementando nuevas estrategias
              que permitan tener mayor cobertura de nuestros servicios a nivel internacional.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="info text-center shadow-sm" style="min-height: 400px!important;">
            <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
              <i class="ni ni-istanbul"></i>
            </div>
            <h6 class="info-title text-uppercase text-success pl-0">Políticas de calidad</h6>
            <p class="description opacity-8">
              CABLES & VIAS S.A.S garantiza servicios de primera calidad, con profesionalismo y cumplimiento, aceros certificados, personal capacitado y experimentado,
              comprometido con el buen funcionamiento y duración del sistema a lo largo de los años, con la mejora continua de sus procesos, satisfaciendo las expectativas de nuestros clientes.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-2">
    <div class="container-fluid" style="background-image: url('{{asset('assets/img/theme/div1.jpg')}}'); background-size: cover;  background-repeat:   no-repeat;  background-position: center center; height: 45vh"></div>
  </section>

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
            <a target="blank" href="javascript:;">
              <div class="card-body mb-4 mx-auto text-center">
                <h3 class="card-title mx-auto text-center">Remanofacturado de garruchas</h3>
                <p class="card-description text-white text-center">Para plantaciones de palmas, bananos y mas...</p>
                <br>
                <a class="btn btn-primary text-center align-items-center" href="#formulario">
                  Más Información
                </a>
              </div><br>
            </a>
          </div>
        </div>
        <div class="col-lg-4 mx-auto">
          <div class="card card-blog card-background card-grande" data-animation="zooming">
            <div class="full-background" style="background-image: url('./assets/img/theme/person2.jpg')"></div>
            <a target="blank" href="javascript:;">
              <div class="card-body mb-4 mx-auto text-center">
                <h3 class="card-title mx-auto text-center">Servicios de Asesoría  y Mentenimiento</h3>
                <p class="card-description text-white text-center">Mantenimiento preventivo y correctivo</p>
                <br>
                <a class="btn btn-primary text-center align-items-center" href="#formulario">
                  Más Información
                </a>
              </div><br>
            </a>
          </div>
        </div>
        <div class="col-lg-4 mx-auto">
          <div class="card card-blog card-background card-grande" data-animation="zooming">
            <div class="full-background" style="background-image: url('./assets/img/theme/person3.jpg')"></div>
            <a target="blank" href="javascript:;">
              <div class="card-body mb-4 text-center">
                <h3 class="card-title mx-auto text-center">Accesorios y Herramientas</h3>
                <p class="card-description text-white mx-auto text-center">Venta de accesorios y herramientas </p>
                <br>
                <a class="btn btn-primary mx-auto text-center align-items-center" href="#formulario">
                  Más Información
                </a>
              </div> <br>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <section class="section-examples bg-secondary py-5 shadow-sm">
      <div class="container-fluid py-5 my-3">
        <div class=" container mx-auto mb-3">
          <h3 class="display-3 text-center">Galeria de imágenes</h3>
        </div>
      	<div class="examples">
          <figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right hover" tabindex="0" style="--primary-color: #0062ad; --secondary-color: #7da0d0; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
            <img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src='/images/galeria/caja-transfer-automatica.jpg' alt='Caja transfer'  />
            <figcaption class="ls-layout-bottom-left">
              <div class="ls-reveal-right ls-delay-100">
                <h6 class="text-uppercase text-white font-weight-bold">
                  Caja transfer automatica
                </h6>
              </div>
            </figcaption>
          </figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right " tabindex="0" style="--primary-color: #383838; --secondary-color: #cacaca; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/curva-automatica.jpg" alt="sample120">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Curva automatica
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #70b333; --secondary-color: #a8cc7a; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/elemento-rigido-torre-cantilever.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Elemento rigido torre cantilever
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #0062ad; --secondary-color: #7da0d0; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/gancho-z-tubo-34.jpg" alt="sample119">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Gancho Z tubo 3/4
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right " tabindex="0" style="--primary-color: #383838; --secondary-color: #cacaca; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/glorieta-4-entradas.jpg" alt="sample120">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Glorieta 4 entradas
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #70b333; --secondary-color: #a8cc7a; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/recoleccion-de-fruto-palma-implementando-sistema-cable-via.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Recoleecion fruto de palma
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #0062ad; --secondary-color: #7da0d0; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/gancho-z-tubo-34.jpg" alt="sample119">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Gancho Z tubo 3/4
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right " tabindex="0" style="--primary-color: #70b333; --secondary-color: #a8cc7a; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/paso-nivel.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Paso Nivel
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      		</a>
        </div>

          <div class="col-12 w-100 text-center">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Mas imagenes
            </button>
          </div>
        <div class="collapse" id="collapseExample">
        <div class="examples">
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right " tabindex="0" style="--primary-color: #0062ad; --secondary-color: #7da0d0; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/tractor-aereo.jpg" alt="sample119">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Tractor aereo
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right " tabindex="0" style="--primary-color: #383838; --secondary-color: #cacaca; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/tanque-desmane-elemento-rigido-torre-cantilever.jpg" alt="sample120">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Tanque de desmane
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #70b333; --secondary-color: #a8cc7a; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/torres-anchas-elemento-rigido.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Torres anchas elemento rigido
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right " tabindex="0" style="--primary-color: #0062ad; --secondary-color: #7da0d0; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/cable-transporte-siembra.jpg" alt="sample119">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Cable transporte para la siembra
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right " tabindex="0" style="--primary-color: #383838; --secondary-color: #cacaca; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/curva-H4-plataforma-descargue.jpg" alt="sample120">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Curva H4 plataforma de descargue
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #70b333; --secondary-color: #a8cc7a; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/plataforma-descargue.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Plataforma de descargue
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #383838; --secondary-color: #cacaca; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/plataforma-descargue-2.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Plataforma de descargue
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #0062ad; --secondary-color: #7da0d0; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/rollo-cable-7-16.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      							Rollo de cable 7/16
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #383838; --secondary-color: #cacaca; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/torre-doble-cable-mello.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      						  Torre doble cable mello
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
      			<figure class="m-3 ls-izmir ls-border-bottom-left ls-image-rotate-right ls-gradient-bottom-right" tabindex="0" style="--primary-color: #70b333; --secondary-color: #a8cc7a; --image-opacity: .1;  --border-margin: 30px;--padding: 20px;">
      				<img id="1" data-toggle="modal" data-target="#myModal" style="z-index:9" src="/images/galeria/torre-terminal-portico.jpg" alt="sample87">
      				<figcaption class="ls-layout-bottom-left">
      					<div class="ls-reveal-right ls-delay-100">
      						<h6 class="text-uppercase text-white font-weight-bold">
      						  Torre terminal (portico)
      						</h6>
      					</div>
      				</figcaption>
      			</figure>
        </div>
      	</div>
      </div>
    </div>
  </section>

  <div class="section features-2" id="negocios" name="negocios">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-8 mr-auto text-left">
          <div class="pr-md-5">
            <h3 class="text-uppercase">Contamos con un amplio rango de productos ofrecidos a su disposición y a excelentes precios:</h3>
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
          <div class="row p-3 p-md-0">
            <iframe width="100%" height="450" src="https://www.youtube.com/embed/_3_TrYDu8nA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 1rem;-webkit-box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);-moz-box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);box-shadow: 14px 14px 0px 0px rgba(98,167,51,1);"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="mt-2 shadow">
    <div class="container-fluid" style="background-image: url('{{asset('assets/img/theme/div2.jpg')}}'); background-attachment: fixed; background-size: cover;  background-repeat:   no-repeat;  background-position: center center; height: 45vh"></div>
  </section>

  <!--     *** App Funciones Punto de Venta   **   -->
  <div class="section features-6  pt-0" id="mas" name="mas">
    <div class="container-fluid px-md-5">
      <div class="row mb-0 pb-0">
        <div class="col-md-8 mx-auto">
          <h3 class="display-3 text-center mt-5">¿Porque elegirnos?</h3>
          <p class="lead mt-0 text-center">Nuestros productos cumplen con todos los estándares de calidad, estamos comprometidos con el buen funcionamiento y duración del sistemaa lo largo de los años con la mejor calidad.</p>
        </div>
      </div>
      <div class="row align-items-center mt-0">
        <div class="col-lg-6 col-10 mx-md-auto">
          <img src="./assets/img/ill/ill2.jpg">
        </div>
        <div class="col-lg-5 ml-md-4">
          <div class="info info-horizontal info-hover-success">
            <div class=" px-2"><strong>
              Nuestros productos son galvanizados por inmersion en caliente a 450°c lo que garantiza su funcionalidad en los ambientes mas severos</strong>
              <div class="mt-3 p-3">
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
                                <a target="blank" href="#" class="text-info">Más Información</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div id="myModal" class="modal  p-0">
                      <span data-dismiss="modal" class="close">&times;</span>
                      <div class="modal-dialog" style="max-width: 850px !important">
                        <img class="img-responsive img-fluid" src=""  />
                      <div id="caption"></div>
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

                    $(document).ready(function () {
                        $('#myModal').on('show.bs.modal', function (e) {
                            var image = $(e.relatedTarget).attr('src');
                            $(".img-responsive").attr("src", image);
                        });
                    });
                    </script>

                  @endsection
