@php
    $current_route=request()->route()->getName();
@endphp

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">Main Navigation</li>
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{$current_route=='dashboard'?'active':''}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('citizenRead') }}" class="nav-link {{ request()->is('data*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Senior Citizen
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('reportsRead') }}" class="nav-link {{ request()->is('generate*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Reports
                </p>
            </a>
        </li>

        <li class="nav-header">User Management</li>
        <li class="nav-item">
            <a href="{{ route('userRead') }}" class="nav-link {{ request()->is('all*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users-gear"></i>
                <p>
                    Users
                </p>
            </a>
        </li>

    </ul>
</nav>