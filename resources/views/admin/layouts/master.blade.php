<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- Dashboard CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
  <div class="main-wrapper">
    <div class="sidebar">
      <!-- your sidebar -->
      <h2>🛍️🛒Shopping<br><span>Inventory</span></h2>
      <ul>
        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">🏠Dashboard</a>
        </li>
        <li class="{{ request()->routeIs('product') ? 'active' : '' }}">
            <a href="{{ route('product') }}">📦Product</a>
        </li>
        <li class="{{ request()->routeIs('categories') ? 'active' : '' }}">
            <a href="{{ route('categories') }}">🦖Categories</a>
        </li>
        <li class="{{ request()->routeIs('orders') ? 'active' : '' }}">
            <a href="{{ route('orders') }}">📃Orders</a>
        </li>
        <li class="{{ request()->routeIs('customers') ? 'active' : '' }}">
            <a href="{{ route('customers') }}">🤵🏻Customers</a>
        </li>
        <li class="{{ request()->routeIs('sales_promotion') ? 'active' : '' }}">
            <a href="{{ route('sales_promotion') }}">💣Sales Promotion</a>
        </li>
        <li class="{{ request()->routeIs('inventory') ? 'active' : '' }}">
            <a href="{{ route('inventory') }}">🏢Inventory</a>
        </li>
        <li class="{{ request()->routeIs('accounts') ? 'active' : '' }}">
            <a href="{{ route('accounts') }}">👨🏻Accounts</a>
        </li>
        <li class="{{ request()->routeIs('app') ? 'active' : '' }}">
            <a href="{{ route('app') }}">📲App</a>
        </li>
        <li class="{{ request()->routeIs('store_locator') ? 'active' : '' }}">
            <a href="{{ route('store_locator') }}">📍Store Locator</a>
        </li>
        <li class="{{ request()->routeIs('ui_components') ? 'active' : '' }}">
            <a href="{{ route('ui_components') }}">🥊UI Components</a>
        </li>
    </ul>
    </div>

    <div class="main-content">
      @yield('content')
    </div>
  </div>
</body>
</html>

