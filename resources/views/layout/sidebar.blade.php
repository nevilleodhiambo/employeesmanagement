<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Employee System</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div>
            <a href="{{route('employees.index')}}" class="nav-item nav-link {{ request()->routeIs('attendance.form') ? 'active' : '' }}" ><i class="fa fa-list-ul me-2"></i>Attendance</a>
            <a href="{{route('employees.index')}}" class="nav-item nav-link {{ request()->routeIs('roles.index') ? 'active' : '' }}" ><i class="fa fa-shield-alt me-2"></i>Roles</a>
            <a href="{{route('employees.index')}}" class="nav-item nav-link {{ request()->routeIs('employees.index') ? 'active' : '' }}" ><i class="fa fa-user me-2"></i>Employees</a>
            <a href="{{route('department.index')}}" class="nav-item nav-link {{ request()->routeIs('department.index') ? 'active' : '' }}"><i class="fa fa-building me-2"></i>Departments</a>
            <a href="" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Leaves</a>
            <a href="{{route('calculator')}}" class="nav-item nav-link {{ request()->routeIs('calculator') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Payroll</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Deductions and Reliefs</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('nhif.index')}}" class="dropdown-item {{ request()->routeIs('nhif.index') ? 'active' : '' }}">NHIF</a>
                    <a href="{{route('nssf.index')}}" class="dropdown-item {{ request()->routeIs('nssf.index') ? 'active' : '' }}">NSSf</a>
                    <a href="{{route('levy.index')}}" class="dropdown-item {{ request()->routeIs('levy.index') ? 'active' : '' }}">Housing Levy</a>
                    <a href="{{route('paye.index')}}" class="dropdown-item {{ request()->routeIs('paye.index') ? 'active' : '' }}">PAYE</a>
                    <a href="{{route('relief.index')}}" class="dropdown-item {{ request()->routeIs('relief.index') ? 'active' : '' }}">Personal Relief</a>
                    <a href="{{route('nhifrelief.index')}}" class="dropdown-item {{ request()->routeIs('nhifrelief.index') ? 'active' : '' }}">Nhif Relief</a>
                </div>
            </div>
        </div>
    </nav>
</div>