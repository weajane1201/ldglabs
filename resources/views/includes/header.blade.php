<head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

          <!-- Vendor CSS Files -->



</head>


<div class="container ldg-navigation">
        <div class="row">
                <div class="col-md"><a class="navbar-brand" href="/"><img src="{{asset('assets/images/logo.png')}}" alt="" style="width: 35%;"></a></div>
                <div class="col-md-10">
                        <div class="d-flex justify-content-end navigation-container">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                                <ul class="navbar-nav">
                                                        <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                                                        </li>
                                                        <li class="nav-item">
                                                                <a class="nav-link" href="/ldg-certifications">LDG Certifications</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" href="/verify-diamonds">Verify Diamonds</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" href="/about-ldg">About LDG</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" href="/contact">Contact LDG</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" href="https://portal.ldglabs.com/">Portal</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" href="https://portal.ldglabs.com/certificatelookup">Certification Lookup</a>
                                                        </li>
                                                </ul>
                                        </div>
                                </nav>
                        </div>
                </div>
        </div>
</div>