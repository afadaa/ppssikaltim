<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Konten</a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="{{ route('beritas.index') }}" class="dropdown-item {{ Request::is('beritas*') ? 'active' : '' }}">Blog</a>
        <a href="{{ route('announcements.index') }}" class="dropdown-item {{ Request::is('announcements*') ? 'active' : '' }}">Pengumuman</a>
        <a href="{{ route('agendas.index') }}" class="dropdown-item {{ Request::is('agendas*') ? 'active' : '' }}">Agenda</a>
    </div>
</div>

<a href="{{ route('layanans.index') }}" class="nav-item nav-link {{ Request::is('layanans*') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Layanan</a>
<a href="{{ route('partners.index') }}" class="nav-item nav-link {{ Request::is('partners*') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Partner</a>

<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Media</a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="{{ route('slides.index') }}" class="nav-item nav-link {{ Request::is('slides*') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Carousel</a>
        <a href="{{ route('galeris.index') }}" class="nav-item nav-link {{ Request::is('galeris*') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Galeri</a>
        <a href="{{ route('videos.index') }}" class="nav-item nav-link {{ Request::is('videos*') ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i>Video</a>        
    </div>
</div>

<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>User</a>
    <div class="dropdown-menu bg-transparent border-0">
        <a href="{{ route('users.index') }}" class="dropdown-item {{ Request::is('users*') ? 'active' : '' }}">Profil</a>
        <a href="{{ route('users.index') }}" class="dropdown-item {{ Request::is('users*') ? 'active' : '' }}">Data</a>
        <a href="#" class="dropdown-item"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

