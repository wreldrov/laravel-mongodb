
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Культура и отдых</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('library.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Библиотеки</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('park.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Парки</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('theatre.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Театры</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kyzylorda-info.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Средства массовой информации</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('zony-otdykha.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Зоны отдыха</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
