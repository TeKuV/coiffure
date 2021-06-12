<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <a class="close-canvas-menu"><i class="fa fa-times"></i></a>
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> 
                            <span class="block m-t-xs">
                                <strong class="font-bold">Boss</strong>
                            </span> 
                            {{-- <span class="text-muted text-xs block">{{Auth::user()->nom}} {{Auth::user()->prenom}}<b class="caret"></b></span>  --}}
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    MB
                </div>
            </li>
            <li>
                <a href="#"><i class="fa fa-tachometer"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="{{route('coiffures.index')}}"><i class="fa fa-scissors"></i> <span class="nav-label">Hairstyle</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label"> Manage </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">

                    <li>
                        <a href="#">General <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"> Icon </a>
                            </li>
                            <li>
                                <a href="#"> Carousel </a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>

                        </ul>
                    </li>
                    <li class="{{Request::is('users.index') ? 'active' : 'null'}}"><a href="{{route('profiles.show')}}">Account</a></li>
                    
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-lock"></i> <span class="nav-label">Autorisations</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="{{Request::is('users.index') ? 'active' : 'null'}}"><a href="{{route('users.index')}}">Users</a></li>
                    <li class="{{Request::is('roles.index') ? 'active' : 'null'}}"><a href="{{route('roles.index')}}">Roles</a></li>
                    <li class="{{Request::is('permissions.index') ? 'active' : 'null'}}"><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
            
        </ul>

    </div>
</nav>