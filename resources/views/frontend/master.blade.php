<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  @include('frontend.include._header-script')
</head>

<body>
  <!-- Sidenav -->
  @include('frontend.include._sidenav')

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('frontend.include._navbar')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Content -->
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  @include('frontend.include._footer-script')
</body>

</html>