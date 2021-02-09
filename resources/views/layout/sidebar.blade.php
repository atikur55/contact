<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item ">
        <a href="{{url('/home')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
     <!--  <li class="nav-item ">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Home</span>
        </a>
      </li> -->
     <!--  <li class="nav-item nav-category">web apps</li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="" aria-controls="email">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Email</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="#" class="nav-link">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Read</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li>
          </ul>
        </div>
      </li> -->

      <!-- -------------------  Banner part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('banner')">
        <a class="nav-link" data-toggle="collapse" href="#banner" role="button" aria-expanded="" aria-controls="banner">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Banner</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="banner">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_banner')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_banner')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Banner part ---------------------------- -->

       <!-- -------------------  Description part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('description')">
        <a class="nav-link" data-toggle="collapse" href="#description" role="button" aria-expanded="" aria-controls="description">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Description</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="description">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_description')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_description')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Description part ---------------------------- -->

      <!-- -------------------  Description One part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('description_one')">
        <a class="nav-link" data-toggle="collapse" href="#description_one" role="button" aria-expanded="" aria-controls="description_one">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Description One</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="description_one">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_description_one')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_description_one')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Description One part ---------------------------- -->

            <!-- -------------------  Description Two part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('description_two')">
        <a class="nav-link" data-toggle="collapse" href="#description_two" role="button" aria-expanded="" aria-controls="description_two">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Description Two</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="description_two">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_description_two')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_description_two')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Description One part ---------------------------- -->

      <!-- -------------------  Service part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#service" role="button" aria-expanded="" aria-controls="service">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Service</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="service">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_services')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_services')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

    <!-- ------------------- End Service part ---------------------------- -->

    <!-- ------------------- Carrer part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('carrer')">
        <a class="nav-link" data-toggle="collapse" href="#carrer" role="button" aria-expanded="" aria-controls="carrer">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Career</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="carrer">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_carrer')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_carrer')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Carrer Contact part ---------------------------- -->

       <!-- ------------------- Carrer Slider part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('carrer_slider')">
        <a class="nav-link" data-toggle="collapse" href="#carrer_slider" role="button" aria-expanded="" aria-controls="carrer_slider">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Career Slider</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="carrer_slider">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_carrer_slider')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_carrer_slider')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Carrer Slider Contact part ---------------------------- -->

      <!-- -------------------  Country Contact part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('country_contact')">
        <a class="nav-link" data-toggle="collapse" href="#country_contact" role="button" aria-expanded="" aria-controls="country_contact">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Country Contact</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="country_contact">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_country_contact')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_create_country')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Country Contact part ---------------------------- -->
      <!-- -------------------  Lander Banner part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('lan_banner')">
        <a class="nav-link" data-toggle="collapse" href="#lan_banner" role="button" aria-expanded="" aria-controls="lan_banner">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Lander Service Banner</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="lan_banner">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_lander_banner')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_lander_banner')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Lander Banner part ---------------------------- -->
      <!-- -------------------  Lander Description part ---------------------------- -->
      <!-- <li class="nav-item nav-category">web Tuhin</li> -->
      <li class="nav-item @yield('lan_description')">
        <a class="nav-link" data-toggle="collapse" href="#lan_description" role="button" aria-expanded="" aria-controls="lan_description">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Lander Description</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="lan_description">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('create_lander_description')}}" class="nav-link">Create</a>
            </li>
            <li class="nav-item">
              <a href="{{url('view_lander_description')}}" class="nav-link">View</a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">Compose</a>
            </li> -->
          </ul>
        </div>
      </li>

      <!-- ------------------- End Lander Description part ---------------------------- -->

    </ul>
  </div>
</nav>
