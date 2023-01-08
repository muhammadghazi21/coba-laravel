<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/components.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('/custom.css')}}"> --}}
    <title>crud Buku</title>
</head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          <div class="navbar-bg"></div>
          <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
              <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
              </ul>
              <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
                <div class="search-result">
                  <div class="search-header">
                    Histories
                  </div>
                  <div class="search-item">
                    <a href="#">How to hack NASA using CSS</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                  </div>
                  <div class="search-item">
                    <a href="#">Kodinger.com</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav navbar-right">
              <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                  <div class="dropdown-header">Messages
                    <div class="float-right">
                      <a href="#">Mark All As Read</a>
                    </div>
                  </div>
                  <div class="dropdown-list-content dropdown-list-message">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                        <div class="is-online"></div>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Kusnaedi</b>
                        <p>Hello, Bro!</p>
                        <div class="time">10 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Dedik Sugiharto</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <div class="time">12 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                        <div class="is-online"></div>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Agung Ardiansyah</b>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="time">12 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Ardian Rahardiansyah</b>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                        <div class="time">16 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Alfa Zulkarnain</b>
                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <div class="time">Yesterday</div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </li>
              <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                  <div class="dropdown-header">Notifications
                    <div class="float-right">
                      <a href="#">Mark All As Read</a>
                    </div>
                  </div>
                  <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-icon bg-primary text-white">
                        <i class="fas fa-code"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Template update is available now!
                        <div class="time text-primary">2 Min Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-info text-white">
                        <i class="far fa-user"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                        <div class="time">10 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-success text-white">
                        <i class="fas fa-check"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                        <div class="time">12 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-danger text-white">
                        <i class="fas fa-exclamation-triangle"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Low disk space. Let's clean it!
                        <div class="time">17 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-info text-white">
                        <i class="fas fa-bell"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Welcome to Stisla template!
                        <div class="time">Yesterday</div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                
                <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->username }}</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-title">Logged in 5 min ago</div>
                  <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                  </a>
                  <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                  </a>
                  <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ url('/') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>

          
          <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                <a href="index.html">Stisla</a>
              </div>
              <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">St</a>
              </div>
              <ul class="sidebar-menu">
                <li class="menu-header">Control</li>
                <li class="nav-item {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                  <a href="{{ url('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="nav-item {{ $type_menu === 'form-edit' ? 'active' : '' }}">
                  <a href="#" class="nav-link"><i class="fas fa-file-alt"></i><span>Form</span></a>
                </li>
                <li class="nav-item {{  $type_menu === 'qna' ? 'active' : '' }}">
                  <a href="{{ url('qna') }}" class="nav-link"><i class="fas fa-question"></i><span>QnA</span></a>
                </li>
                <li class="nav-item {{ $type_menu === 'manager-dashboard' ? 'active' : '' }}">
                  <a href="{{ url('manager-dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Manager</span></a>
                </li>
                <li class="nav-item {{ $type_menu === 'user-details' ? 'active' : '' }}">
                  <a href="{{ url('user-details') }}" class="nav-link"><i class="fas fa-fire"></i><span>User Details</span></a>
                </li>
              </ul>

              
              </aside>
          </div>
           
          <!-- Main Content -->
          <div class="main-content">
            <section class="section">
                @yield('main')
            </section>
          </div>
          <footer class="main-footer">
            <div class="footer-left">
              Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
              
            </div>
          </footer>
        </div>
      </div>
    <script src="{{ asset('library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    @stack('scripts')

    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>