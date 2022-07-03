<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><span class='navGlassIcon ms-4'><i class="bi bi-eyeglasses"></i></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-shadow-black"></span>
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item px-3">
          <a class="nav-link active text-shadow-black" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link text-shadow-black" href="{{route('services')}}">Servizi</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link text-shadow-black" href="{{route('contacts')}}">Contatti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
