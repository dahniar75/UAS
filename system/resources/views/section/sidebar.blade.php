<?php 
  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="{{url('public')}}/src/img/diamond.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Loxury</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
              Welcome {{request()->user()->nama}}
            @else
            @endif
          </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('produk')}}" class="nav-link {{checkRouteActive('produk')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('user')}}" class="nav-link {{checkRouteActive('user')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>