<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

{{-- 测试 generoi/sage-woocommerce start --}}
{{--@include('archive-product')--}}
{{--@include('woocommerce.single-product')--}}

{{--@php--}}
{{--  defined( 'ABSPATH' ) || exit;--}}
{{--@endphp--}}
{{--@php--}}
{{--  wc_get_template( 'archive-product.php' );--}}
{{--@endphp--}}

{{-- 测试 generoi/sage-woocommerce end --}}

{{--   <main id="main" class="main"> --}}
{{--     @yield('content') --}}
{{--   </main> --}}

{{--   @hasSection('sidebar') --}}
{{--     <aside class="sidebar"> --}}
{{--       @yield('sidebar') --}}
{{--     </aside> --}}
{{--   @endif --}}

{{-- @include('sections.footer') --}}
