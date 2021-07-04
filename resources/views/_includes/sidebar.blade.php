<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    
  <div class="navbar-container d-flex content">
      <ul class="nav navbar-nav align-items-center ml-auto">
          <li class="nav-item dropdown dropdown-user">
              <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="user-nav d-sm-flex ">
                      <span class="user-name font-weight-bolder">{{ Str::upper(auth()->user()->name) }}</span>
                  </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                  <a class="dropdown-item" href="javascript:void('logout')" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <i class="mr-50" data-feather="power"></i> Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
          </li>
      </ul>
  </div>
</nav>
<ul class="main-search-list-defaultlist-other-list d-none">
  <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
      </a></li>
</ul>


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index-2.html"><span class="brand-logo">
            <h2 class="brand-text">Aquarium</h2></a>
        </li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
              <a class="d-flex align-items-center" href="{{ route('home') }}">
                <i data-feather="home"></i>
                <span class="menu-title text-truncate">Dashboard</span>
              </a>
            </li>
            <li class=" nav-item {{ request()->is('data*') ? 'active' : '' }}">
              <a class="d-flex align-items-center" href="{{ route('datas') }}">
                <i data-feather="file-text"></i>
                <span class="menu-title text-truncate">Data</span>
              </a>
            </li>
        </ul>
      </div>
</div>