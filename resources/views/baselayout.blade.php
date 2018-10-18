<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" >
    <script src="{{ asset('js/bootstrap.js') }}" ></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
</head>
<body>
<div class="container">
    <header class="blog-header py-3">

    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="/">Home</a>
            @if(Auth::check())<a class="p-2 text-muted" href="/profile">Profile</a>
            <a class="p-2 text-muted" href="/logout">Logout</a>
            @else<a class="p-2 text-muted" href="/login">Login/Register</a>
            @endif
            {{--<div class="search-container">--}}
                {{--<input type="text" placeholder="Search.." name="search">--}}
                {{--<button type="submit">Submit</button>--}}
            {{--</div>--}}
        </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="row">
            <div class="col-md-8 px-0">
                <h1 class="display-4 font-italic">DEFASTO</h1>
                <p class="lead my-3">Pusat Jualan Mobil Baru & 2nd, Event Otomotif</p>
            </div>
            <div class="col-md-2 px-0">
            </div>
            <div class="col-md-2 px-0">
                @if(Auth::check())<a href="/createnew/" class="btn btn-lg btn-success">Pasang iklan</a>
                @else
                @endif
            </div>
        </div>
    </div>

</div>

<main role="main" class="container">
    @yield("content")
</main><!-- /.container -->

<footer class="blog-footer">
    <p>Contact <a href="https://facebook.com/FajarPro">FajarPro</a> by <a href="https://facebook.com/imung23">Fajar</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

</body>
</html>
