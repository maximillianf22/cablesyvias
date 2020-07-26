   <!--     *********     Header    -->
      <div class="contactus-1 bg-default" style="background-image: url('{{asset('assets/img/ill/header.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center;">
        <div class="container"><br>
          <div class="row">
            <div class="col-lg-5 col-md-5 d-flex justify-content-center flex-column">
              <h1 class="title text-white">Software <strong>Ventual </strong> Para Restaurantes y Comercios</h1>
              <h3 class="description text-white">Es una plataforma de comercio electronico para comercios o restaurantes en la cual puedes gestionar y administrar 
              tu negocio de forma facil, rapida y economica.</h3>
              <div class="info info-horizontal">

              </div>
            </div>
            <div class="col-lg-5 col-md-7 mx-auto" id="formulario" name="formulario">
              <div class="card card-contact card-raised">
                <form method="post" action="{{ url('/store') }}">
                  {!! csrf_field() !!}
                  <div class="card-header text-center">
                    <h3 class="card-title text-warning"> Habla con un Experto</h3>
                        <small class="text-uppercase">La mejor solución del mercado </small>
                  </div>
                  <div class="description">
                  @if (count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                      @foreach ($errors->all() as $error)
                      <ul>
                        <li><small>{{ $error }}</small></li>
                      </ul>
                      @endforeach
                    </div>
                  @endif
                </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>
                            <input class="form-control" name="name" id="name" placeholder="Nombre" aria-label="First Name..." type="text" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 pl-2">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-collection"></i></span>
                            </div>
                            <input type="text"  name="last_name" id="last_name" class="form-control" placeholder="Apellido" aria-label="Last Name..." required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input type="email"  name="email" id="email" class="form-control" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefono" required="">
                      </div>
                    </div>
                    <div class="form-group">
                    <select class="form-control" data-trigger name="bussiness_type" id="bussiness_type" required>
                      <option disabled selected>Selecciona el Tipo de Negocio</option>
                      <option value="Comercio">Comercio o Restaurante</option>
                      <option value="Multicomercio">Multicomercio o Multirestaurante</option>
                    </select>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox mt-2">
                          <input class="custom-control-input" id="customCheck" type="checkbox">
                          <label class="custom-control-label" for="customCheck">
                            <span>No soy un Robot</span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <button type="submit" value="Enviar" class="btn btn-warning pull-right">Empieza Ahora</button>
                      </div>
                      <div class="container">
                        <small class="text-uppercase"><small class="text-center text-success"><b>Al hacer clic, aceptas nuestros términos y condiciones</b></small></small>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><br><br> 