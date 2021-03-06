<!--BEGIN TOPBAR-->
<div id="header-topbar-option-demo" class="page-header-topbar">
    <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a id="logo" href="/" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Supremo Encanto</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a> 
        <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
            <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Pesquisar..." class="form-control text-white"/></div>
        </form>
        <ul class="nav navbar navbar-top-links navbar-right mbn">
            @if (Auth::guest())
                <a class="login" href="{{ route('login') }}">Login</a>
            @else
            <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="{{URL::asset('resources/assets/img/')}}/{{ Auth::user()->pessoa_id }}.png" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">{{ Auth::user()->pessoa_id }}</span>&nbsp;<span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-user pull-right">
                    <li><a href="/construcao"><i class="fa fa-user"></i>Meu Perfil</a></li>
                    
                    <li class="divider"></li>
                    
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="fa fa-key"></i>Sair</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                        </li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</nav>
</div>
<!--END TOPBAR-->