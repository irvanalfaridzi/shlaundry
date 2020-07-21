<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Candhik Ayu</title>
  @include('frontend.include._header-script')
</head>

<body>
  <!-- Sidenav -->
  @include('member.include._sidenav')

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('frontend.include._navbar')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Content -->
          @yield('content-head')
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
        @yield('content-body')
        @include('frontend.include._footer')
    </div>
  </div>
  @include('frontend.include._footer-script')
</body>

</html>