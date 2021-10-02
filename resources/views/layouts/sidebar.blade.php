<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<style>

    .btn-menu {
                display: none;
                padding: 20px;
            background: #0d2c44;
            color: #fff;
            }

            .contenedor-menu {
                width: 20%;
                min-width: 300px;
                margin: 50px;
                display: inline-block;
                font-family: 'Roboto', sans-serif;
                line-height: 18px;
            }

            .contenedor-menu .menu {
                width: 100%;
            }

            .navbar-nav ul{
                list-style: none;
            }

            .contenedor-menu .menu li a {
                color: #494949;
                display: block;
                padding: 15px 20px;
                background: #e9e9e9;
            }

            .contenedor-menu .menu li a:hover{
                background: #1a95d5;
                color: #fff;
            }
            .navbar-nav ul{
            display: none;
            }
            
            .contenedor-menu .menu ul li a{
                background: #424242;
                color: #e9e9e9;
            }

            .contenedor-menu .menu .activado > a{
                background: #1a95d5;
                color: #fff;
            }

</style>

<script>

    $(document).ready(function(){
        $('.navbar-nav li:has(ul)').click(function(e){
            e.preventDefault();


            if ($(this).hasClass('')){
                $(this).children('ul').slideUp();
                $(this).addClass('activado');
                window.setTimeout( show_popup, 500 );

            }

            if ($(this).hasClass('activado')){
                $(this).removeClass('activado');
                //$(this).children('ul').slideUp();
                $(this).children('ul').slideDown();
                window.setTimeout( show_popup, 500 );
                
            }

            
            
            //}else if($(this).hasClass('desactivado')){
                //$('.navbar-nav  li ul').slideUp();
               // $('.navbar-nav li').removeClass('activado');
               // $(this).addClass('activado');
               // $(this).children('ul').slideDown();
              //  $(this).children('ul').slideUp();
               
            //}
        });
    });
</script>


    
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


           <div nav-item><li  class="activado">
                <a class="nav-link" href="/dashboard/">
                <i class="fas fa-coins"></i>
                <span>Ingresos</span></a>
                <ul>
                    <li >
                    <a class="nav-item nav-link" href="/dashboard/">
                    <i class="fas fa-users"></i>
                    <span>Informe</span></a>
                    </li>
                    <li >
                    <a class="nav-item nav-link" href="/dashboard/">
                    <i class="fas fa-users"></i>
                    <span>Tabulador</span></a>
                    </li>
                </ul>
            </li></div>


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