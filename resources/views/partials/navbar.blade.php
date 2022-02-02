
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Anhar Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($active ==="home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active ==="about") ? 'active' : '' }}" href="/about">About</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ ($active ==="posts") ? 'active' : '' }}" href="/posts">Blog</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link {{ ($active ==="categories") ? 'active' : '' }}" href="/categories">Categories</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
              @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome, {{ auth()->user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                    </form>
                  </div>
                </li>
              @else
                <li class="nav-item">
                  <a href="/login" class="nav-link {{ ($active ==="categories") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
              @endauth
            </ul>
          </div>
        </div>
    </nav>