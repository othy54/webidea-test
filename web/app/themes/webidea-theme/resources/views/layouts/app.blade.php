<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="@asset('normalize.css')">
  <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js"></script>

  @php(do_action('get_header'))
  @php(wp_head())
  @yield('style')
</head>

<body @php(body_class())>
  @php(wp_body_open())

  <div id="app">
    {{-- <a class="sr-only focus:not-sr-only" href="#main">
      {{ __('Skip to content') }}
    </a>

    @include('sections.header') --}}

    <main id="main" class="main">
      @yield('content')
    </main>

    {{-- @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    @endif

    @include('sections.footer') --}}
  </div>

  @php(do_action('get_footer'))
  @php(wp_footer())
</body>

</html>