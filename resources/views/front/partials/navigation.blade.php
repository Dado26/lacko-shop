<div class="nav-links-bg">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item px-3">
                <a class="nav-link {{ (request()->is('/'))  ? 'active' : '' }}" href="{{ route('index') }}">Početna</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link {{ (request()->is('o-nama'))  ? 'active' : '' }}" href="{{ route('about') }}">O Nama</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link {{ (request()->is('aktuelnosti'))  ? 'active' : '' }}" href="{{ route('news') }}">Aktuelnosti</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link {{ (request()->is('vrste-radova'))  ? 'active' : '' }}" href="{{ route('type') }}">Vrste Radova</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link {{ (request()->is('galerija*'))  ? 'active' : '' }}" href="{{ route('gallery') }}">Galerija</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link {{ (request()->is('kontakt'))  ? 'active' : '' }}" href="{{ route('contact') }}">Kontakt</a>
            </li>
        </ul>
    </div>
</div>
