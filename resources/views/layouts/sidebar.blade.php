<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">ClassKu</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">CK</a>
    </div>
    <ul class="sidebar-menu">        
      <li class="menu-header">MENU</li>
      <li class="nav-item {{Request::is('admin') ? 'active' : ''}}">
        <a href="{{route("dashboard")}}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class="nav-item {{Request::is('admin/user') ? 'active' : ''}}">
        <a href="{{route("user.index")}}"><i class="fas fa-user"></i><span>Pengguna</span></a>
      </li>
      <li class="nav-item {{Request::is('admin/student') ? 'active' : ''}}">
        <a href="{{route("student.index")}}"><i class="fas fa-graduation-cap"></i><span>Siswa</span></a>
      </li>
      <li class="nav-item {{Request::is('admin/teacher') ? 'active' : ''}}">
        <a href="{{route("teacher.index")}}"><i class="fas fa-graduation-cap"></i><span>Guru</span></a>
      </li>
      <li class="nav-item {{Request::is('admin/mapel') ? 'active' : ''}}">
        <a href="{{route("mapel.index")}}"><i class="fas fa-calendar-alt"></i><span>Mapel</span></a>
      </li>
    </ul>
  </aside>
</div>