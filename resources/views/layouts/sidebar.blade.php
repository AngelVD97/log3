<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">

            </div>
                <div class="sidebar-brand-text mx-3">DASHBOARD<sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-chart-line"></i>
                   
                    <span>Resumen</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-coins"></i>
                    <span>Ingresos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-users"></i>
                    <span>Usuarios</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-shopping-cart"></i>
                    <span>Ventas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-box"></i>
                    <span>Servicios</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-file-invoice"></i>
                    <span>Facturas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-chart-pie"></i>
                    <span>Resportes</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-cog"></i>
                    <span>Ajustes</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-cogs"></i>
                    <span>Ajustes Avanzados</span></a>
            </li>


            <form  method="POST" action="{{ route('logout') }}">
                    @csrf
                   
                    <div style="text-align: right">
                    <a  href="route('logout')" 
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    </div>
                </form>

        </ul>