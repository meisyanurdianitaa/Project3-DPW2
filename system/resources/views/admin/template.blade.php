<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

@include("admin.section.assets")
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include("admin.section.header")
      <div class="main-sidebar">
        @include("admin.section.sidebar")
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <!-- Ngoding disini -->
            
            @yield('content')

            <!-- sampai disini -->
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
      @include("admin.section.footer")
    </div>
  </div>

@include("admin.section.js")
</body>
</html>
