<header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo"
          ><img src="home/assets/img/logo.svg" alt="Logo" class="img-fluid"
        /></a>
        <!-- Uncomment below if you prefer to use text as a logo -->
        <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li>
              <a class="nav-link scrollto" href="#portfolio">Cars</a>
            </li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

            <li>
            
            @if (Route::has('login'))

            @auth

            <li class="nav-item">
            <x-app-layout>
   
            </x-app-layout>
            </li>
            @else
            <li class="nav-item">
                <a class="btn btn" id="logincss"
                href="{{ route('login') }}">Login</a>
            </li>
            
            <li class="nav-item">
                <a class="btn btn"
                href="{{ route('register') }}">Register</a>
            </li>
            @endauth

            @endif
            <br>
            <div id="dropdown-menu" class="dropdown" style="display: none">
              <button
                class="btn btn-secondary dropdown-toggle mx-4"
                type="button"
                id="dropdownMenuButton"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item" href="home.profile"
                    ><i class="bi bi-person-circle"></i> Profile</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    ><i class="bi bi-cart-check-fill"></i> Orders</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#" id="btn_logout"
                    ><i class="bi bi-box-arrow-right"></i> Logout</a
                  >
                </li>
              </ul>
            </div>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>