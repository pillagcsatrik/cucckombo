<nav class="navbar navbar-expand-sm bg-dark davbar-dark">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="nav-item {{Request::is('/')? 'active' : ''}}"><a class="nav-link" contenteditable=""href="./">Home</a></li>
      <li class="nav-item {{Request::is('/about')? 'active' : ''}}"><a class="nav-link" href="about">About</a></li>
      <li class="nav-item {{Request::is('/contact')? 'active' : ''}}"><a class="nav-link" href="contact">Contact</a></li>
      <li class="nav-item {{Request::is('/msg')? 'active' : ''}}"><a class="nav-link" href="contact">Messages</a></li>
      @if( auth()->check() )
            <li class="nav-item">
                <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
            </li>

        @else
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Register</a>
            </li>
      @endif
    </ul>
  </div>
</nav>
