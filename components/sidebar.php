
<?php
$request = $_SERVER['REQUEST_URI'];
$page = str_replace("/bikecaution/", "", $request);
?>
<ul class="menu-inner py-1">
  <!-- Dashboard -->
  <li class="menu-item <?= ($page == "" || $page == "homepage" ? "active" : "") ?>">
    <a href="./" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Pages</span>
  </li>
  <li class="menu-item <?= ($page == "users" ? "active" : "") ?>">
    <a href="users" class="menu-link">
      <i class="menu-icon tf-icons bx bx-user"></i>
      <div data-i18n="Analytics">Users</div>
    </a>
  </li>
</ul>