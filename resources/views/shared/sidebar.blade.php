<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="../dashboard/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ auth()->user()->name }} {{ auth()->user()->surname }}</span>
                    <span class="text-secondary text-small">{{ auth()->user()->role }}</span>
                </div>
            </a>
        </li>
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="/admin/home">
                    <span class="menu-title">Analytics</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/all_demandes">
                    <span class="menu-title">All Demandes</span>
                    <i class="mdi mdi-account-details menu-icon"></i>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'manager')
            <li class="nav-item">
                <a class="nav-link" href="/client/home">
                    <span class="menu-title">Analytics</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'client')
            <li class="nav-item">
                <a class="nav-link" href="/client/home">
                    <span class="menu-title">Analytics</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/client/demande">
                    <span class="menu-title">Demande</span>
                    <i class="mdi mdi-account-details menu-icon"></i>
                </a>
            </li>
        @endif
    </ul>
</nav>
