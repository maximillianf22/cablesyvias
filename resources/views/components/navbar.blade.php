 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg p-0 m-0 navbar-dark bg-gradient-warning" style="height: 2vh;">
</nav>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="img-fluid" src="{{asset('images/logo.png')}}" alt=""  style="height: 40px;" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand"> 
                        <a href="#">
                            <img class="img-fluid" src="{{asset('images/logo.png')}}" alt="" />
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="btn btn-outline-warning btn-round mt-1" href="#planes">
                        Planes y Precios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-warning btn-round mt-1" href="#negocios">
                        Negocios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary btn-round mt-1" href="#mas">
                        <span class="nav-link-inner--text">Mas</span>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
  <!-- End Navbar -->