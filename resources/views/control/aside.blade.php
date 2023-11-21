<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>{{auth()->user()->fname}} {{auth()->user()->mname}}. {{auth()->user()->lname}}</h5>
        <p>{{auth()->user()->role}}</p>
        <a href="{{ route('logout') }}" class="btn btn-danger btn-block sign-out">
            <i class="fas fa-power-off"></i> Sign Out
        </a>
    </div>
</aside>