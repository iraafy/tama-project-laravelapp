<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style2.css">
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <!-- Title Page -->
    <title>
        @yield('title')
    </title>
</head>

<body>
    <!-- Start Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container ps-4 pe-4">
                <a class="navbar-brand" href="#">
                    <iconify-icon inline icon="fluent-emoji:robot" class="fs-2"></iconify-icon>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5">
                        <li class="nav-item">
                            <a class="nav-link" href="/#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#feature">Our Feature</a>
                        </li>
                        @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                <iconify-icon inline icon="clarity:login-line" style="color: #592c75;"></iconify-icon> Login
                            </a>
                        </li>
                        @elseif (Auth::user()->role == 'Lecturer')
                        <li class="nav-item">
                            <a class="nav-link" href="/lecturer-dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <iconify-icon inline icon="clarity:logout-line" style="color: #592c75;"></iconify-icon> Logout
                            </a>
                        </li>
                        @elseif (Auth::user()->role == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/admin-dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <iconify-icon inline icon="clarity:logout-line" style="color: #592c75;"></iconify-icon> Logout
                            </a>
                        </li>
                        @elseif (Auth::user()->role == 'Student')
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <iconify-icon inline icon="clarity:logout-line" style="color: #592c75;"></iconify-icon> Logout
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navbar -->
    <main class="pt-5">
        @yield('content')
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script> -->

</body>

</html>