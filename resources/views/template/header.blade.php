<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Reservation chambre</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('/')}}">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/clients')}}">Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{url('/chambres')}}">Chambre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Paiement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Reservation</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="ex:Jaonina" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
          </form>
        </div>
      </nav>
</header>