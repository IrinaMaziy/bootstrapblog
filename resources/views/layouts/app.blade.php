<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
@include('layouts.navigation')


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->

        <div class="col-md-8">
            @yield('content')
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
@include('layouts.footer')

<!-- Bootstrap core JavaScript -->
@include('layouts.scripts')

</body>

</html>
