<header class="banner">

  <div class="navbar bg-base-100 hover:bg-sky-700">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
    </div>
    <div class="flex-none">
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle">
          <div class="indicator">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
            <span class="badge badge-sm indicator-item">8</span>
          </div>
        </label>
        <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
          <div class="card-body">
            <span class="font-bold text-lg">8 Items</span>
            <span class="text-info">Subtotal: $999</span>
            <div class="card-actions">
              <button class="btn btn-primary btn-block">View cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
          </div>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li>
            <a class="justify-between">
              Profile
              <span class="badge">New</span>
            </a>
          </li>
          <li><a>Settings</a></li>
          <li><a>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  {{-- <a class="brand" href="{{ home_url('/') }}"> --}}
  {{--   {!! $siteName !!} --}}
  {{-- </a> --}}

  {{-- @if (has_nav_menu('primary_navigation')) --}}
  {{--   <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"> --}}
  {{--     {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!} --}}
  {{--   </nav> --}}
  {{-- @endif --}}



</header>

<!-- wp_nav_menu() 输出结果
  <div class="menu-menu-container">
      <ul id="menu-menu-1" class="nav">
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a href="#">NEWS</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-11">
              <a href="#">ALL OUR BAGS</a>
              <ul class="sub-menu">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16">
                      <a href="#">OUR SELECTION</a>
                      <ul class="sub-menu">
                          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17">
                              <a href="#">ALL OUR BAGS</a>
                          </li>
                      </ul>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18">
                      <a href="#">CATEGORIES</a>
                      <ul class="sub-menu">
                          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19">
                              <a href="#">HANDBAG</a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#">DESIGNER</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#">DAILY DEALS</a></li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="#">MAGAZINE</a></li>
      </ul>
  </div>
-->
