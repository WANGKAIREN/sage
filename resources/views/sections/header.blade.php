<header class="banner">

  <div class="navbar bg-red-500 hover:bg-green-500 transition-colors duration-300">
    <div class="navbar-start hidden lg:flex">
      <a class="btn btn-ghost normal-case text-xl">
        <img src="{{ asset('../../images/header/logo-Glamore-white.svg') }}" class="logo white-logo" alt="White Logo">
        <img src="{{ asset('../../images/header/logo-Glamore-black.svg') }}" class="logo black-logo" alt="Black Logo">
      </a>
    </div>
    <div class="navbar-start lg:hidden dropdown">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
          <rect width="23" height="2" rx="1" fill="currentColor"></rect>
          <rect y="8" width="18" height="2" rx="1" fill="currentColor"></rect>
          <rect y="16" width="23" height="2" rx="1" fill="currentColor"></rect>
        </svg>
      </label>
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52', 'echo' => false, 'items_wrap' => '<div class="ckr"><ul id="%1$s" class="%2$s">%3$s</ul></div>']) !!}
        </nav>
      @endif
    </div>
    <div class="navbar-center hidden lg:flex"> <!-- 使用 flex 和 items-center 来水平对齐内容 -->
      @if (has_nav_menu('primary_navigation'))

        @php
          /**
           * 添加自定义 CSS 类到子菜单 ul 元素
           *
           * 钩子触发地方 cmd + shift + f 搜索「// Default class.」
           * {@link wp-includes/class-walker-nav-menu.php start_lvl()}
           */
          function custom_submenu_classes($classes, $args, $depth) {
              // 在这里添加你希望的 CSS 类，例如 'p-2'
              $classes[] = 'p-2';

              return $classes;
          }
          add_filter('nav_menu_submenu_css_class', 'custom_submenu_classes', 10, 3);
        @endphp

        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav menu menu-horizontal px-1', 'echo' => false]) !!}
        </nav>
      @endif
    </div>
    <div class="navbar-end">

      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="indicator">
            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" width="21" height="22">
              <path class="cls-1" d="m400,351.92c-95.62,0-173.41-77.79-173.41-173.41S304.38,5.1,400,5.1s173.41,77.79,173.41,173.41-77.79,173.41-173.41,173.41Zm0-322.22c-82.05,0-148.81,66.76-148.81,148.81s66.75,148.81,148.81,148.81,148.81-66.76,148.81-148.81S482.05,29.7,400,29.7Z" fill="currentColor"></path>
              <path class="cls-1" d="m663.34,794.9H136.65c-32.54,0-59.02-26.48-59.02-59.02v-128.07c0-112.79,91.76-204.56,204.56-204.56h235.62c112.79,0,204.56,91.76,204.56,204.56v128.07c0,32.54-26.48,59.02-59.02,59.02Zm-381.16-367.05c-99.23,0-179.96,80.73-179.96,179.96v128.07c0,18.98,15.44,34.42,34.42,34.42h526.69c18.98,0,34.42-15.44,34.42-34.42v-128.07c0-99.23-80.73-179.96-179.96-179.96h-235.62Z" fill="currentColor"></path>
              <path class="cls-1" d="m176.89,794.9c-6.79,0-12.3-5.51-12.3-12.3,0-86.51,36.74-169.5,100.81-227.71,5.04-4.57,12.8-4.19,17.38.83,4.57,5.03,4.2,12.81-.83,17.37-58.94,53.56-92.75,129.92-92.75,209.51,0,6.79-5.51,12.3-12.3,12.3Z" fill="currentColor"></path>
              <path class="cls-1" d="m633.35,794.9c-6.79,0-12.3-5.51-12.3-12.3,0-79.59-33.81-155.95-92.75-209.51-5.03-4.57-5.4-12.35-.83-17.37,4.57-5.03,12.34-5.4,17.38-.83,64.06,58.21,100.81,141.21,100.81,227.71,0,6.79-5.51,12.3-12.3,12.3Z" fill="currentColor"></path>
            </svg>
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

      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle">
          <div class="indicator">
            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" width="18" height="22">
              <path class="cls-1" d="m580.17,253.64c-5.45-85.97-110.71-242.25-173.49-247.18h0s0,0-.01,0c-.01,0-.04,0-.04,0-4.69-.78-9.2-.73-13.22.03-2.2.34-4.39.89-6.51,1.64h0c-28.93,9.36-68.93,50-107,108.72-33.68,51.96-56.5,104.39-59.84,136.8H18.04l29.35,461.91c3.71,44.05,41.24,78.56,85.44,78.56h535.25c44.31,0,81.85-34.61,85.46-78.92l28.41-461.55h-201.79Zm-13.39,6.81v81.14h-54.3v-87.95h-.1c-1.49-56.09-20.89-142.01-51.45-196.5,51.16,51.22,105.85,143.37,105.85,203.32ZM391.2,21.06h0s.24-.09.24-.09c1.32-.47,2.69-.81,4.26-1.06,2.85-.53,5.61-.53,8.72-.01,48.98,8.37,92.11,148.33,94.35,233.74h-197.4c1.5-40.35,11.9-93.45,27.13-137.66,18.24-52.95,41.09-87.54,62.71-94.92Zm-57.56,46.35c-27.38,55.05-44,134.77-45.91,186.23h-.18v87.95h-54.3v-81.04c.63-42.75,50.72-135.91,100.38-193.14Zm406.31,646.81c-3.03,37.15-34.6,66.26-71.87,66.26H132.84c-37.18,0-68.75-29.02-71.85-65.94l-28.43-447.28h187.08v87.95h81.55v-87.95h197.68v87.95h81.55v-87.95h187.06l-27.51,446.95Z" fill="currentColor"></path>
            </svg>
            <span class="badge badge-xs indicator-item">18</span>
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

    </div>
  </div>



  {{-- <a class="brand" href="{{ home_url('/') }}"> --}}
  {{--   {!! $siteName !!} --}}
  {{-- </a> --}}

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
