<nav class="navbar-user-top full-reset">
        <ul class="list-unstyled full-reset">
            <figure>
               <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
            </figure>
            <li style="color:#fff; cursor:default;">
                <span class="all-tittles">Admin Name</span>
            </li>
            <li  class="tooltips-general exit-system-button" data-href="{{ route('logout') }}" data-placement="bottom" onclick="event.preventDefault();document.getElementById('logout-form').submit();" title="Salir del sistema">
                <i class="zmdi zmdi-power"></i>
            </li>
            <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                <i class="zmdi zmdi-search"></i>
            </li>
            <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
            </li>
            <li class="mobile-menu-button visible-xs" style="float: left !important;">
                <i class="zmdi zmdi-menu"></i>
            </li>
        </ul>
    </nav>

{{--  <ul class="list-unstyled full-reset">
        <figure>
            <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
             </figure>
             <li style="color:#fff; cursor:default;">
                 <span class="all-tittles">Admin Name</span>
             </li>
        <li style="color:#fff; cursor:default;">
                <span class="all-tittles">Admin Name</span>
        </li>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
        </a>
</ul>  --}}
