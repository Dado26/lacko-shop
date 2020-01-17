<div class="collapse navbar-collapse nav-links-bg col-lg-8 d-flex justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item pr-3">
        <a class="nav-link text-white {{ (request()->is('index'))  ? 'active' : '' }}" href="{{ route('index') }}">Početna</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link text-white {{ (request()->is('about'))  ? 'active' : '' }}" href="{{ route('about') }}">O Nama</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link text-white {{ (request()->is('news'))  ? 'active' : '' }}" href="{{ route('news') }}">Aktuelnosti</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link text-white {{ (request()->is('type'))  ? 'active' : '' }}" href="{{ route('type') }}">Vrste Radova</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link text-white {{ (request()->is('gallery*'))  ? 'active' : '' }}" href="{{ route('gallery') }}">Galerija</a>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link text-white {{ (request()->is('contact'))  ? 'active' : '' }}" href="{{ route('contact') }}">Kontakt</a>
      </li>
    </ul>
  </div>