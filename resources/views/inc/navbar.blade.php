<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Acmer</a>
    
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
          <a class="nav-item nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
          <a class="nav-item nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">  
          <a class="nav-item nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>