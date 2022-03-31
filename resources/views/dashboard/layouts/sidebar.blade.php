<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" aria-current="page" href="/">
            <span data-feather="home"></span>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('buku') ? 'active' : ''}}" href="{{ route('buku.index') }}">
            <span data-feather="book-open"></span>
            Data Buku
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('siswa') ? 'active' : ''}}" href="{{ route('siswa.index') }}">
              <span data-feather="user"></span>
              Siswa
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('pinjam') ? 'active' : ''}}" href="{{ route('pinjam.index') }}">
            <span data-feather="arrow-right"></span>
            Peminjaman
          </a>
        </li>
        <li class="nav-item">
         <a class="nav-link {{ Request::is('pengembalian') ? 'active' : ''}}" href="{{ route('pengembalian.index') }}">
            <span data-feather="arrow-left"></span>
            Pengembalian
          </a>
        </li>
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link px-3 bg-dark border-0"><span data-feather="log-out"></span> Logout</button>
            </form>
        </li>
      </ul>
    </div>
  </nav>
