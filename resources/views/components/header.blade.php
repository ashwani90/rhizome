<header id="header" class="fixed-top ">
    <div class="container d-flex justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">Rhizome</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ url('/') }}" class="logo"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">

        <ul>
         <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
          <li class="{{ Request::is('projects') ? 'active' : '' }}"><a href="{{ url('/projects') }}">Projects</a></li>
          <!-- <li class="{{ Request::is('research') ? 'active' : '' }}"><a href="{{ url('/research') }}">Research</a></li> -->
          <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About Us</a></li>
          <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
          <!-- <li>
              <span class="material-icons-outlined">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
              </span>
          </li> -->

        </ul>

      </nav>
    </div>
  </header>
