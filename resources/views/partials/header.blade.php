<header>
    <div class="container-header">
      <div class="nav">


        <div class="menu">
          <ul>
            <li>
                <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
              </li>

            <li>
                <a class="{{ Route::currentRouteName() === 'uomo' ? 'active' : '' }}" href="{{ route('uomo') }}">Uomo</a>
              </li>

              <li>
                <a class="{{ Route::currentRouteName() === 'donna' ? 'active' : '' }}" href="{{ route('donna') }}">Donna</a>
              </li>

              <li>
                <a class="{{ Route::currentRouteName() === 'bambino' ? 'active' : '' }}" href="{{ route('bambino') }}">Bambino</a>
              </li>
          </ul>
        </div>

        <div class="logo">
          <img src="/img/boolean-logo.png" alt="Logo">
        </div>

        <div class="icone">

          <div>
            <i class="fa-regular fa-user"></i>
            <i class="fa-regular fa-heart"></i>
            <i class="fa-solid fa-bag-shopping"></i>
          </div>
        </div>

      </div>
    </div>
  </header>
