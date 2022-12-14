<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content" style="background-color: #fca40b;">
        
        <ul class="nav navbar-nav align-items-center ms-auto">
                       
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="color: whitesmoke;">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">{{ Auth::user()->name ?? 'AdzBloom' }}</span>
                        <span class="user-status">{{ Auth::user()->roles[0]->name ?? 'User' }}</span>
                    </div>
                    <span class="avatar">
                        <img class="round" alt="avatar" height="40" width="40" src="{{asset('Backend/assets/images/avatars/user.jpg')}}">
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    
                    <a class="dropdown-item"
                        href="#">
                        <i class="me-50" data-feather="user"></i> Profile
                    </a>
                    <a class="dropdown-item"
                        href="#">
                        <i class="me-50" data-feather="user"></i> Change Password
                    </a>
                    
                    <form method="POST" action='{{ route('Backend.logout') }}' id="my_form">
                        @csrf
                        <a class="dropdown-item" onclick="document.getElementById('my_form').submit();"><i
                                class="me-50" data-feather="power"></i> Logout
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
