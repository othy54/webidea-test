<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preload" href="@asset('fonts/Rubik-Variable.woff2')" as="font" type="font/woff2" crossorigin>
  <style>
    @font-face {
      font-display: swap;
      font-family: 'Rubik';
      src: url("{{ asset('fonts/Rubik-Variable.woff2') }}") format('woff2');
      font-style: normal;
    }
  </style>

  @yield('head')
  {{-- @php(do_action('get_header')) --}}
  @php(wp_head())

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