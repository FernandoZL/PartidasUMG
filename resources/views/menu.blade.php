   <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                  <!-- Logo -->
                @if (Auth::guest())
                 <a class="navbar-brand" href="{{ url('/') }}" style="padding: 0px; padding-right: 15px;">
                @else
                 <button type="button" class="navbar-toggle collapsed" style="width: 50px; height: 34px; padding: 6px 10px;" data-toggle="collapse" data-target="#app-notification">
                    <span class="fa fa-bell-o"></span>
                </button>

                <div class="collapse navbar-toggle" style="position: initial; border: 0px;" id="app-notification">
                    <div style="display: inline-block; top: 56px; width: 100%; min-width: 100%;
                    z-index: 9999; border-radius: 3px; box-shadow: 0px 1px 2px rgba(0,0,0,0.1); position: absolute; background: #fff; background-clip: padding-box; 
                    border: 1px solid rgba(61,70,77,0.1); cursor: default; left:0;">
                        <div style="box-shadow: 0 1px 0 rgba(0,0,0,0.04); border-bottom: 1px solid rgba(37,40,43,0.1); line-height: 30px; padding-left: 10px; position: relative; z-index: 10;">
                            Notificaciones     
                        </div>
                        <div style="max-height: 400px; overflow: auto; overflow-x: hidden; padding: 20px; color: #ccc; font-style: italic;">
                            <div style="display: block; color: #000; font-style: normal; text-align: center; padding: 8px 10px 20px 10px;">
                                <center>
                                    <span class="fa fa-bell-o" style="font-size: 14em;"></span><br/>
                                    <div style=" padding-left: 10px;">Sin notificaciones</div>   
                                </center>
                            </div>
                        </div>
                    </div>
                </div>




                 <a class="navbar-brand" href="{{ url('/home') }}" style="padding: 0px; padding-right: 15px;">           
                @endif
                    <div>
                        <div style="width: 25%; display: inline;">
                            <span class="fa fa-user fa-2x"></span>
                        </div>
                        <div style="width: 75%; display: inline;">
                            <label style="font-size: 18px; margin-bottom: -10px;">Contable</label>
                        </div>
                        <div style="margin-top: -10px;">
                            <label style="font-size: 10px; margin: -4px 0px 0px 38px;">Sistema</label>
                        </div>
                    </div> 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Este menú se mostrará cuando haya iniciado sesión -->     
                <!-- Menu lado izquierdo-->
            @if (Auth::check())
                <ul class="nav navbar-nav">
                    <!-- Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               Administración <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-list"></i>Catalogos</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-users"></i>Usuarios</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-users"></i>Bitácora</a></li>
                            </ul>
                        </li>
                </ul>

                <ul class="nav navbar-nav">
                    <!-- Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Partidas Contables <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-plus"></i>Crear partida</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-ban "></i>Anular partida</a></li>
                            </ul>
                        </li>
                </ul>

                <ul class="nav navbar-nav">
                    <!-- Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Libros Contables <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-book"></i>Libro Diario</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-bar-chart"></i>Estado de Resultados</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-columns"></i>Balance General</a></li>
                            </ul>
                        </li>
                </ul>

                <ul class="nav navbar-nav">
                    <!-- Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Consultas <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-list-alt"></i>Partidas</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-book"></i>Libro Diario</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-bar-chart"></i>Estado de Resultados</a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-columns"></i>Balance General</a></li>
                            </ul>
                        </li>
                </ul>
            @endif
                <!-- Menú lado derecho -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        @if (DB::table('users')->get() != null )
                            <li><a href="{{ url('/login') }}">Inicia sesión</a></li>
                        @else
                            <li><a href="{{ url('/register') }}">Registrate</a></li>
                        @endif
                    @else
                        
                        <li class="dropdown">
                            <!-- Notificaciones -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="fa-1x fa fa-bell-o" style="margin-top: -10px;"></span></a>

                            <ul class="dropdown-menu" role="menu" style="min-width: 320px;">
                                <div style="box-shadow: 0 1px 0 rgba(0,0,0,0.04); border-bottom: 1px solid rgba(37,40,43,0.1); line-height: 30px; padding-left: 10px; position: relative; z-index: 10;">Notificaciones</div>
                                
                                <center>
                                    <span class="fa fa-bell-o" style="font-size: 14em;"></span><br/>
                                    <div style=" padding-left: 10px;">Sin notificaciones</div>   
                                </center>
                                <li role="separator" class="divider"></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="fa-2x fa fa-user" style="margin-top: -10px;"></span>  {{ Auth::user()->name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-cogs"></i>Configuración</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
    </div>
</nav>