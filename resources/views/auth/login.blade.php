<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Gem</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css?v=1') }}" type="text/css">
</head>

<body style="background-image: url('https://wallpapercave.com/wp/wp5953574.png')">
  <!-- Sidenav -->
  <div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4 pb-5">
            <form action="{{ route('login') }}" class="login" method="POST">
                @csrf
                <h2 class="text-center text-light mb-2">Login Here</h2>
                @if (session()->has('error'))
                    <p class="m-0 text-danger mb-2 text-center">
                        {{ session()->get('error') }}
                    </p>
                @endif
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" name="email" class="form-control rounded-lg" id="">
                </div>

                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" name="password" class="form-control rounded-lg" id="">
                </div>
                <div class="form-group">
                    <button class="btn btn-warning">Login</button>
                </div>
            </form>
        </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>