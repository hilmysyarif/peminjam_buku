<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('admin.dashboard.index') }}">Peminjaman Buku</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('admin.dashboard.index') }}">{{ Str::limit(config('app.name'), 2, '') }}</a>
    </div>
    <ul class="sidebar-menu">
      <li class="{{ Request::segment(2) === 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-fire"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="menu-header">Data Master</li>
      <li class="{{ Request::segment(2) === 'users' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="far fa-user"></i>
          <span>Siswa</span></a>
      </li>
      <li class="{{ Request::segment(2) === 'books' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.books.index') }}"><i class="fas fa-book"></i> <span>Buku</span></a>
      </li>
      <li class="menu-header">Data Transaksi</li>
      <li
        class="nav-item dropdown {{ (Request::segment(2) === 'book-borrowers' ? 'active' : '') || Request::segment(2) === 'book-borrowers-history' ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-book-reader"></i> <span>Peminjaman</span></a>
        <ul class="dropdown-menu">
          <li class="{{ Request::segment(2) === 'book-borrowers' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.book-borrowers.index') }}">Peminjam Buku</a>
          </li>

          <li class="{{ Request::segment(2) === 'book-return' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.book-return.index') }}">Pengembalian Buku</a>
          </li>
        </ul>
      </li>
      <li class="menu-header">Data Report</li>
      <li
        class="nav-item dropdown {{ (Request::segment(2) === 'book-borrowers' ? 'active' : '') || Request::segment(2) === 'book-borrowers-history' ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-list"></i> <span>Report</span></a>
        <ul class="dropdown-menu">
          <li class="{{ Request::segment(2) === 'book-borrowers-history' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.book-borrowers-history.index') }}">Report Pinjaman</a>
          </li>

          <li class="{{ Request::segment(2) === 'users-history' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users-history.index') }}">Report Data Siswa</a>
          </li>
        </ul>
      </li>   
    </ul>

  </aside>
</div>