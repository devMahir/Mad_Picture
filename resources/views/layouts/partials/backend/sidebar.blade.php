<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
      <img style="height: 55px; width: 240px; margin-top: 40px; margin-bottom: 10px; " src="{{ asset('frontend/img/023.png') }}" alt="logo">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/homevideo*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('homevideo.index') }}">
          <i class="material-icons">home</i>
          <p>Home Video</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/contact*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('contact.index') }}">
          <i class="material-icons">library_books</i>
          <p>Messages</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/quote*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('quote.index') }}">
          <i class="material-icons">content_paste</i>
          <p>Quote List</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('admin/video*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('video.index') }}">
          <i class="material-icons">video_call</i>
          <p>Video Catalog</p>
        </a>
      </li>
      <li class="nav-item active-pro ">
        <a class="nav-link" href="./upgrade.html">
          <i class="material-icons">unarchive</i>
          <p>Upgrade to PRO</p>
        </a>
      </li>
    </ul>
  </div>
</div>